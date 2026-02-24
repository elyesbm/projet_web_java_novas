<?php

namespace App\Controller\Api;

use App\Service\ExternalTextToSpeech;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/api', name: 'app_api_')]
class TextToSpeechController extends AbstractController
{
    #[Route('/tts', name: 'tts', methods: ['POST'])]
    public function tts(Request $request, ExternalTextToSpeech $tts, KernelInterface $kernel): Response
    {
        $data = json_decode((string) $request->getContent(), true);
        if (!is_array($data)) {
            return $this->json(['error' => 'JSON invalide.'], 400);
        }

        $lang = strtolower(trim((string) ($data['lang'] ?? 'fr')));
        $allowedLangs = ['fr', 'en', 'ar', 'es', 'de'];
        if (!in_array($lang, $allowedLangs, true)) {
            return $this->json(['error' => 'Langue non supportée.'], 400);
        }

        $text = trim((string) ($data['text'] ?? ''));
        $text = preg_replace('/\\s+/u', ' ', $text);
        $text = trim((string) $text);

        if ($text === '') {
            return $this->json(['error' => 'Aucun texte à lire.'], 400);
        }

        $len = function_exists('mb_strlen') ? mb_strlen($text) : strlen($text);
        if ($len > 800) {
            return $this->json(['error' => 'Texte trop long (max 800 caractères).'], 400);
        }

        $hash = sha1($tts->getProviderKey() . '|' . $lang . '|' . $text);
        $dir = $kernel->getProjectDir() . DIRECTORY_SEPARATOR . 'var' . DIRECTORY_SEPARATOR . 'tts';
        $path = $dir . DIRECTORY_SEPARATOR . $hash . '.mp3';

        try {
            if (!is_dir($dir) && !@mkdir($dir, 0775, true) && !is_dir($dir)) {
                throw new \RuntimeException('Impossible de créer le dossier de cache TTS.');
            }

            if (!is_file($path) || filesize($path) === 0) {
                $audio = $tts->synthesizeMp3($text, $lang);
                file_put_contents($path, $audio, LOCK_EX);
            }

            $response = new BinaryFileResponse($path);
            $response->headers->set('Content-Type', 'audio/mpeg');
            $response->setContentDisposition(ResponseHeaderBag::DISPOSITION_INLINE, 'tts.mp3');
            $response->setPublic();
            $response->setMaxAge(60 * 60 * 24 * 30);
            $response->headers->addCacheControlDirective('immutable', true);

            return $response;
        } catch (\Throwable $e) {
            return $this->json(['error' => $e->getMessage()], 502);
        }
    }
}

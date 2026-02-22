<?php
/**
 * Script de diagnostic OpenAI — à supprimer après test.
 * Exécuter: php test_openai.php
 */

// Lire la clé depuis .env.local
$envLocal = __DIR__ . '/.env.local';
$key = '';
foreach (file($envLocal) as $line) {
    if (str_starts_with(trim($line), 'OPENAI_API_KEY=')) {
        $key = trim(explode('=', $line, 2)[1]);
        break;
    }
}

echo "=== Diagnostic OpenAI ===\n";
echo "Clé trouvée : " . (empty($key) ? "NON" : "OUI (" . substr($key, 0, 10) . "...)") . "\n";
echo "Longueur clé : " . strlen($key) . " caractères\n\n";

if (empty($key) || str_starts_with($key, 'sk-replace')) {
    echo "❌ Clé invalide ou placeholder.\n";
    exit(1);
}

// Test avec cURL natif
echo "Test connexion OpenAI via cURL...\n";

$payload = json_encode([
    'model'       => 'gpt-4o-mini',
    'messages'    => [
        ['role' => 'user', 'content' => 'Réponds uniquement: {"test":"ok"}']
    ],
    'max_tokens'      => 20,
    'response_format' => ['type' => 'json_object'],
]);

$ch = curl_init('https://api.openai.com/v1/chat/completions');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => $payload,
    CURLOPT_HTTPHEADER     => [
        'Authorization: Bearer ' . $key,
        'Content-Type: application/json',
    ],
    CURLOPT_TIMEOUT        => 30,
    CURLOPT_SSL_VERIFYPEER => true,
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

echo "HTTP Status : $httpCode\n";

if ($curlError) {
    echo "❌ Erreur cURL : $curlError\n";
    exit(1);
}

$body = json_decode($response, true);

if ($httpCode === 200) {
    echo "✅ OpenAI répond correctement!\n";
    echo "Réponse : " . ($body['choices'][0]['message']['content'] ?? 'N/A') . "\n";
} elseif ($httpCode === 401) {
    echo "❌ Clé invalide ou expirée (401 Unauthorized)\n";
    echo "Détail : " . ($body['error']['message'] ?? $response) . "\n";
} elseif ($httpCode === 429) {
    echo "⚠️  Quota dépassé ou rate limit (429)\n";
    echo "Détail : " . ($body['error']['message'] ?? $response) . "\n";
} elseif ($httpCode === 0) {
    echo "❌ Impossible de contacter api.openai.com (pas d'internet ou DNS bloqué?)\n";
} else {
    echo "❌ Erreur HTTP $httpCode\n";
    echo "Détail : " . ($body['error']['message'] ?? $response) . "\n";
}

// Vérifier si ext-curl est disponible
echo "\n--- Infos PHP ---\n";
echo "ext-curl    : " . (extension_loaded('curl') ? "OUI" : "NON") . "\n";
echo "PHP version : " . phpversion() . "\n";

<?php

namespace App\Service;

/**
 * Analyse de toxicité des textes (publications/commentaires).
 * Peut être branché sur une API (ex. RapidAPI) via $rapidApiKey.
 */
class ToxicityAnalysisService
{
    public function __construct(
        private ?string $rapidApiKey = null
    ) {
    }

    /**
     * Indique si le texte est considéré comme toxique.
     * Sans clé API ou en cas d'erreur, retourne false (pas de blocage).
     */
    public function isToxic(string $text): bool
    {
        if ($this->rapidApiKey === null || $this->rapidApiKey === '') {
            return false;
        }

        // TODO: appeler l'API (ex. RapidAPI) et interpréter le résultat
        return false;
    }
}

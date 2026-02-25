<?php

namespace App\Enum;

enum OffreStatut: string
{
    case OUVERTE = 'OUVERTE';
    case FERMEE = 'FERMEE';
    case EXPIREE = 'EXPIREE';
}

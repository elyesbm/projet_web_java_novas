<?php

namespace App\Enum;

enum ModerationStatus: string
{
    case APPROVED = 'approved';
    case PENDING = 'pending';
    case REJECTED = 'rejected';
}


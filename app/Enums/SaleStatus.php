<?php

namespace App\Enums;

enum SaleStatus: string {
    case PENDING = 'PE';
    case APPROVED = 'AP';
    case CANCELLED = 'CA';
}
<?php

namespace App\Enums;

enum SaleStatus: string {
    case PENDING = 'A';
    case APPROVED = 'B';
    case CANCELLED = 'C';
}
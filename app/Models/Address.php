<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'state',
    ];

    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class);
    }

    public function sellers(): HasMany
    {
        return $this->hasMany(Seller::class);
    }
}

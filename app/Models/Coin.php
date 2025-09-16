<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;

    // Relazione: una coin ha molti prezzi
    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}

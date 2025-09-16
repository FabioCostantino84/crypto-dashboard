<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    use HasFactory;

    // Relazione: un prezzo appartiene a una coin
    public function Coins()
    {
        return $this->belongsTo(Coin::class);
    }
}

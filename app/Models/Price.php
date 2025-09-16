<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function Coins()
    {
        return $this->belongsTo(Coin::class);
    }
}

<?php

use Illuminate\Support\Facades\Route;
use App\Services\CoinGeckoService;

Route::get('/', function () {
    return view('welcome');
});

// Rotta per testare la chiamata http a coinGecko
Route::get('/debug/search/{text}', function (CoinGeckoService $svc, string $text) {
    return response()->json($svc->getCoinsList($text));
});

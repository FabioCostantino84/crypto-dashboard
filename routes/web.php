<?php

use Illuminate\Support\Facades\Route;
use App\Services\CoinGeckoService;
use App\Http\Controllers\CoinController;

Route::get('/', function () {
    return view('welcome');
});

// Rotta per testare la chiamata http a coinGecko
/**Route::get('/debug/search/{text}', function (CoinGeckoService $svc, string $text) {
    return response()->json($svc->getCoinsList($text));
});*/

Route::get('/debug/search/{symbol}', [CoinController::class, 'store']);

Route::post('/coins/search', [CoinController::class, 'store']);
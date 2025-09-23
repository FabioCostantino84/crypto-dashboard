<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CoinGeckoService
{

    /**
     * Cerco le criptovalute tramite l'API CoinGecko.
     *
     * @param string $searchText Testo cercato (nome o simbolo della coin, es. "bitcoin" o "btc").
     * @return array Risultati normalizzati con id, name e symbol.
     */
    public function getCoinsList(string $searchText): array
    {
        $apiKey = config('services.coingecko.key'); // leggerà COINGECKO_KEY dal .env

        $httpResponse = Http::withHeaders([
            'x-cg-demo-api-key' => $apiKey,
        ])->get('https://api.coingecko.com/api/v3/search', [
            'query' => $searchText,
        ]);

        if ($httpResponse->failed()) {
            return ['error' => 'Servizio CoinGecko non disponibile'];
        }

        $responseData = $httpResponse->json();

        // Normalizzo prendendo solo i campi che mi servono
        $normalizedCoins = [];
        foreach ($responseData['coins'] ?? [] as $coinData) {
            $normalizedCoins[] = [
                'id' => $coinData['id'] ?? null,
                'name' => $coinData['name'] ?? null,
                'symbol' => $coinData['symbol'] ?? null,
            ];
        }

        return ['items' => $normalizedCoins];
    }

    /**
     * Recupera i prezzi storici giornalieri di una coin tramite CoinGecko.
     *
     * @param string $coinId   ID della coin su CoinGecko (es. "bitcoin", "ethereum").
     * @param string $fromDate Data iniziale (formato YYYY-MM-DD).
     * @param string $toDate   Data finale (formato YYYY-MM-DD).
     * @param string $currency Valuta di confronto (default "eur", es. "usd", "jpy").
     * @return array Array di dati con le coppie [date, price].
     */
    public function getCoinPrices(string $coin_id, string $fromDate, string $toDate, string $currency = 'eur'): array
    {
        // qui devo fare la chimata http alla API di CoinGecko per recuperare i valori di una singola Coin
        return [];
    }
}

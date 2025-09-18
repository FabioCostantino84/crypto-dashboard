<?php

namespace App\Services;

class CoinGeckoService{

    /**
     * Cerco le criptovalute tramite l'API CoinGecko.
     *
     * @param string $query Testo da cercare (nome o simbolo della coin, es. "bitcoin" o "btc").
     * @return array Risultati normalizzati con id, name e symbol.
     */
    public function getCoinsList(string $query): array
    {
        // qui devo fare la chimata http alla API di CoinGecko
        return [];
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
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CoinGeckoService;

class CoinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, CoinGeckoService $coinGecko)
    {
        $searchText = trim(strtolower($request->input('query', $request->route('symbol'))));
       // $searchText = strtolower(trim($request->input('query'))); // riga da tenere dopo aver creato il form


        $results = $coinGecko->getCoinsList($searchText)['items'] ?? [];

        if (empty($results)) {
            return response()->json(['error ' => 'Coin non trovata'], 404);
        }

        $selectedCoin = null;

        foreach ($results as $coinData) {
            if (strtolower($coinData['symbol']) === $searchText) {
                $selectedCoin = $coinData;
                break;
            }
        }

        if (!$selectedCoin) {
            return response()->json(['error' => 'Nessuna coin trovata'], 404);
        }

        return response()->json(['selected' => $selectedCoin]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AprioriResult;
use App\Models\Santri;

class AprioriController extends Controller
{
    public function index()
    {
        $results = AprioriResult::all();
        return view('apriori.index', compact('results'));
    }

    public function process(Request $request)
    {
        // Fetch all santris
        $santris = Santri::all();

        // Minimum support and confidence
        $minSupport = 0.3; // Example support threshold
        $minConfidence = 0.5; // Example confidence threshold

        // Generate itemsets
        $itemsets = $this->generateItemsets($santris);

        // Calculate support
        $frequentItemsets = $this->calculateSupport($itemsets, $minSupport);

        // Calculate confidence
        $confidences = $this->calculateConfidence($frequentItemsets, $itemsets, $minConfidence);

        // Save results to the database
        AprioriResult::truncate();
        foreach ($frequentItemsets as $itemset => $support) {
            AprioriResult::create([
                'itemset' => $itemset,
                'support' => round($support, 2),
                'confidence' => isset($confidences[$itemset]) ? round($confidences[$itemset], 2) : null,
            ]);
        }

        return redirect()->route('apriori.index')->with('success', 'Apriori process completed successfully.');
    }

    private function generateItemsets($santris)
    {
        // Generate itemsets from normalized data
        $itemsets = [];
        foreach ($santris as $santri) {
            $itemsets[] = [
                'tes_tulis' => $santri->normalized_tes_tulis,
                'surah_pilihan' => $santri->normalized_surah_pilihan,
                'menulis_pegon' => $santri->normalized_menulis_pegon
            ];
        }
        return $itemsets;
    }

    private function calculateSupport($itemsets, $minSupport)
    {
        $totalTransactions = count($itemsets);
        $supportCounts = [];

        foreach ($itemsets as $itemset) {
            foreach ($itemset as $key => $value) {
                if (!isset($supportCounts[$key])) {
                    $supportCounts[$key] = 0;
                }
                if ($value > 0) {
                    $supportCounts[$key]++;
                }
            }
        }

        $frequentItemsets = [];
        foreach ($supportCounts as $itemset => $count) {
            $support = $count / $totalTransactions;
            if ($support >= $minSupport) {
                $frequentItemsets[$itemset] = $support;
            }
        }

        return $frequentItemsets;
    }

    private function calculateConfidence($frequentItemsets, $itemsets, $minConfidence)
    {
        $confidences = [];
        $totalTransactions = count($itemsets);

        foreach ($frequentItemsets as $itemset => $support) {
            $countItemsetInTransactions = 0;

            foreach ($itemsets as $transaction) {
                if ($transaction[$itemset] > 0) {
                    $countItemsetInTransactions++;
                }
            }

            $confidence = $countItemsetInTransactions / $totalTransactions;
            if ($confidence >= $minConfidence) {
                $confidences[$itemset] = $confidence;
            }
        }

        return $confidences;
    }
}

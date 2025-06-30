<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SummaryController extends Controller
{
    public function index()
    {
        $numericalStats = DB::table('patents')
            ->selectRaw('
                AVG(EXTRACT(YEAR FROM publication_date)) as mean_year,
                STDDEV(EXTRACT(YEAR FROM publication_date)) as std_dev_year,
                MIN(EXTRACT(YEAR FROM publication_date)) as min_year,
                MAX(EXTRACT(YEAR FROM publication_date)) as max_year
            ')
            ->first();

        $categoryStats = DB::table('patents')
            ->select('technology_area', DB::raw('COUNT(*) as count'))
            ->groupBy('technology_area')
            ->orderByDesc('count')
            ->get();

        return response()->json([
            'numerical_summary' => $numericalStats,
            'categorical_summary' => $categoryStats
        ]);
    }
}

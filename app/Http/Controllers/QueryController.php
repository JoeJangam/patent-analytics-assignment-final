<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    public function filter(Request $request)
    {
        $query = DB::table('patents');

        if ($request->has('patent_year')) {
            $query->whereYear('publication_date', $request->patent_year);
        }

        if ($request->has('assignee')) {
            $query->where('assignee', 'ILIKE', '%' . $request->assignee . '%');
        }

        return response()->json([
            'results' => $query->limit(100)->get()
        ]);
    }
}

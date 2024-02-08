<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function chart()
    {
        // Replace this with your actual data retrieval logic
        $data = [
            'data' => [1, 2, 5, 9, 1],
            'labels' => ["10:05", "10:10", "10:15", "10:20"],
        ];

        $tab = 'history';
        return view('line-chart', compact('data','tab'));
    }

}

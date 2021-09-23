<?php

namespace App\Http\Controllers;

use Analytics;
use Spatie\Analytics\Period;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // GET "frontpage" of this controller.
    public function index()
    {
        return view('dashboard.index');
    }
    public function googleAnalytics()
    {
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        $myArray = [
            'First' => '1st',
            'Second' => '2nd',
            'Third' => '3rd'
        ];
        $simpleArray = [1, 2, 3, 4];
        return view('testing')
            ->with('analyticsData', $analyticsData)
            ->with('myArray', $myArray)
            ->with('simpleArray', $simpleArray);
    }
}

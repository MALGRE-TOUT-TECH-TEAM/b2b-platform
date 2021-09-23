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
        $nestedArray = [
            'dates' => ['1st of January', '2nd of January', '3rd of January', '4th of January', '5th of January', '6th of January', '7th of January'],
            'visitors' => [2523, 5000, 3655, 3214, 2443, 3461, 1577],
            'page' => ['/dashboard', '/login', '/almightyAbovesHouse', '/over9000', '/suspiciousMammal', '/analytics', '/krom']
        ];
        return view('testing')
            ->with('analyticsData', $analyticsData)
            ->with('myArray', $myArray)
            ->with('simpleArray', $simpleArray)
            ->with('nestedArray', $nestedArray);
    }
}

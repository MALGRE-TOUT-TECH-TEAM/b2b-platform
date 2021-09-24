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
        $simpleArray = [1, 2, 3, 4];
        $associativeArray = [
            'First' => '1st',
            'Second' => '2nd',
            'Third' => '3rd'
        ];
        $multidimensionalArray = [
            'dates' => ['1st of January', '2nd of January', '3rd of January', '4th of January', '5th of January', '6th of January', '7th of January'],
            'visitors' => [2523, 5000, 3655, 3214, 2443, 3461, 1577],
            'page' => ['/dashboard', '/login', '/almightyAbovesHouse', '/over9000', '/suspiciousMammal', '/analytics', '/krom']
        ];
        $analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
        return view('testing')
            ->with('simpleArray', $simpleArray)
            ->with('assArray', $associativeArray)
            ->with('multidimensionalArray', $multidimensionalArray)
            ->with('analyticsData', $analyticsData);

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
}

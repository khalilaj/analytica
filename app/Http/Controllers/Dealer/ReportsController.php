<?php

namespace App\Http\Controllers\Dealer;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Charts\CarModelChart;

class ReportsController extends Controller
{
    public function index()
    {  
        return view('dealer.reports');
    }
}

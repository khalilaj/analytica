<?php

namespace App\Http\Controllers;


use App\Contact;
use App\CarModel; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Charts\CarModelChart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  

        return view('welcome');
    }
}

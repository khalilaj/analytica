<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Contact;
use App\CarModel;
use App\Item;
use App\Reservation;
use App\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Charts\CarModelChart;

class DashboardController extends Controller
{
    public function index()
    {
        $categoryCount = Category::count();
        $itemCount = Item::count();
        $sliderCount = Slider::count();
        $reservations = Reservation::where('status',false)->get();
        $contactCount = Contact::count();
        $car_models = CarModel::all();

        $chart = new CarModelChart;
        $chart->labels(['Mon', 'Tue', 'Wed']);
        $chart->dataset('Profile Visits', 'bar', [1,4,2])->options([
            'color' => '#ff0000',
        ]);
        $chart->dataset('Phone Clicks', 'bar', [9,4,7] );
        $chart->dataset('WhatsApp Clicks', 'bar', [8,3,7] );

        $line_chart = new CarModelChart;
        $line_chart->labels(['Mon', 'Tue', 'Wed']);
        $line_chart->dataset('Profile Visits', 'line', [1,4,2]);
        $line_chart->dataset('Phone Clicks', 'line', [9,4,7] );
        $line_chart->dataset('WhatsApp Clicks', 'line', [8,3,7] );

        $radar_chart = new CarModelChart;
        $radar_chart->labels(['Mon', 'Tue', 'Wed']);
        $radar_chart->dataset('Profile Visits', 'radar', [1,4,2]);
        $radar_chart->dataset('Phone Clicks', 'radar', [9,4,7] );
        $radar_chart->dataset('WhatsApp Clicks', 'radar', [8,3,7] );

        $pie_chart = new CarModelChart;
        $pie_chart->labels(['Mon', 'Tue', 'Wed']);
        $pie_chart->dataset('Profile Visits', 'polarArea', [1,4,2]);
        $pie_chart->dataset('Phone Clicks', 'polarArea', [9,4,7] );
        $pie_chart->dataset('WhatsApp Clicks', 'polarArea', [8,3,7] );



        return view('admin.dashboard',compact('categoryCount','itemCount','sliderCount','reservations','contactCount', 'chart', 'line_chart', 'radar_chart', 'pie_chart'));
    }
}

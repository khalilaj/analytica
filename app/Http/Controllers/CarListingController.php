<?php

namespace App\Http\Controllers;

use App\CarListing;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car_listings = CarListing::all();
        return view('dealer.car_listing.index',compact('car_listings'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('dealer.car_listing.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'car_manufacturer' => 'required',
            'car_model' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/car_listing'))
            {
                mkdir('uploads/car_listing',0777,true);
            }
            $image->move('uploads/car_listing',$imagename);
        }else{
            $imagename = "default.png";
        }
        $car_listing = new CarListing(); 
        $car_listing->name = $request->name;
        $car_listing->description = $request->description;
        $car_listing->car_manufacturer = $request->car_manufacturer;
        $car_listing->car_model = $request->car_model;
        $car_listing->price = $request->price;
        $car_listing->image = $imagename;
        $car_listing->save();
        return redirect()->route('car_listing.index')->with('successMsg','Car Listing Successfully Saved');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $car_listing = CarListing::find($id); 
        return view('car_listing.edit',compact('car_listing'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'car_manufacturer' => 'required',
            'car_model' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $car_listing = CarListing::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/car_listing'))
            {
                mkdir('uploads/car_listing',0777,true);
            }
            unlink('uploads/car_listing/'.$car_listing->image);
            $image->move('uploads/car_listing',$imagename);
        }else{
            $imagename = $car_listing->image;
        }
        $car_listing = new CarListing(); 
        $car_listing->name = $request->name;
        $car_listing->description = $request->description;
        $car_listing->car_manufacturer = $request->car_manufacturer;
        $car_listing->car_model = $request->car_model;
        $car_listing->price = $request->price;
        $car_listing->image = $imagename;
        $car_listing->save();
        return redirect()->route('car_listing.index')->with('successMsg','Car Listing Successfully Updated');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car_listing = CarListing::find($id);
        if (file_exists('uploads/car_listing/'.$car_listing->image))
        {
            unlink('uploads/car_listing/'.$car_listing->image);
        }
        $car_listing->delete();
        return redirect()->back()->with('successMsg','Car Listng successfully Deleted');
    }
}
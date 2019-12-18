<?php

namespace App\Http\Controllers\Admin;

use App\CarBodyType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarBodyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car_body_types = CarBodyType::all();
        return view('admin.car_body_type.index',compact('car_body_types'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.car_body_type.create');
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
            'image' => 'required|mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/car_body_type'))
            {
                mkdir('uploads/car_body_type',0777,true);
            }
            $image->move('uploads/car_body_type',$imagename);
        }else{
            $imagename = "default.png";
        }
        $car_body_type = new CarBodyType(); 
        $car_body_type->name = $request->name;  
        $car_body_type->image = $imagename;
        $car_body_type->save();
        return redirect()->route('car_body_type.index')->with('successMsg','Car Body Type Successfully Saved');
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
        $car_body_type = CarBodyType::find($id); 
        return view('admin.car_body_type.edit',compact('car_body_type'));
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
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $car_body_type = CarBodyType::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/car_body_type'))
            {
                mkdir('uploads/car_body_type',0777,true);
            }
            unlink('uploads/car_body_type/'.$car_body_type->image);
            $image->move('uploads/car_body_type',$imagename);
        }else{
            $imagename = $car_body_type->image;
        }
 
        $car_body_type->name = $request->name; 
        $car_body_type->image = $imagename;
        $car_body_type->save();
        return redirect()->route('car_body_type.index')->with('successMsg','Car Body Type Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car_body_type = CarBodyType::find($id);
        if (file_exists('uploads/car_body_type/'.$car_body_type->image))
        {
            unlink('uploads/car_body_type/'.$car_body_type->image);
        }
        $car_body_type->delete();
        return redirect()->back()->with('successMsg','Car BodyType successfully Deleted');
    }
}

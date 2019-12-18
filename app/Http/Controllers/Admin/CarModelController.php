<?php

namespace App\Http\Controllers\Admin;

use App\CarModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $car_models = CarModel::all();
        return view('admin.car_model.index',compact('car_models'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.car_model.create');
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
        ]);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/car_model'))
            {
                mkdir('uploads/car_model',0777,true);
            }
            $image->move('uploads/car_model',$imagename);
        }else{
            $imagename = "default.png";
        }
        $car_model = new CarModel(); 
        $car_model->name = $request->name;  
        $car_model->image = $imagename;
        $car_model->save();
        return redirect()->route('car_model.index')->with('successMsg','Car Model Successfully Saved');
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
        $car_model = CarModel::find($id); 
        return view('admin.car_model.edit',compact('car_model'));
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
        ]);
        $car_model = CarModel::find($id);
        $image = $request->file('image');
        $slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug.'-'.$currentDate.'-'. uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('uploads/car_model'))
            {
                mkdir('uploads/car_model',0777,true);
            }
            unlink('uploads/car_model/'.$car_model->image);
            $image->move('uploads/car_model',$imagename);
        }else{
            $imagename = $car_model->image;
        }
 
        $car_model->name = $request->name; 
        $car_model->image = $imagename;
        $car_model->save();
        return redirect()->route('car_model.index')->with('successMsg','Car Model Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $car_model = CarModel::find($id);
        if (file_exists('uploads/car_model/'.$car_model->image))
        {
            unlink('uploads/car_model/'.$car_model->image);
        }
        $car_model->delete();
        return redirect()->back()->with('successMsg','Car Model successfully Deleted');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Car::all();
        return view("admin.car",[
            'datalist'=>$datalist
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_list=Category::with('children')->get();
        return view("admin.car_add",[
            "category_list"=>$category_list
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Car;
        $data->category_id = $request->category_id;
        $data->user_id = Auth::id();
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->yil=$request->yil;
        $data->renk=$request->renk;
        $data->motor_hacmi=$request->motor_hacmi;
        $data->model=$request->model;
        $data->detail=$request->detail;
        $data->status=$request->status;
        $data->slug=$request->slug;
        $data->image=Storage::putFile("images",$request->file("image"));
        $data->save();
        return redirect()->route("admin_car");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car, $id)
    {
        $category_list=Category::with('children')->get();
        $data=Car::find($id);
        return view("admin.car_update",[
            'data'=>$data,
            'category_list'=>$category_list
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Car $car)
    {
        $data=Car::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = Auth::id();
        $data->title=$request->title;
        $data->keywords=$request->keywords;
        $data->description=$request->description;
        $data->price=$request->price;
        $data->quantity=$request->quantity;
        $data->yil=$request->yil;
        $data->renk=$request->renk;
        $data->motor_hacmi=$request->motor_hacmi;
        $data->model=$request->model;
        $data->detail=$request->detail;
        $data->status=$request->status;
        $data->slug=$request->slug;
        if($request->image){
            $data->image=Storage::putFile("images",$request->file("image"));
        }
        $data->save();
        return redirect()->route("admin_car")->with("succes","Category is created");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car, $id)
    {
        Car::destroy($id);
        return redirect()->route("admin_car");
    }
}

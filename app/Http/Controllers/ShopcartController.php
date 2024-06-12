<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Shopcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShopcartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Shopcart::where("user_id",Auth::id())->get();
        return view("home.user_shopcart",[
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request,$id)
    {
        if($request->time>45){
            return back()->with("success","45 günden fazla ödünç alamazsınız.");
        }
        else if(DB::table("shopcarts")->where("user_id",'=',Auth::id())->count()>6){
            return back()->with("warning","Ödünç ala bileceğiniz en fazla Araba sayısı 7-dir.");
        }
        else
        {
            $shopcart=Shopcart::where('user_id',Auth::id())->where('product_id',$id)->get();
            if(count($shopcart)!=0){
                $data=$shopcart->first();
                $data->save();
                return back()->with("error","Araba zaten sepetde  mevcut.");
            }
            else{
                $data= new Shopcart();
                $data->user_id=Auth::id();
                $data->product_id=$id;
                $data->time=$request->time;
                $data->save();
                return back()->with("success","Araba sepete başarıyla Eklendi");
            }

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function show(Shopcart $shopcart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function edit(Shopcart $shopcart,$id)
    {
        if(DB::table("shopcarts")->where("user_id",'=',Auth::id())->count()>6){
            return back()->with("warning","Ödünç ala bileceğiniz en fazla Araba sayısı 7-dir.");
        }
        else
        {
            $shopcart=Shopcart::where('user_id',Auth::id())->where('product_id',$id)->get();
            if(count($shopcart)!=0){
                $data=$shopcart->first();
                $data->save();
                return back()->with("error","Araba zaten sepetde  mevcut.");
            }
            else{
                $data= new Shopcart();
                $data->user_id=Auth::id();
                $data->product_id=$id;
                $data->time=10;
                $data->save();
                return back()->with("success","Araba sepete başarıyla Eklendi");
            }

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shopcart $shopcart,$id)
    {
        if($request->time>90){
            return back()->with("success","45 günden fazla ödünç alamazsınız.");
        }
        else{
            $data=Shopcart::find($id);
            $data->time=$request->time;
            $data->save();
            return back()->with("success","Sepet Başarıyla Güncellendi");
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shopcart $shopcart,$id)
    {
        Shopcart::destroy($id);
        return back()->with("success","Araba Sepetden Başarıyla Sillindi");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderitem;
use App\Models\Shopcart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Order::where('user_id',Auth::id())->get();
        return view("home.user_order",
            [
                'datalist'=>$datalist
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view("home.user_checkout",[

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
        $data= new Order();
        $data->user_id = Auth::id();
        $data->name=$request->name;
        $data->phone=$request->phone;
        $data->email=$request->email;
        $data->adress=$request->adress;
        $data->IP=$_SERVER["REMOTE_ADDR"];
        $data->save();
        $orderitem=Shopcart::where("user_id",Auth::id())->get();
        foreach ($orderitem as $rs){
            $item=new Orderitem();
            $item->user_id = Auth::id();
            $item->product_id = $rs->product->id;
            $item->order_id = $data->id;
            $item->time=$rs->time;
            $item->save();
            Shopcart::destroy($rs->id);

        }
        return redirect()->route('user_order')->with("success","Order is Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order,$id)
    {
        $data=Orderitem::where('order_id',$id)->get();
        return view("home.user_order_items",[
            'datalist'=>$data,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order,$id)
    {
        $data=Order::find($id);
        $data->status="İptal";
        $data->save();
        return back()->with("success","Iptal Isleminiz Gerceklestirildi");
    }
}

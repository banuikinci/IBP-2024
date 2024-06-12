<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist=Order::all();
        return view("admin.order",[
            'datalist'=>$datalist,
            'table_name'=>'All'
        ]);
    }
    public function cancelled()
        {
            $datalist=Order::where('status','Cancelled')->get();
            return view("admin.order",[
                'datalist'=>$datalist,
                'table_name'=>'Cancelled'
            ]);
        }
    public function new()
        {
            $datalist=Order::where('status','New')->get();
            return view("admin.order",[
                'datalist'=>$datalist,
                'table_name'=>'New'
            ]);
        }
    public function accepted()
        {
            $datalist=Order::where('status','Accepted')->get();
            return view("admin.order",[
                'datalist'=>$datalist,
                'table_name'=>'Accepted'
            ]);
        }
    public function finished()
        {
            $datalist=Order::where('status','Finished')->get();
            return view("admin.order",[
                'datalist'=>$datalist,
                'table_name'=>'Finished'
            ]);
        }
    public function delayed()
        {
            $datalist=Order::where('status','Delayed')->get();
            return view("admin.order",[
                'datalist'=>$datalist,
                'table_name'=>'Delayed'
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order,$id)
    {
        $data=Order::find($id);
        return view('admin.order_item',[
            'data'=>$data
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
    public function update(Request $request, Order $order,$id)
    {
        $data=Order::find($id);
        $data->note=$request->note;
        $data->status=$request->status;
        $data->save();
        return back()->with("success","Order is Updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order,$id)
    {
        Order::destroy($id);
        return back()->with("success","Order Deleted Successfully");
    }
}

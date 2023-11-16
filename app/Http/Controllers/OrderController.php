<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Order::all();
        // return response()->json($data);
        return view('backend.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order, $id)
    {
        // dd('done');
        $data = Order::where('id',$id)->first();
        return response()->json($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order ,$id)
    {
        $data = Order::find($id);
        if(!$data){
            return response()->json(['messgae'=> 'Order Not Found']);
        }else{
            $data->delete();
            return response()->json(["message"=>"Order Deleted Successfully"], 200);
        }

    }

    // public function fetch(Order $order){
    //     $data = Order::where('id',$id)->first();
    //     return response()->json($data);
    // }
}

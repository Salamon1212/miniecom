<?php

namespace App\Http\Controllers\API;

use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //
    public function index()
    {
        $data = Order::all();
        // return response()->json($data);
        return view('backend.index',compact('data'));
    }

    public function create()
    {
        //

    }

    public function store(Request $request)
    {
        //
    }


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
}

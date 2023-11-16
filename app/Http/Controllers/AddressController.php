<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create( $id)
    {
        $pid = $id;
        if(Auth::user()==null){
            return view('buy.address',compact('pid'));
        }else{
            $id = Auth::user()->id;
            $detail = Address::where('user_id',$id)->first();
            if($detail!=null){
                return view('buy.payment',compact('pid'));
                }else{
                    return view('buy.address',compact('pid'));
                }
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(Auth::user()){
            $user = User::where('email',$request->get('email'))->get('id');
            $user_id = $user[0]->id;
            $data = Address::create([
                'user_id' => $user_id,
                'address' => $request->get('address'),
                'phone_number' => $request->get('phone_number'),
                'city' => $request->get('city'),
                'state' => $request->get('state'),
                'pincode' => $request->get('pincode'),
            ]);
            return redirect('list/detail/user/payment');
        }else{
            $data = Address::create([
                'user_id' => null,
                'address' => $request->get('address'),
                'phone_number' => $request->get('phone_number'),
                'city' => $request->get('city'),
                'state' => $request->get('state'),
                'pincode' => $request->get('pincode'),
            ]);
            return redirect('list/detail/user/payment');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Address $address)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Address $address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Address $address)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Address $address)
    {
        //
    }
}

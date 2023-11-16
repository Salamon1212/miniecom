<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    //
    // public function register(){
    //     return view('auth.register');
    // }

    // public function registerprocess(Request $request){
    //     $request->validate([
    //         'name' => 'required|string|max:255|min:2',
    //         'email' => 'required|string|email|unique:users',
    //         'password' =>'required|string|min:8'
    //     ]);

    //     $user = User::create([
    //         'name' => $request->get('name'),
    //         'email' => $request->get('email'),
    //         'password' => Hash::make($request->get('password')),
    //     ]);
    //     if($user)
    //     return redirect('list/product');

    //     dd("error");

    // }


    public function logout(){
        $user = Auth::user();
        Auth::logout($user);
        return redirect('/register');
    }

    // public function authentication(Request $request){
    //     $request->validate([
    //         'name' => 'required|string|max:255|min:2',
    //         'email' => 'required|string|email',
    //         'password' =>'required'
    //     ]);
    //     $email = $request->get('email');
    //     $password = $request->get('password');
    //     $user = User::where('email',$email)->first();
    //     if($user){
    //         return redirect('user/dashboard');
    //     }else{
    //         dd("invalid credentials");
    //     }
    // }

    // public function index(){
    //     return view('layout.dashboard');
    // }

    public function search(Request $request){
        $data = $request->get('search');
        $result = Product::where('product_name',$data)->get();
        if($result){
            return view('search.show' , compact('result'));
        }
    }

}


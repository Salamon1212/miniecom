<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use App\Models\SubCategory;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Mail\OrderMail;


class ProductController extends Controller
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
    public function create()
    {
        //
        return view('product.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'cat_id' => 'required',
            'sub_id' => 'required',
            'item_name' => 'required',
            'item_img' => 'required'
        ]);

        $file = $request->file('item_img');
        $fileName = $file->getClientOriginalName();
        $product = Product::create([
            'category_id' => $request->get('cat_id'),
            'subcategory_id' => $request->get('sub_id'),
            'product_name' => $request->get('item_name'),
            'product_img' => $fileName,
            'details' => $request->get('details'),
            'price' => $request->get('price'),
            'quantity' => $request->get('quantity')
        ]);
        $filepath = $file->storeAs('uploads',$fileName, 'public');
        if($product){
            return redirect('add/product')->with('success','successfully added the product');
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product ,$id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, $id)
    {
        $buyData = Product::where('id',$id)->first();
        return view('product.buy',compact('buyData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    public function detail(Product $product ,$id)
    {
        $pdetail = Product::where('id',$id)->get();
        return view('buy.detail',compact('pdetail'));
    }

    public function payment(){
        return view('buy.payment');
    }

    public function transaction(Request $request){
        $order_id = $request->get('order_id');
        $order_data = Product::where('id',$order_id)->first();
        if(Auth::user()){
            Order::create([
                'product_id'=> $order_data->id,
                'product_name'=> $order_data->product_name,
                'price'=> $order_data->price
            ]);
            $email = Auth::user()->email;
            Mail::to($email)->send(new OrderMail());
            return redirect('list/product')->with('success','Ordered Successfully!');
        }else{
            Order::create([
                'product_id'=> $order_data->id,
                'product_name'=> $order_data->product_name,
                'price'=> $order_data->price]);
            return redirect('list/product')->with('success','Ordered Successfully!');
        }
    }

}

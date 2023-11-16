@extends('layout.index')
@section('content')
<div class="product-container">
    <div class="product-title">
        <h1>Add Product</h1>
    </div>
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div align="center" style="margin: 10px">
            {{-- <label for="category">Category</label> --}}
            <select name="cat_id" id="cat_id" class="form-control" style="width: 50%">
                <option value="">Choose the Category</option>
                <option value="1">Electronic</option>
                <option value="2">Clothing, Shoes, and jewellery</option>
                <option value="3">Home and Kitchen</option>
                <option value="4">Toys and games</option>
                <option value="5">Automative</option>
            </select>
        </div>

        <div align="center" style="margin: 10px">
            {{-- <label for="subcategory">Sub Category</label> --}}
            <select name="sub_id" id="sub_id" class="form-control" style="width: 50%">
                <option value="">Choose the SubCategory</option>
                <option value="1">Mobile</option>
                <option value="1">Labtop</option>
                <option value="2">Clothes</option>
                <option value="2">Shoes</option>
                <option value="3">Home appliences</option>
                <option value="3">Grocery</option>
                <option value="4">Games</option>
                <option value="4">Toys</option>
                <option value="5">Tyre</option>
                <option value="5">Car parts</option>
            </select>
        </div>

        <div align="center" style="margin: 10px;">
            {{-- <label for="item">Product_Name</label> --}}
            <input type="text" name="item_name" placeholder="Enter the Product Name" class="form-control" style="width: 50%">
        </div>
        <div align="center" style="margin: 10px;">
            <label for="item_img">Product Image</label>
            <input type="file" name="item_img" id="item_img" class="form-control" style="width: 50%;">
        </div>
        <div align="center" style="margin: 10px;">
            {{-- <label for="details">Details</label> --}}
            <input type="text" name="details" id="detail" class="form-control" style="width: 50%;" placeholder="Enter Product Details">
        </div>
        <div align="center" style="margin: 10px;">
            {{-- <label for="price">Price</label> --}}
            <input type="text" name="price" required class="form-control" style="width: 50%;" placeholder="Enter the Price">
        </div>
        <div align="center" style="margin: 10px;">
            {{-- <label for="quantity">Quantity</label> --}}
            <input type="text" name="quantity" class="form-control" style="width: 50%;" placeholder="Enter the Quantity">
        </div>
        <div align="center" style="margin: 10px;" >
            <button type="submit" class="btn btn-info" style="width:300px; border:1px solid white; border-radius:20px">Add Product</button>
        </div>
    </form>
</div>
@endsection

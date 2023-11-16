@extends('layout.index')
@section('content')
<div class="subcategory-container">
    <div class="subcategory-title">
        <h1>Add SubCategory</h1>
    </div>
    <form action="{{route('subcategory.store')}}" method="post">
        @csrf
        @method('POST')
        <div align="center" style="margin: 10px">
            {{-- <label for="subcategory_id" style="font-size:1rem; font-weight:400 ">SubCategory_id</label> --}}
            <select name="subcategory_id" id="subcategory_id" class="form-control" style="width: 50%">
                <option value=>Choose the Category</option>
                <option value="1">Electronic</option>
                <option value="2">Clothing, Shoes, and jewellery</option>
                <option value="3">Home and Kitchen</option>
                <option value="4">Toys and games</option>
                <option value="5">Automative</option>
            </select>
        </div>
        <div align="center" style="margin: 10px">
            {{-- <label for="subcategory">SubCategory_Name</label> --}}
            <input name="subcategory_name" id="subcategory_name" class="form-control" style="width: 50%" placeholder="Enter Subcategory">
                {{-- <option value="Mobile">Mobile</option>
                <option value="Labtop">Labtop</option>
                <option value="Clothes">Clothes</option>
                <option value="Shoes">Shoes</option>
                <option value="Home appliences">Home appliences</option>
                <option value="Grocery">Grocery</option>
                <option value="Games">Games</option>
                <option value="Toys">Toys</option>
                <option value="Tyre">Tyre</option>
                <option value="Car parts">Car parts</option>
            </select> --}}
        </div>

        <div align="center" style="margin: 10px">
            <label for="subcategory_img" style="font-size:1rem; font-weight:400 ">Image</label>
            <input type="file" name="subcategory_img" class="form-control" style="width: 50%">
        </div>
        <div style="margin: 10px">
            <button type="submit" class="btn btn-info" style="width:300px; border:1px solid white; border-radius:20px">Add SubCategory</button>
        </div>
    </form>
</div>
@endsection

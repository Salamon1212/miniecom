@extends('layout.index')
@section('content')
<div class="category-container" style="background-color: white">
    <div class="category-title">
        <h1>Add Category</h1>
    </div>
    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('POST')
        <div align="center">
            {{-- <label for="category">Category_Name</label> --}}
            <input name="category_name" id="category_name" class="form-control" style="width: 50%" placeholder="Enter category">
                {{--  <option value="Electronic">Electronic</option>
                <option value="Clothing, Shoes, and jewellery">Clothing, Shoes, and jewellery</option>
                <option value="Home and Kitchen">Home and Kitchen</option>
                <option value="Toys and games">Toys and games</option>
                <option value="Automative">Automative</option>
            </select> --}}
        </div>

        <div align="center">
            <label for="category_img" style="font-size:1rem; font-weight:400 ">Image</label>
            <input type="file" name="category_img" class="form-control" style="width: 50%">
        </div>
        <div>
            <button type="submit" class="btn btn-info" style="width:300px; border:1px solid white; border-radius:20px">Add Category</button>
        </div>
    </form>
</div>
@endsection

@extends('layout.index')
@section('content')
<div class="category-content">
    Category
    <div class="category-section">
        @foreach ($cat_data as $row)
        <li style="list-style: none">
            <a href=""><img src="{{ asset('/images/'.$row->category_img) }}" alt=""></a>
        </li>
        @endforeach
    </div>
</div>
<div class="subcategory-content">
    SubCategory
    <div class="subcategory-section">
        @foreach ($subcat_data as $rows)
        <li style="list-style: none">
            <a href=""><img src="{{ asset('/images/'.$rows->subcategory_img) }}" alt=""></a>
        </li>
        @endforeach
    </div>
</div>
<div class="product">
    Products
    <div class="product-section">
        @foreach ($product_data as $r)
        <li style="list-style: none">
            <a href="{{ route('product.detail',['id'=>$r->id]) }}"><img src="{{ asset('storage/uploads/'.$r->product_img) }}" alt=""></a>
        </li>
        @endforeach
    </div>
</div>
@endsection

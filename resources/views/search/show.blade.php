@extends('layout.index')
@section('content')
    <div class="result-section" style="margin: 30px">
        <li>Products</li>
        @foreach ($result as $row)
            <li style="list-style: none">
                <a href="{{ asset('storage/uploads/'.$row->product_img) }}"><img src="{{ asset('storage/uploads/'.$row->product_img) }}" alt=""></a>
            </li>
            <li>Brand:{{ $row->product_name }}</li>
            <li>price RS.10000 {{$row->product_price}}</li>
            <li>product details</li>
            <a href="{{route('product.list')}}" class="btn btn-info" style="background-color: yellow; border-radius:20px; width:300px; border:1px solid white;">addcart</a> <a href="{{ route('product.detail',['id'=>$row->id]) }}" class="btn btn-info" style="background-color: orange; border-radius:20px; width:300px; border:1px solid white;">buy now</a>
            <hr>
        @endforeach
    </div>
@endsection

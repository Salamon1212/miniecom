@extends('layout.index')
@section('content')
<div class="detail-container">
    @foreach ($pdetail as $data)
    <div class="img-detail" align="center">
        <img src="{{asset('/storage/uploads/'.$data->product_img)}}" alt="">
    </div>
    <div class="brand-detail">
        <li>
            Brand:{{$data->product_name}}
        </li>
    </div>
    <hr>
    <div class="price-detail">
        <li>
            Total: ${{$data->price}}
        </li>
    </div>
    <hr>
    <div class="base-detail">
        <li>
            Details About Product: {{$data->details}}
        </li>
    </div>
    <hr>
    <div class="quantity-detail">
        @if ($data->quantity>0)
            <li>In stock</li>
            <span style="display: flex; align-items:center">
                Qnty<select name="quantity" id="" class="form-control" style="width: 80px">
                        @for($i=1; $i<=$data->quantity; $i++)
                        <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
            </span>
        @else
            <hr>
            <li><span style="color: green; font-size:1.3rem;">Currently unavailable</span></li>
            <p>We don't know when or if this items will be back in stock</p>
        @endif
    </div>
    <div class="de-btn">
        <div class="cart-btn">
            <a href="" class="btn btn-info">Add to Cart</a>
        </div>
        <div class="shop-btn">
            <a href="{{route('product.user',['id'=>$data->id])}}" class="btn btn-info">Buy Now </a>
        </div>
    </div>
    <hr>
    <div class="delivery-detail">
        <div>
            <li>
                <span><i class="bi bi-truck"></i></span>
                7 days Service
                Centre Replacement
            </li>
        </div>
        <div>
            <li>
                <span><i class="bi bi-truck"></i></span>
                Free Delivery
            </li>
        </div>
        <div>
            <li>
                <span><i class="bi bi-shield-check"></i></span>
                1 Year Warranty
            </li>
        </div>
        <div>
            <li>
                <span><i class="bi bi-cash-coin"></i></span>
                Pay on Delivery
            </li>
        </div>
        <div>
            <li>
                <span><i class="bi bi-align-top"></i></span>
                Top Brand
            </li>
        </div>
        <div>
            <li>
                <span><i class="bi bi-truck"></i></span>
                Amazon Devlivered
            </li>
        </div>
        <hr>
    </div>
    <hr>

@endforeach
</div>
@endsection

@extends('layout.index')
@section('content')
<div class="payment-container">
    <span>
        Select payment method
    </span>
    <div class="payment-ways">
        <form action="{{route('product.transaction')}}" method="POST">
            @csrf
            @method('POST')
            <input type="text" value="{{$pid}}" name="order_id" style="display:none" class="form-control">
            <li>
                <input type="radio" value="1" name="upi" class="form-check-input"> <label for="" class="form-check-label">UPI</label>
            </li>
            <li>
                <input type="radio" value="2" name="credit" class="form-check-input"> <label for="" class="form-check-label">Credit or debit card</label>
            </li>
            <li>
                <input type="radio" value="3" name="emi" class="form-check-input"> <label for="" class="form-check-label">EMI</label>
            </li>
            <li>
                <input type="radio" value="4" name="cashondelivery" class="form-check-input"> <label for="" class="form-check-label">Cash on Delivery</label>
            </li>
            <div class="pay-btn">
            <button type="submit" class="btn btn-info">Continue</button>
            <a href="{{ route('product.list')}}" class="btn btn-info" style="text-decoration: none">back</a>
            </div>
        </form>
    </div>
</div>
@endsection

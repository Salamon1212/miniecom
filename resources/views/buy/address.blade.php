@extends('layout.index')
@section('content')
    <div class="address-container">
        <div class="address-section">
            <li>SeLect a delivery addess</li>

            <div class="address-content">
                <form action="{{ route('product.user')}}" method="POST" id="address-form">
                    @csrf
                    @method('POST')
                    <label for="">Name</label>
                    <input type="text" name="name" class="form-control" style="width: 500px">
                    {{-- <label for="">Email</label>
                    <input type="text" name="email" class="form-control" style="width: 500px"> --}}
                    <label for="">Address</label>
                    <textarea name="address" id="address" cols="50" rows="10" class="form-control" style="width: 500px"></textarea>
                    <label for="">Phone Number:</label>
                    <input type="text" name="phone_number" maxlength="11" minlength="10" class="form-control" style="width: 500px">
                    <label for="">City</label>
                    <input type="text" name="city" id="city" class="form-control" style="width: 500px">
                    <label for="">State</label>
                    <input type="text" name="state" id="state" class="form-control" style="width: 500px">
                    <label for="">Pincode</label>
                    <input type="text" name="pincode" id="pincode" class="form-control" style="width: 500px">
                    <div style="display: flex; margin:10px">
                        <button type="submit" class="btn btn-info" style="background-color: yellow; border:1px solid white; width:300px; border-radius:20px" >submit</button> <a href="{{route('product.list')}}" class="btn btn-info" style="background-color: orange; border:1px solid white; width:300px; border-radius:20px">back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('frontend/css/design.css') }}">
    <link href="{{ asset('frontend/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div class="index-container">
        <div class="header">
            {{-- @foreach($product_data as $row)
            <img src="{{ asset('storage/'.$row->product_img)}}" alt="" style="background-color: red">
            @endforeach --}}
            <div class="logo-part">
                <img src="{{ asset('images/logo.png')}}" alt="">
            </div>

            <div class="address-part">
                <h5><i class="bi bi-geo-alt"></i>
                    @if (Auth::user())
                    {{Auth::user()->name}}</h5>
                    @else
                    <span>User</span>
                    @endif
            </div>

            <div class="searchbar-container">
                <h5>
                    <div class="search-form">
                        <form action="{{route('user.search')}}" method="post">
                            @csrf
                            <div class="search-box">
                                <input type="text" name="search" placeholder="Search" class="form-control" style="width: 700px">
                                <button type="submit" class="btn btn-info"><i class="bi bi-search"></i></button>
                            </div>
                        </form>
                    </div>
                </h5>
            </div>

            <div class="cart-part" align="right">
                <h2><i class="bi bi-person-circle"></i></h2>
                <span style="display: flex; justify-content:center; align-items:center;"><a href="{{route('user.logout')}}" style="text-align:center">
                    @if (Auth::user())
                    logout
                    @else
                    login
                    @endif
                    </a></span>
                <a href=""><h2><i class="bi bi-cart4"></i></h2></a>
            </div>
        </div>

        <div class="navbar">
                <nav><a href="">All</a> </nav>
                <nav><a href="">amazon miniTv</a></nav>
                <nav><a href="">Best Sellers</a></nav>
                <nav><a href="">Mobiles</a></nav>
                <nav><a href="">Electronics</a></nav>
                <nav><a href="">Customer Service</a></nav>
                <nav><a href="">New releases</a> </nav>
        </div>

        <div class="content">
            <x-notify/>
            @yield('content')
        </div>

        <div class="footer">
            <div class="footer-details">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At inventore, est laborum consectetur officiis error maiores asperiores ex facilis culpa sed dignissimos aspernatur, expedita porro! Fuga laborum quam accusantium sapiente?</p>
                <h6>email:<a href="">dumb@gmail.com</a></h6>
                <h6>contact:098765432</h6>
                <h6>Customer Service:098765432345678</h6>
            </div>
        </div>
    </div>
    @stack('scripts')
</body>
</html>

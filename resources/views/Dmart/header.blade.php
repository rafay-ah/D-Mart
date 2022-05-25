<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Register</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}" rel="stylesheet">


    <link href="{{url('/assetss/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">


    <link href="{{url('/assetss/assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/css/bootstrap.rtl.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/css/bootstrap.rtl.min.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/css/bootstrap-grid.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/css/bootstrap-grid.min.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/css/bootstrap-grid.rtl.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/css/bootstrap-reboot.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/css/bootstrap-reboot.min.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/css/bootstrap-reboot.rtl.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/css/bootstrap-reboot.rtl.min.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/css/bootstrap-reboot.min.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/css/bootstrap-utilities.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/css/bootstrap-utilities.min.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/css/bootstrap-utilities.rtl.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/css/bootstrap-utilities.rtl.min.css')}}" rel="stylesheet">

    <link href="{{url('/assetss/assets/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('/assetss/assets/css/style1.css')}}">

</head>
<body>

<header id="header" class="d-flex align-items-center">
    <i id="Logo" class="logo" ><a href="{{url('/main_page')}}"><img id="Logo" src="{{url('images/header-logo.jpg')}}" ></a></i>
    <div class="container d-flex align-items-center justify-content-between">
        <!-- <i id="Logo"class="logo"><img src="images/header-logo.jpg"></i>          -->
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" id= "Product" href="{{url('/main_page')}}"><b>PRODUCTS</b></a></li>
                <li><a class="nav-link scrollto"  href="{{url('/main_contact')}}"><b id="c">Contact Us</b></a></li>
                <li  class="dropdown"><a href="#"> <span id="c"> <b>Categories</b> </span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{url('/trending')}}">Trending Products</a></li>
                        <li><a href="{{url('/kids')}}">Gyro Baby Care</a></li>
                        <li><a href="{{url('/electronics')}}">Philips</a></li>
                        <li><a href="{{url('/prod')}}">All Products</a></li>
                    </ul>
                </li>
                <li  class="dropdown"><a href="#"> <span id="c" > <b>Orders</b> </span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{url('/cart')}}">Cart</a></li>
                        <li><a href="{{url('/favorite')}}">Favourites</a></li>
                    </ul>
                </li>
                @php
                $user = auth()->user();
                if($user){
                    $user = $user->localId;
                    $user = app('firebase.firestore')->database()->collection('users')->document($user)->snapshot();
                }
                @endphp
                @if(!$user)
                <li><a class="nav-link scrollto" href="{{url('/user/login')}}"><b id="c">Register/Login</b></a></li>
                <li><a  class="nav-link scrollto" href="{{url('/main_profile')}}"><b id="c">Profile</b></a></li>
                @else
                    <li>   <a class="nav-link scrollto " style="color: #ee1d23" href="{{url('/main_profile')}}"><b> My Profile</b></a></li>
                    <li>  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> {{ __('Logout') }} </a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

{{--                    <li>   <a class="nav-link scrollto " style="color: #ee1d23; margin-right: auto" href="{{url('/main_profile')}}"><b> My Profile</b></a></li>--}}
                    <div style="color: #ee1d23; margin-left:30px; margin-right: 60px"><i class="fa fa-user"></i><h11><b>&nbsp; Welcome User</b></h11></div>

                @endif
            </ul>

        </nav>
    </div>
</header><br>
</body>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.rtl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.rtl.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-grid.css" rel="stylesheet">
    <link href="assets/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-grid.rtl.css" rel="stylesheet">
    <link href="assets/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="assets/css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-reboot.rtl.css" rel="stylesheet">
    <link href="assets/css/bootstrap-reboot.rtl.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-reboot.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-utilities.css" rel="stylesheet">
    <link href="assets/css/bootstrap-utilities.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-utilities.rtl.css" rel="stylesheet">
    <link href="assets/css/bootstrap-utilities.rtl.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style1.css">
</head>
<body>

<br>
@include('Dmart.header')

<br><br><br><br>


@if(session()->exists('message'))

    <div id="wronglogin" class="alert alert-danger container my-4" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{session('message')}}
        <strong>Incorrect Email or Password!</strong> Try Again!
    </div>
@endif


@if ($message = Session::get('success'))

    <br />
    <div id="" class="alert alert-success alert-block" >
        <strong> Registration Successfull!!  </strong><i>Please  <a style="cursor: pointer" href="{{url('/user/login')}}" data-toggle="modal" data-target="#loginModal" data-dismiss="modal"><b><u style="color: brown">Login</u></b> </a> to Continue </i>
    </div>
@endif

@if ($message = Session::get('user_exist'))
    <br />
    <div class="alert alert-danger alert-block" >
        <strong>{{ $message }}</strong><i>Please<a href="{{url('/user/login')}}"> LogIn </a> </i>
    </div>
@endif
@if ($message = Session::get('failed'))

    <br />
    <div class="alert alert-danger alert-block" >
        <strong>{{ $message }}</strong><i>Please<a href="myModal"> Try Again </a> </i>
    </div>
@endif



<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-2">
        </div>
        <div id="container" class="col-md-6">
            <br><br>
            <h3><center>Please login</center></h3>
            <br>
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <center> <input  id = "field" class="form-control" type="email" placeholder="Email" name="email" required> <br><br>
                <input id = "field" class="form-control" type="password" placeholder="Password" name="password" required> <br><br>
                <div id="lgcontainer" class= "sub-container"   >

                    <button type="submit" class="btn btn-dark btn-block btn-round btn-style"><i class="fa fa-sign-in icon"></i>
                        {{ __('Login') }}
                    </button><br>
{{--                    @if (Route::has('forgotPassword'))--}}
{{--                        <a id="forget" class="forgetpassword" href="{{ route('forgotPassword') }}">--}}
{{--                            <u> {{ __('Forgot Your Password?') }}</u>--}}
{{--                        </a>--}}
{{--                    @endif--}}

                </form>
{{--                    <a id="forget" href="#default" class="forgetpassword"><b>Forget Password</b></a>--}}
{{--                    <a id="login"  href="profile.html" role="button"><b>Login</b></a></div><br>--}}
                <br><br></center></div>
        <div class="col-md-2">
        </div>
    </div>

    <br><br>
</div>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-2">
        </div>
        <div id="container" class="col-md-6">
            <br>
            <h3 ><a id="lregister" href="{{url('/user/register')}}" role="button"><center> New here? Register Now </center></a></h3>
            <br>
        </div>
        <div class="col-md-2">
        </div>
    </div>
    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> &nbsp; &nbsp; {{ __('Logout') }} </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>

    <br><br>
</div>

<br><br><br>

@include('Dmart.footer')

<!-- End Footer -->
<br><br><br>
<br><br>




<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.esm.js"></script>
<script src="assets/js/bootstrap.esm.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/bootstrap.min.js"></script>


</body>
</html>



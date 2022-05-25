<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Register</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="{{url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}" rel="stylesheet">


    <link href="{{url('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">


    <link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap.rtl.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap.rtl.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap-grid.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap-grid.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap-grid.rtl.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap-reboot.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap-reboot.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap-reboot.rtl.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap-reboot.rtl.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap-reboot.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap-utilities.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap-utilities.min.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap-utilities.rtl.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/bootstrap-utilities.rtl.min.css')}}" rel="stylesheet">

    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets/css/style1.css')}}">

</head>
<body>

<br>
@include('Dmart.header')
<br><br><br><br><br>



@if(session()->exists('message'))

    <div id="wronglogin" class="alert alert-danger container my-4" role="alert">
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
            <br>
            <h3 id="lregister"><center> Please Login </center></h3>
            <br>
        </div>
        <div class="col-md-2">
        </div>
    </div>

    <br><br>
</div>

<br><br>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-2">
        </div>
        <div id="container" class="col-md-6">
            <br><br>
            <div id = "container" class="container-fluid">
                <div  class="container text-center" class = "container vertical-center">
                    <h1 id="lregister">New here? Register Now</h1><br>


                    <form method="POST" action="{{ route('register') }}" >
                        @csrf
                    <input id="field" class="emailset" type="fname" placeholder="Name" name="name"> <br><br>
{{--                    <input id="field" class="emailset" type="lname" placeholder="Last Name" name="lname" > <br><br>--}}
{{--                    <div class="row" >--}}
{{--                        <div class="col">--}}
{{--                            <div class="form-check">--}}
{{--                                <input class="form-check-input" type="radio" name="radio" id="male" value="option1" checked >--}}
{{--                                <label id="right" class="form-check-label" for="male"  >--}}
{{--                                    Male--}}
{{--                                </label>--}}
{{--                            </div></div>--}}

{{--                        <div class="col">--}}
{{--                            <div class="form-check">--}}
{{--                                <input id="left" class="form-check-input" type="radio" name="radio" id="female" value="option1" checked  >--}}
{{--                                <label id="left" class="form-check-label" for="female"  >--}}
{{--                                    Female--}}
{{--                                </label>--}}
{{--                            </div></div>--}}
{{--                    </div>--}}
{{--                    <br>--}}
                    <input id="field" class="emailset" type="email" placeholder="Email" name="email" > <br><br>

                    <input id="field" class="passwordset" type="password" placeholder="Password" name="password" > <br><br>

                    <input id="field" class="emailset" type="password" placeholder="Confirm Password" name="password_confirmation" > <br><br>

{{--                    <input id="field" class="emailset" type="input" placeholder="Country" name="country"> <br><br>--}}

{{--                    <input id="field" class="emailset" type="input" placeholder="Invitation Code (Optional)" name="invitation" > <br><br>--}}

                    <br>
                    <button type="CreateAcc_submit" class="btn btn-primary">{{ __('Register') }}</button>
                    </form>
                </div>
                <br>

            </div>
        </div>
        <div class="col-md-2">
        </div>
    </div>

    <br><br>
</div>






<br><br><br>
@include('Dmart.footer')


<br><br><br><br><br>





<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.esm.js"></script>
<script src="assets/js/bootstrap.esm.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/bootstrap.min.js"></script>


</body>
</html>



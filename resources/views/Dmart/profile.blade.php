<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Profile</title>
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

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

</head>
<body>
<br>
<!--Header-->
@include('Dmart.header')

<br><br>
<!---HEADER END-->
<!--Profile-->
<div id="Profile"class="row">
    <div  class="col" >
        <div id="Profile1" class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    @if(!$user->data()['image'])
                        <img src="{{url('assets/img/profile.png')}}" alt="Admin" class="rounded-circle" width="150"  >
                    @else
                        <img src="{{url($user->data()['image'])}}" alt="Admin" class="rounded-circle" width="150"  >
                    @endif
{{--                        <h3 class="text-primary">Upload Image</h3><br>--}}
                        {!! Form::open(['action' => 'App\Http\Controllers\UserController@image', 'method' => 'post' , 'files'=>true]) !!}

                        <div class="form-group">
                            {!! Form::file('image', null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                            {!! Form::submit('Upload', ['class'=>'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}

                    <div class="mt-3">
                        <h4>{{$user->data()['name']}}</h4>
                        <p>{{$user->data()['email']}}</p>
                        <div class="steps-form">

                        </div>


                    </div>
                </div>
            </div>
        </div>

        <br><br>
        <!--Col 1-->
        <div class="container-fluid">
            <br>

            <br>
            <div id="Profile2"class="container-sm" >
                <div id="MY5" class="row" >
                    <div id="MY6" class="col" >
                        <a id="MY14" href="{{url('/main_page')}}" >&emsp;&emsp;Find Products </a><br>
                    </div>
                </div>
                <div id="MY5" class="row" >
                    <div id="MY6" class="col" >
                        <i  class="fa fa-heart-o" aria-hidden="true"></i><a id="MY14" href="{{url('/favorite')}}" >&emsp;&emsp;Wishlist</a><br>
                    </div>
                </div>
                <div id="MY5" class="row" >
                    <div id="MY6" class="col" >

                        <i class="fa fa-ticket" aria-hidden="true"></i><a id="MY14" href="{{url('/cart')}}" >&emsp;&emsp;Cart List</a><br>
                    </div>
                </div>

                <div id="MY5" class="row" >
                    <div id="MY6" class="col" >
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i> {{ __('Logout') }} </a><br>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div></div>




    <!--Col 2-->
    <div class="col-lg-8"><div class ="col-lg-6">


        </div>
        @if ($message = Session::get('Success'))
            <br />
            <div id="" class="alert alert-success alert-block" >
                <strong> Profile Has Been Updated Successfully!  </strong>
            </div>

        @else
        @endif
        <!---col 3-->
        <form method="POST" action="{{url('/user/update')}}">
            {{ csrf_field() }}
{{--            <input type="hidden" name="_method" value="PUT">--}}
        <br>
        <b>Name*</b><br>
        <input   class="emailset" type="text" style="height: 40px;"  placeholder="Update Your Name"  name="name" value="{{$user->data()['name']}}"><br><br>
         <b>Shipping Address*</b><br>
        <input id="c2"  type="text" class="emailset" style="width: 350px; height:  50px " name="shipment" placeholder="Shipping Address" value="{{$user->data()['deliveryAddress']}}"> <br><br>

            <button id="update" type="submit" class="btn btn-primary">
                {{ __('Update') }}
            </button>
        </form>

    </div></div>
<!---End-->

<br><br><br>

@include('Dmart.footer')

<br><br><br><br><br>





<!-- End Footer -->
</body>
</html>
<script>
    import Index from "./assets/vendor/bootstrap-icons/index.html";
    export default {
        components: {Index}
    }
</script>

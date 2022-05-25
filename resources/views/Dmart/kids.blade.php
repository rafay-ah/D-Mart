<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="{{url('https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i')}}" rel="stylesheet">
    <link href="{{url('/assetss/assets/css/style.css')}}" rel="stylesheet">
    <!-- Bootstrap 4 links -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{url('/assetss/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('/assetss/assets/css/style1.css')}}">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css')}}">
    <link href="{{url('/assetss/css/multislider.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/css/slider_item.css')}}" rel="stylesheet">
    <link href="{{url('/assetss/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{url('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}" />


    <link href="{{url('/assetss/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">

    <link href="{{url('/assetss/assets/css/bootstrap.css')}}" rel="stylesheet">

    {{--    <link href="{{url('assetss/css/style.css')}}" rel="stylesheet">--}}


</head>
<body class="container-fluid">
<br>
@include('Dmart.header')
<!-- Crousel/Banner -->
<div class= "container-fluid" >
    <img id="imgabout" src = "{{url('assets/img/banner.jpg')}}">
</div>

<br>
<br>

<h2 id="h5-1"><b>Gyro Baby Care Products</b></h2>

<div class="container-fluid">
    <div id="blogSlider">

        <div class="MS-content">
            @foreach ($products as $document)
                @if ($document->exists())
                    <div class="item">
                        <div id="homecolc"class="col item-card" >
                            <center>
                                <i id="homei1" class=" icon" >
                                    <center> <img id="homeimg1" src="{{url($document->data()['images'][0])}}" width="200"   data-toggle="modal" data-target="#ProductDetail"></center>
                                </i>
                                <a href="{{url('/product/details/'.$document->data()['name'])}}"><h6>{{$document->data()['name']}} <span id="homebtncolor" >Win</span></h6></a><br>
                                <h6>{{$document->data()['price']." PKR"}}</h6>
                                <a href="{{url('/add_to_wishlist/'.$document->data()['name'])}}">
                                    <div>
                                        <div class = "con" >Add to WishList</div>
                                    </div>
                                </a>
                                <a href="{{url('/add_to_cart/'.$document->data()['name'])}}">
                                    <div class="add-cart">
                                        <div class = "con" >Add to Cart</div>
                                    </div>
                                </a>

                            </center>
                        </div>
                    </div>
                @else
                    {{'Document %s does not exist!' . PHP_EOL, $document->id()}}
                @endif
            @endforeach
        </div>

        <div class="MS-controls">
            <button id="control" class="MS-right"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>
            <button id="control" class="MS-left"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>
        </div>

    </div>
</div>



<br><br>



@if ($message = Session::get('cart_added'))
    <br />
    <div id="" class="alert alert-success alert-block" >
        <strong> Product Have Been Added Successfully Into Cart  </strong>
    </div>
@endif
@if ($message = Session::get('fav_added'))

    <br />
    <div id="" class="alert alert-success alert-block" >
        <strong> Product Have Been Added Successfully Into Favorite List. </strong>
    </div>
@endif
@if ($message = Session::get('notLogedIn'))

    <br />
    <div class="alert alert-danger alert-block" >
        <strong> Product Have Not Been Added To Cart </strong><i>Please  <a href="{{url('/user/login')}}" ><b>Login</b> </a> to Continue </i>

    </div>
@endif




<br><br>


<br><br>




<h1>Affiliation Charities</h1>

<div class="container-fluid">
    <div class="row">

        <div id="gmi" class="col" style="background-image: url('{{('images/img1.png')}}');">

            <h1 id="rof">Building schools <br>for tomorrow</h1>
            <br>
            <a id="erom" href = "{{url('Charities.blade.html')}}">Learn More</a>

            <br><br><br>
        </div>

        <div id="orl" class="col">

            <h1 id="serac">Donating to our partner <br>charity Dubai Cares </h1>


            <br>
            <a  id="nrael" href = "{{url('Charities.blade.html')}}">Learn More</a>

        </div>
    </div></div>

<!--Start of al 1 -->
<div class="modal" id="ProductDetail">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div id="mb" class="modal-body">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="modal-img">
                            <img  src="{{url('images/cap.png')}}">
                        </div>
                        <div id="wor" class="row">
                            <div class="col-sm-2"></div>
                            <div id="tmms" class="col-sm-4 modal-tab "><a href="#PriceDetail" data-toggle="modal" data-target="#PriceDetail"><h6>Price details</h6></a></div>
                            <div id="tmsmss" class="col-sm-4 modal-tab"><a href="#ProductDetail" data-toggle="modal" data-target="#ProductDetail"><h6>Product details</h6></a></div>
                            <div class="col-sm-2"></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="user-option">
                            <div class="user-opt-icon">
                                <img src="{{url('images/arrow-down-sign-to-navigate@2x.png')}}" class="close" data-dismiss="modal" >
                            </div>
                            <div class="user-opt-icon">
                                <a href="DSS MERCEDES.html"><img src="{{url('images/fullview.png')}}"></a>

                            </div>
                            <div class="user-opt-icon">
                                <img src="images/newwishlist@2x.png">
                            </div>
                            <div class="user-opt-icon">
                                <img src="{{url('images/sharenew.png')}}" >
                            </div>
                        </div>
                    </div>
                </div>
                <h6>Get a chance to win</h6>
                <h6><b>AED25.000 Cash</b></h6>
                <p id="deen">Need a holiday? Maybe you have a birthday or a special event coming up? Whether you want to buy something
                    special or simply pay a bill, AED25,000 will always come in useful.</p>
            </div>
            <footer>
                <div id="diulf" class="container-fluid">
                    <div class="row">
                        <div class ="col">
                            <p id="tes"><b>Buy Rosa Set</b><br>
                                <span id="homebtncolor"><b>AED50.00</b></span><br>
                                Inclusive of VAT</p>
                        </div>
                        <div id="loc" class="col">
                            <a id="trac" class="btn btn-primary" href="EnterCode.html" role="button">Add to cart</a></div><br>

                    </div>

                </div>
            </footer>
        </div>
    </div>
</div>
<!-- End of Modal 1 -->


<div class="modal" id="PriceDetail">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div id="mb" class="modal-body">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="modal-img">
                            <img  src="{{url('images/cap.png')}}">
                        </div>
                        <div id="wor" class="row">
                            <div class="col-sm-2"></div>
                            <div id="tmms" class="col-sm-4 modal-tab "><a href="#PriceDetail" data-toggle="modal" data-target="#PriceDetail"><h6>Price details</h6></a></div>
                            <div id="tmsmss" class="col-sm-4 modal-tab"><a href="#ProductDetail" data-toggle="modal" data-target="#ProductDetail"><h6>Product details</h6></a></div>
                            <div class="col-sm-2"></div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="user-option">
                            <div class="user-opt-icon">
                                <img src="{{url('images/arrow-down-sign-to-navigate@2x.png')}}" class="close" data-dismiss="modal" >
                            </div>
                            <div class="user-opt-icon">
                                <a href="DSS MERCEDES.html"><img src="{{url('images/fullview.png')}}"></a>

                            </div>
                            <div class="user-opt-icon">
                                <img src="{{url('images/newwishlist@2x.png')}}">
                            </div>
                            <div class="user-opt-icon">
                                <img src="{{url('images/sharenew.png')}}" >
                            </div>
                        </div>
                    </div>
                </div>
                <h6>Blanco Set
                    <span id="ecirp">Price<b>AED50.00</b></span></h6>
                <p id="deen">Need a holiday? Maybe you have a birthday or a special event coming up? Whether you want to buy something
                    special or simply pay a bill, AED25,000 will always come in useful.</p>
            </div>
            <footer>
                <div id="diulf" class="container-fluid">
                    <div class="row">
                        <div class ="col">
                            <p id="tes"><b>Buy Rosa Set</b><br>
                                <span id="homebtncolor"><b>AED50.00</b></span><br>
                                Inclusive of VAT</p>
                        </div>
                        <div id="loc" class="col">
                            <a id="trac" class="btn btn-primary" href="EnterCode.html" role="button">Add to cart</a></div><br>

                    </div>

                </div>
            </footer>
        </div>
    </div>
</div>
<!-- End Price Details  -->





<!-- Start of Modal 2 for D-Mart product -->


<div class="modal" id="myModal">
    <div id="glla" class="modal-dialog modal-lg">
        <div class="modal-content">
            <div id="mb" class="modal-body">
                <div class="row">
                    <div class="col-sm-10">
                        <div class="modal-img">
                            <img id="pac" src="{{url('images/cap.png')}}">
                        </div>

                    </div>
                    <div class="col-sm-2">
                        <div class="user-option">
                            <div class="user-opt-icon">
                                <img src="{{url('images/arrow-down-sign-to-navigate@2x.jpeg')}}" class="close" data-dismiss="modal" >
                            </div>
                        </div>
                    </div>
                </div><br><br>
                <p id="kool">A classic look with a timeless message, the ‘H2H’ hoodie is about empowering the individual to make a positive social change. The design also represents the passion of the brand, our dedication to style and our ambition to help others less fortunate around the world.</p>
            </div>

        </div>
    </div>
</div>

<br><br>

@include('Dmart.footer')
<br><br><br><br><br>








<script src="{{url('/')}}/assetss/assets/js/bootstrap.bundle.js"></script>
<script src="{{url('/')}}/assetss/js/bootstrap.bundle.min.js"></script>
<script src="{{url('/')}}/assetss//assets/js/bootstrap.esm.js"></script>
<script src="{{url('/')}}/assetss/js/bootstrap.esm.min.js"></script>
<script src="{{url('/')}}/assetss//assets/js/bootstrap.js"></script>
<script src="{{url('/')}}/assetss/js/bootstrap.min.js"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{url('/')}}/assetss/js/multislider.min.js"></script>
<script src="{{url('/')}}/assetss/js/custom.js"></script>




<script>

    $('#blogSlider').multislider({
        duration: 750,
        interval: 99000000
    });

    //    </script>

<script>

    $('#blogSlide').multislider({
        duration: 750,
        interval: 99000000
    });

    //    </script>

</body>
</html>



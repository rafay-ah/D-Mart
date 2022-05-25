<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Product Details</title>
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
<br><br>


<div  id="sr" class="row">
    <div class="col-8" >

        <h4 id="DSS">{{$products->data()['name']}}</h4>
        <div id="srr" class="row">
            <div id="cr" class="col">
                <center> <img id="si" src="{{url($products->data()['images'][0])}}" width="200" height="200">
                </center>
                <center><h5 class="saa">Buy a </h5><h6 class="saa">{{$products->data()['name']}}</h6>
                </center>
                <center> <p>{{$products->data()['productDescription']}} </p>
                </center>
            </div>

        </div>

    </div>
    <div class="col-4">

        <div id="scs" class="container-sm">
            <div id="srrr" class="row">
                <div id="scc" class="col">
                    <h4>Price</h4>
                    <h6>Inclusive of VAT</h6>
                </div>

                <div class="col">
                    <h5 id="AED">{{$products->data()['price']}} PKR</h5>
                </div>
            </div>
        </div>

        <br>

        <div id="scss" class="container-sm">

            <a href="{{url('/add_to_cart/'.$products->data()['name'])}}"><h3 id="add"><center>Add to Cart</center></h3></a>
        </div>

        <br>

        <div id="scsss" class="container-sm">

            <a href="{{url('/add_to_wishlist/'.$products->data()['name'])}}"><center><h5 class="saa"><img src="{{url('images/fav.png')}}" class="img-fluided" alt="Responsive image">Add to Wishlist</h5></center></a>
        </div>

        <br>



        <br>

    </div>
</div>
<br>
<div id="scstt" class ="container-fluid">
    <h5>Buy a {{$products->data()['name']}} and get a chance to win<br>
        Mercedes C200 AMG + AED25,000 Cash
    </h5>
    <h6>Prize Details</h6>
    <p>Mercedes Mega Raffle (2021 Mercedes C200 + AED25,000 cash). D-Mart has partnered with DSS to bring you the Mercedes Mega Raffle
        wherein one lucky winner will walk away with a 2021 Mercedes C200 and AED25,000 cash!</p>
    <h6>Terms and Conditions</h6>
    <p>•This promotion is valid from 23 May 2021 to 25 September 2021.<br>
        •Coupons for this promotion are available in sequential packages.<br>
        •The maximum draw date displayed is the latest date on which the draw will take place.<br>
        •If a sequential package sells out before the advertised maximum draw date, the draw date will be brought forward and all participants in that specific draw will be
        notified by email and SMS.<br>
        •Winners will be notified using the phone numbers provided on their ticket.<br>
        •Winners are requested to carry the ticket counterfoil and proper identification (passport or Emirates ID) to claim their prize.<br>
        •The prize will be handed over only to the person whose name appears on the winning coupon.<br>
        •The prize must be collected within 2 months of the winner being announced.<br>
        •Dubai Festivals and Retail Establishment (DFRE) and their partners in this promotion are in no way responsible for the loss of any coupon(s).<br>
        •Dubai Festivals and Retail Establishment (DFRE) and their partners in this promotion are in no way responsible for the failure to collect the prize in time.<br>
        •Draw dates are subject to change with or without notice. For more information regarding the draw dates, venues and winner details, please call D-Mart on +971 800
        D-Mart (433259) or Dubai Tourism call centre on +971 600 555 559.<br>
        •In case a fraudulent transaction is suspected, DFRE and its partners in this promotion reserve the right to deny the prize to the winner.<br>
        •DFRE and their partners’ decision on all aspects will be final and binding. No queries or claims will be entertained.<br>
        •Coupon is valid till the date of the draw. Each coupon entitles the buyer to one chance to win the 2021 MERCEDES C200 and AED25,000 Cash.<br>
        •The prize of 2021 MERCEDES C200 and AED25,000 Cash will be given to 1 winner only.<br>
        •The total cashback value for the car (AED100,000) + cash prize (AED25,000) is AED125,000.<br>
        •The winner explicitly agrees to bear the cost of customs, VAT and any other taxes or fees related to receiving the prize. DFRE and the car dealer reserves the right to
        invoice the winner for said fees.<br>
    </p>
    <br><br>

    <div id="scf" class ="container-fluid">
        <p>&nbsp;</p>
    </div>
    <br><br>


</div></div>
<br><br><br>

@include('Dmart.footer')

<br>
<br><br><br><br>




<script src="assets/js/bootstrap.bundle.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.esm.js"></script>
<script src="assets/js/bootstrap.esm.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/bootstrap.min.js"></script>


</body>
</html>

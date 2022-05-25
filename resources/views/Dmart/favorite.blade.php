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


<!---HEADER END-->
<!--Profile-->
<div style="margin: 100px">
    <h1 style="margin: auto; padding: 10px; background-color: orange; border-radius: 20%; margin-bottom: 30px; color: white">Wish List</h1>
    @if ($message = Session::get('Success'))

        <br />
        <div id="" class="alert alert-success alert-block" >
            <strong> Product Have Been Added Successfully Removed From Wish List  </strong>
        </div>
    @endif
        @if ($message = Session::get('cart_added'))

            <br />
            <div id="" class="alert alert-success alert-block" >
                <strong> Product Have Been Added Successfully Into Cart  </strong>
            </div>
        @endif
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Image</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @php
        $i=0;
        @endphp
        @foreach($product_summary as $product)
            <tr>
                <th scope="row">{{++$i}}</th>
                <td>{{$product['name']}}</td>
                <td><img src="{{$product['image'][0]}}" style="width: 50px; height: 50px;"></td>
                <td>{{$product['price']}}</td>
                <td>
                    <a href="{{url('/removeSingleFav/'.$product['name'])}}" style="background-color: orangered; color: white; padding: 5px; border-radius: 10%; margin: 5px">Remove</a>
                    <a href="{{url('/add_to_cart/'.$product['name'])}}" style="background-color: green; color: white; padding: 5px; border-radius: 10%; margin: 5px">Add To Cart</a>
                </td>
            </tr>


        @endforeach

        <tr>
            <th scope="row"></th>
            <td colspan="2">Total</td>
            <td>{{$total}}</td>
        </tr>
        </tbody>
    </table>

</div>
<!---End-->

<br><br><br>

@include('Dmart.footer')

<br><br><br><br><br>

<!-- End Footer -->
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Contact</title>
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


<div class="container-fluid">
    <div class="row">

        <div class="col" >

            <h1>Contact</h1>
            <p>Please fill in the form below and a dedicated member of our team will be in touch within 24hrs</p>
            <input id="email" class="emailset" type="name" placeholder="Name" name="name" required><br><br>
            <input id="email" class="emailset" type="email" placeholder="Email" name="email" required> <br><br>

            <select class="emailset" id="email" required >
                <option selected>Topic</option>
                <option value="1">General Enquiries</option>
                <option value="2">abc</option>
                <option value="3">xyz</option>
            </select>
            <br><br>

            <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="5" required></textarea>
            <br><br>
            <center><a id="send" class="btn btn-lg" href="EnterCode.html" role="button">Send</a></center>
        </div>

        <div id="col2" class="col" >

            <div class="card" >
                <div id="map-container-google-4" class="z-depth-1-half map-container" >
                    <iframe id="map" src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                            allowfullscreen></iframe>
                </div>
                <div class="card-body">
                    <h5 class="card-title">D-Mart Headquarters</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <p id="address">  Box Park,<br>  Al Wasl Rd, P.O. Box <br>  122555<br>  Dubai, United Arab<br>Emirates</p>
                </ul>
                <div class="card-body">
                    <a href="#" class="card-link">Call Us Now</a>
                    <a href="#" class="card-link">800-D-Mart (433259)</a>
                    <a href="#" class="card-link">Write Us an email <br> support@D-Mart.com</a>
                </div>
            </div>

        </div>
    </div></div>
















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

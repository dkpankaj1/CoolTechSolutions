<!DOCTYPE html>
<html lang="en">
    
        <head>
            <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loazzne - Heating & Air Conditioning Repair & Installation Services HTML Template</title>
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,600i,700" rel="stylesheet">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.png">
    <!--stylesheet-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontello.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
        </head>

        <body>
            @include('website.layouts.header')
            {{$slot}}

            @include('website.layouts.footer')



            <script src="{{asset('assets/js/jquery.min.js')}}"></script>
            <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
            <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
            <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
            <script src="{{asset('assets/js/waypoint.js')}}"></script>
            <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
            <script src="{{asset('assets/js/custom-map.js')}}"></script>
            <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyA_Agsvf36du-7l_mp8iu1a-rXoKcWfs2I')}}"></script>
            <script src="{{asset('assets/js/custom.js')}}"></script>
        </body>
    

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Eyl') }}</title>

    <!-- Scripts -->
     <!--   Core JS Files   -->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Styles -->

    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/main.js"></script>
       
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
            crossorigin="anonymous">
            
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <!-- Styles -->
  
    <link rel="stylesheet" href="{{ asset('css/linearicons.css')}}">
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{ asset('fontawesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/nice-select.css')}}">
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('css/main.css')}}">
		<link rel="stylesheet" href="{{ asset('css/.css')}}">
   <!-- Animation library for notifications   -->


</head>
<body>
    <div class="oz-body-wrap">
            <!-- Start Header Area -->
            <header class="default-header">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <div class="header-top d-flex justify-content-between align-items-center">
                            <div class="logo">
                                <a href="index.html"><h3><img src="{{URL::asset('/img/last.jpg')}}" alt="" height="50" width="50">
                                    EYL</h3>
                                    </a>
                            </div>
                            <div class="main-menubar d-flex align-items-center">
                                <nav class="hide">
                                <a href="/"><span class="lnr lnr-home" style="font-size:40px; "></span></a>
                              <a href="{{route ('aboutus')}}">  <span class="lnr lnr-license" style="font-size:40px; ">  </span> </a>                       
                                     <a  href="{{ route('login') }}"><span class="lnr lnr-arrow-right" style="font-size:40px; "></span></a>
                                   <a  href="{{ route('register') }}" > <span class="lnr lnr-users" style="font-size:40px;"> </span></a>
                                                                       
                                </nav>
                                <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
                        
            
            <main class="py-4">
                @yield('content')
            </main>
           <!-- Strat Footer Area -->

    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="shortcut icon" href="{{asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{asset('img/favicon.ico') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="_token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'StreetSmart') }}</title>

    <!-- Scripts -->
     <!--   Core JS Files   -->
    


<!-- Latest compiled and minified JavaScript -->
    <!-- Styles -->


   
       
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
            crossorigin="anonymous">
     
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    

    <!-- Styles -->
    
    <link rel="stylesheet" href="{{asset('css/argon.css')}}">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
   
		<script src="{{asset('js/argon.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript">
      $(function(){
      $( "#q" ).autocomplete({
        source: "search/autocomplete",
        minLength: 3,
        select: function(event, ui) {
          $('#q').val(ui.item.value);
        }
      });
    });
  </script>

</head>
<body>
    
  <header class="header-global">
    <nav id="navbar-main" class="navbar navbar-expand-lg navbar-dark bg-success ">
      <div class="container">
        <a class="navbar-brand mr-lg-5" href="/">
          <img src="" height="75%" width="50%">EYL
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="/">
                  <img src="">
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="/" target="_blank" data-toggle="tooltip" title="back home">
                <i class="fa fa-home"></i>
                <span class="nav-link-inner--text d-lg-none">Home</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="{{route('aboutus')}}" target="_blank" data-toggle="tooltip" title="About Us">
                <i class="fa fa-user"></i>
                <span class="nav-link-inner--text d-lg-none">About us</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="{{route('login')}}" target="_blank" data-toggle="tooltip" title="Login">
                <i class="fa fa-arrow-right"></i>
                <span class="nav-link-inner--text d-lg-none">Login</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="{{route('register')}}" target="_blank" data-toggle="tooltip" title="Register here">
                <i class="fa fa-edit"></i>
                <span class="nav-link-inner--text d-lg-none">Register</span>
              </a>
            </li>
            
          </ul>
        </div>
      
    </nav>
  </header>           
            
    <main class="py-4">
         @include('flash-message')
        @yield('content')
       
    </main>
           <!-- Strat Footer Area -->
            
    </body>
</html>

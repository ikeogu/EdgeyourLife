<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">

   <link href="{{asset('css/animate.min.css')}}" rel="stylesheet"/>

<!--  Light Bootstrap Table core CSS    -->
<link href="{{asset ('css/light-bootstrap-dashboard.css')}}" rel="stylesheet"/>

    <link href="{{asset ('css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
    <link href="{{asset ('css/demo.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/linearicons.css')}}">
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/nice-select.css')}}">
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
       
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/fusioncharts.js"></script>
<script type="text/javascript" src="js/fusioncharts.theme.zune.js"></script>
<script type="text/javascript" src="js/fusioncharts.jqueryplugin.js"></script>
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-theme.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap-datetimepicker.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/main2.css')}}">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/moment-with-locales.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js"></script>
		
        <link rel="stylesheet" href="{{ asset('css/main.css')}}">
        <script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/main.js"></script>
        <script type="text/javascript" src="js/data.js"></script>
<script type="text/javascript" src="js/dashboard.js"></script>

  


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href=" css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>
@if(Auth::user()->role_id == 1)
    <div class="wrapper">
        <div class="sidebar" data-color="green" data-image=" img/sidebar-1.jpg">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        EdgeYourLife
                    </a>
                </div>

                <ul class="nav">
                    <li class="">
                        <a href="dashboard.html">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="pe-7s-user"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <ul class="nav">
                        <li class="">
                            <a href="{{route('providers.index')}}">
                                <i class="pe-7s-graph"></i>
                                <p>View All Service Providers</p>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('users.index')}}">
                                <i class="pe-7s-user"></i>
                                <p>View All Users</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="pe-7s-note2"></i>
                                <p>Add Advert</p>
                            </a>
                        </li>
                       
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Dashboard</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-dashboard"></i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" >                                                                   
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <p class=""> You are logged in!</p>
                            </a>
                                
                            </li>
                            
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                            <a href="#">
                                <p> {{ Auth::user()->name }}</p>
                                </a>
                            </li>
                            
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            <li class="separator hidden-lg"></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('others')
                </main> 
                <footer>   
                    
                </div>
            </footer>
            
  
            
    @elseif(Auth::user()->role_id == 2) 
    <div class="wrapper">
        <div class="sidebar" data-color="green" data-image=" img/sidebar-1.jpg">

        <!--

            Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
            Tip 2: you can also add an image using data-image tag

        -->

            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="#" class="simple-text">
                        EdgeYourLife
                    </a>
                </div>

                <ul class="nav">
                    <li class="">
                        <a href="dashboard.html">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('home')}}">
                            <i class="pe-7s-user"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('providers.create')}}">
                            <i class="pe-7s-note2"></i>
                            <p>Add Service</p>
                        </a>
                    </li>

                    <li>
                        <a href="{{route('listservices')}}">
                            <i class="pe-7s-note2"></i>
                            <p>View Service</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('listservices')}}">
                            <i class=""></i>
                            <p>Update Service</p>
                        </a>
                    </li>
                    
                    
                  
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Dashboard</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-dashboard"></i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" >                                                                   
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <p class=""> You are logged in!</p>
                            </a>
                                
                            </li>
                            
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                            <a href="#">
                                <p> {{ Auth::user()->name }}</p>
                                </a>
                            </li>
                            
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                            <li class="separator hidden-lg"></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @yield('others')
            </main>
  
            <footer class="footer">
                
                  
                </div>
            </footer>
           
    @else 
    
 
     @endif 
    </div>
</div>


</body>

    <!--   Core JS Files   -->
   
    <script src="{{ asset('js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
		<!--  Charts Plugin -->
	<script src="{{asset('js/chartist.min.js')}}"></script>

    

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{ asset('js/light-bootstrap-dashboard.js')}}"></script>
    <script src=" {{ asset('js/vendor/bootstrap.min.js')}}"></script>
    <script src=" {{ asset('js/vendor/demo.js')}}"></script>
    
</html>

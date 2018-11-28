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
    


<!-- Latest compiled and minified JavaScript -->
    <!-- Styles -->

    <script src="{{ asset('js/app.js') }}" defer></script>

   
       
    <!------ Include the above in your HEAD tag ---------->

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
            crossorigin="anonymous">
            
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">

    <!-- Styles -->
  
        <link rel="stylesheet" href="{{ asset('css/linearicons.css')}}">
		<link rel="stylesheet" href="{{ asset('css/owl.carousel.css')}}">
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{ asset('css/nice-select.css')}}">
		<link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{ asset('css/main.css')}}">
   <!-- Animation library for notifications   -->
        <script src="js/vendor/jquery-2.2.4.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.ajaxchimp.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.nice-select.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/main.js"></script>


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
                                <a href="/"><span class="lnr lnr-home" style="font-size:40px; "> Home</span></a>
                              <a href="{{route ('aboutus')}}">  <span class="lnr lnr-license" style="font-size:20px; "> Aboutus  </span> </a>                       
                                     <a  href="{{ route('login') }}"><span class="lnr lnr-arrow-right" style="font-size:20px; "> Login</span></a>
                                   <a  href="{{ route('register') }}" > <span class="lnr lnr-users" style="font-size:20px;"> Signup</span></a>
                                                                       
                                </nav>
                                <div class="menu-bar"><span class="lnr lnr-menu"></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
                   

<section style="padding:190px; ">
  <main role="main" class="inner cover center">
	<center><h1 class="cover-heading" style="color:#6cbb23">EYL.</h1></center>
	<form action="/search" method="POST" role="search">
    	 {{ csrf_field() }}
        <div class="input-group ">
            <div class="input-group  form-3 pl-0 col-md-6 col-sm-6 col-lg-10">
				   <input class="form-control my-0 py-1  lime-border" type="text" placeholder=" Search for services" aria-label="Search" name="q">
					<div class="input-group-append">
						<span class="input-group-text lime lighten-2" id="basic-text1">
							<button type="submit" class="btn btn-default">
								<i class="fa fa-search text-grey" aria-hidden="true"></i>
							</button>
						</span>		
                    </div>
			</div>
		</div>		
    </form>
	<div class="row" style="padding-top:60px; ">
		<div class="col-lg-6 col-md-6 col-sm-6">
			<div  class="banner-content text-center">
				@if(isset($details))
						<p> The Search results for <b> {{ $query }} </b> are :</p>
						<div class="white-bg">
							<div class="container">
								<div class="section-top-border">
									<div class="row">
										@foreach($details as $provider)
												
											<div class="col-md-3">
												<img src="/storage/logo/{{$provider->logo}}" width="100" height="100" class="img-fluid" > 
											</div>
											<div class="col-md-9 mt-sm-20">
												<h4> {{ $provider->name}}</h4> 
												<p> {{ $provider->service}}</p>
												<a href="/providers/{{ $provider->id }}">more </a>
											</div>        
													
										@endforeach
									</div>
								</div>
							</div>
						</div> 
					   
				@endif        
			</div>
		</div>
		</div>
		<div class="row">
			<div class="">
				<div>
					
				</div>
			</div>
		</div>
  </main>
  
</body>
</html>

    
  
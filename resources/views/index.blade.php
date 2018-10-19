@extends('layouts.app')

@section('content')

	
		<!-- Start Banner Area -->
		<section class="banner-area relative">
			<div class="container">
				<div class="row fullscreen align-items-center justify-content-center">
					<div class="banner-left col-lg-6">
						<img class="d-flex mx-auto img-fluid" src="{{URL::asset('/img/gas.jpg')}}" alt="">
					</div>
					<div class="col-lg-6">
						<div class="story-content">
							<h6 class="text-uppercase">Edge Your Life</h6>
							<h1>Search For <span class="sp-1">a Service </span><br>
							Provider <span class="sp-2">around you.</span></h1>
							<a href="{{route('see')}}" class="genric-btn primary circle arrow">Search for Service<span class="lnr lnr-arrow-right"></span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Banner Area -->
		<!-- Start Video Area -->
		<section class="video-area pt-40 pb-40">
			<div class="overlay overlay-bg"></div>
			<div class="container">
				<div class="video-content">
					<a  class="play-btn"><img src="{{URL::asset('/img/cus.jpg')}}" alt="" height="300px" ></a>
					<div class="video-desc">
						<h3 class="h2 text-white text-uppercase">Edge your Life over stress</h3>
						<h4 class="text-white">We bring customers very close to the service they want. </h4>
					</div>
				</div>
			</div>
		</section>
		<!-- End Video Area -->
		<!-- Start about Area -->
		<section class="about-area pt-100 pb-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="story-content">
							<h2>Brief Information <br>
							About <span>EYL</span> Edge your life</h2>
							<p class="mt-30">Few would argue that, despite the advancements of feminism over the past three decades, women still face a double standard when it comes to their behavior. While men’s borderline-inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. <br> <br>
							While men’s borderline-inappropriate behavior is often laughed off as “boys will be boys,”
							</p>
							<a href="#" class="genric-btn primary-border circle arrow">View More<span class="lnr lnr-arrow-right"></span></a>
						</div>
					</div>
					<div class="col-lg-6">
						<img class="img-fluid d-flex mx-auto" src="{{URL::asset('/img/handshake.png')}}" alt="">
					</div>
				</div>
			</div>
		</section>
		<!-- End Team Force Area -->
		
		<!-- Start Feature Area -->
		<!-- Start faq Area -->
		<section class="faq-area pt-100 pb-100">
			<div class="container">
			<center><h2 class="text-uppercase">
								Number of  registered People.
							</h2></center>
				<div class="row">
				
					<div class="counter-left col-lg-3 col-md-3">
						<div class="single-facts">
							<h2 class="counter">5962</h2>
							<p>Registered Services</p>
						</div>
						<div class="single-facts">
							<h2 class="counter">2394</h2>
							<p>Registered Users</p>
						</div>
						
					</div>
					<div class="faq-content col-lg-9 col-md-9">

						<ul class="navbar-nav ml-auto">
                       
					   <li class="nav-item">
						   <div class="single-facts">
							   <h2 class="counter">5962</h2>
							   <p>Registered Services</p>
						   </div>
					   </li>
					   <li class="nav-item">
						   <div class="single-facts">
							   <h2 class="counter">2394</h2>
							   <p>Registered Users</p>
						   </div>  
					   </li>
			   </ul>
						
					</div>
					
				</div>
			</div>
		</section>
		<!-- Start faq Area -->
		
@endsection

    
  
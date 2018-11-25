@extends('layouts.app')

@section('content')



<section style="padding:190px; ">
  <main role="main" class="inner cover center">
	<center><h1 class="cover-heading" style="color:#6cbb23">EYL.</h1></center>
	<form action="/search" method="POST" role="search">
    	 {{ csrf_field() }}
        <div class="input-group ">
            <div class="input-group md-form form-sm form-3 pl-0">
				   <input class="form-control my-0 py-1 lime-border" type="text" placeholder=" Search for services" aria-label="Search" name="q">
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
  
</section>
  
@endsection

    
  
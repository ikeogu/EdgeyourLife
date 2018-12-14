@extends('layouts.app')

@section('content')

<section class="generic-banner elements-banner relative" style="padding-top:250px;">
			<div class="container">
				<div class="row  align-items-center justify-content-center">
					<div class="col-lg-9 col-sm-9 col-md-9">
						<div class="banner-content text-center">
							<h2>Search for service</h2>
							                           
                            <form action="/search" method="POST" role="search">
                                {{ csrf_field() }}
                                <div class="input-group ">
                                    <div class="input-group md-form form-sm form-3 pl-0">
                                        <input class="form-control my-1 py-3 lime-border" type="text" placeholder=" Search for services" aria-label="Search" name="q">
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
                        </div> 
                        <div  class="banner-content text-center">
                            @if(isset($details))
                                <p> The Search results for <b> {{ $query }} </b> are :</p>
                                <div class="white-bg">
                                    <div class="container">
                                        <div class="section-top-border">
                                            
                                            @foreach($details as $provider)
                                             <div class="row">
                                                    <div class="col-md-3">
                                                        <img src="/storage/logo/{{$provider->logo}}" width="100" height="100" class="img-fluid" > 
                                                    </div>
                                                    <div class="col-md-4 mt-sm-10">
                                                                
                                                            <h4> {{ $provider->name}}</h4>   
                                                        
                                                            <p> {{ $provider->service}}</p>
                                                            <a href="/providers/{{ $provider->id }}">more </a>
                                                    </div>        
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

</section>
        
@endsection


   
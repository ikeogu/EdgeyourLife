@extends('layouts.app')

@section('content')


<section class="generic-banner elements-banner relative" style="padding-top:300px;" onload="initialize()">
			
				<div class="row" >
					<div class="col-lg-6 col-md-6 col-sm-6">
                    <div id="mapholder">
    
                     </div>
                    {{$user = new POI($_GET["latitude"], $_GET["longitude"])}} 
                        {{ $user->getDistanceInMetersTo($poi)}}
						<form action="/dashboard" method="POST" role="search">
                                {{ csrf_field() }}
                                <div class="input-group ">
                                    <input type="text" class="form-control col-md-6" name="q"
                                        placeholder="Enter Current Location and search Nearby Service"  id="searcher" > <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                        </form>
                    </div>
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
                                </div>     
                            @endif        
                        </div>
					
				    </div>
			    </div>

</section>
@endsection
        

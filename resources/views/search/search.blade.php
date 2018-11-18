@extends('layouts.app')

@section('content')

<section class="generic-banner elements-banner relative" style="padding-top:300px;">
			<div class="container">
				<div class="row  align-items-center justify-content-center">
					<div class="col-lg-12">
						<div class="banner-content text-center">
							<h2>Search for service</h2>
							                           
                            <form action="/search" method="POST" role="search">
                                {{ csrf_field() }}
                                <div class="input-group ">
                                    <input type="text" class="form-control col-lg-12" name="q"
                                        placeholder="Search for services"  id="searcher" > <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                        <i class="fas fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div> 
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


   
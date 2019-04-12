@extends('layouts.app')

@section('content')

<section class="feature-area pt-100 pb-100  relative" >
  <h4>{{App\Provider::count()}} Registered Services</h4>
  <div class="white-bg">
		    <div class="container">
		      <div class="section-top-border">
		            
		            <div class="row">
                  @foreach($providers as $provider)
                  
                        <div class="col-md-3">
                            <img src="/storage/logo/{{$provider->logo}}" width="100" height="100" class="img-fluid" > 
                        </div>
                        <div class="col-md-9 mt-sm-20">
                                    
                                <h4> {{ $provider->p_name}}</h4>   
                              
                                <p> {{ $provider->service}}</p>
                                <a href="/providers/{{ $provider->id }}">more </a>
                        </div>        
                       
                  @endforeach
                </div>
            </div>
        </div>
    </div>  
</section>
         
@endsection
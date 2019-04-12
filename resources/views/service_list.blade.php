@extends('layouts.dashboard')

@section('others')
<section class="pt-100 pb-100  relative" style="padding-top: 60px;">
  <h4 style="color:white;">Services You Registered</h4>
    <div class="overlay overlay-bg"></div>
        @foreach($providers as $provider)
            <div class="container">
                <div class="row">
                
                        <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
                            <div class="single-feature">
                                <div class="icon">
                                    <span class=""> <img src=" storage/logo/{{$provider->logo}}" width="350" height="300"           class="img-responsive img-rounded">
                                    </span>
                                </div>
                                <div class="desc">
                                    <div>          
                                        <h4> Name : {{ $provider->p_name}}</h4>   
                                    </div>
                                    <div class='text'>
                                        <h4>Service: {{ $provider->service}}</h4>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col col-lg-6">                 
                                    <p> <a href="providers/{{ $provider->id }}/edit" class="genric-btn success circle"            role="button">view</a>
                                    </p> 
                                    </div> 
                                    <div class="col col-lg-6">  
                                        <p> <a href="#" class="genric-btn danger circle" role="button"
                                                onClick=" 
                                                var result= confirm('Are you sure you want to delete this Service?');
                                                if ( result ){
                                                            event.preventDefault();
                                                            document.getElementById('delete-form').submit;
                                                }
                                                    "   >
                                                Delete
                                            </a>
                                            <form id="delete-form" action="{{ route('providers.destroy',[$provider->id]) }}"
                                                method="POST" style="display: none;">
                                                <input type="hidden" value="delete" name="_method">
                                                {{ csrf_field() }}
                                            </form>
                                        </p> 
                                    <div>
                                </div>                                                   
                            </div>
                        </div>
                    
                </div>
            </div>
        @endforeach    
    </div>
</section>
@endsection
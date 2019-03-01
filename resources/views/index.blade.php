@extends('layouts.app')

@section('content')

        <section class="generic-banner elements-banner relative" style="padding-top:250px; padding-bottom:250px;">
			<div class="container">
				
                <div class="row  align-items-left justify-content-left">
					<div class="col-lg-9 col-sm-9 col-md-9">
						<div class="banner-content text-center">
							
							                           
                            <form action="/searching_services..." method="POST" >
                                {{ csrf_field() }}
                                
                                <div class="input-group ">
                                    <div class="input-group md-form form-sm form-3 pl-0">
                                        <input class="form-control my-0 py-1 lime-border" type="text" placeholder=" Search for services" aria-label="Search" name="q" id="search">
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
                        
                    
                        
                            @if(isset($details))
                                    <p>  results for <b> {{ $query }} </b></p>
                                    <div class="tab">
                                        <button class="tablinks" onclick="openCity(event, 'all')">All</button>
                                        <button class="tablinks" onclick="openCity(event, 'image')">Image</button>
                                        <button class="tablinks" onclick="openCity(event, 'contact')">contact</button>
                                    </div>

                                    <div id="all" class="tabcontent">
                                        <h3>All</h3>
                                        <hr>
                                        <span></span>
                                        <span></span>
                                        @foreach($details as $provider)
                                        <h3><a href='/providers/{{$provider->id}}'>{{$provider->name}} </a></h3>
                                        <a href='/providers/{{$provider->id}}'>view more</a>
                                        <h5>{{$provider->description}}</h5>
                                        @endforeach
                                    
                                    </div>

                                    <div id="image" class="tabcontent">
                                        <h3>Logo</h3>
                                        <hr>
                                        <span></span>
                                        <span></span>
                                        <div class="row">
                                        @foreach($details as $provider)
                                        <div class="col-lg-4 col-sm-3 col-md-3">
                                         <img src='/storage/logo/{{$provider->logo}}' class='img-fluid img-responsive '> 
                                        </div>
                                        @endforeach
                                        </div>
                                    </div>

                                    <div id="contact" class="tabcontent">
                                        <h3>Contact </h3>
                                        <hr>
                                        <span></span>
                                        <span></span>
                                        @foreach($details as $provider)
                                        <div>
                                        <h3>{{$provider->address}}</h3>
                                        <h4>{{$provider->email}}.</h4>
                                        <h4>{{$provider->phone}}</h4>
                                      </div>
                                      @endforeach
                                    </div>
                                
                                    <script>
                                    function openCity(evt, cityName) {
                                    var i, tabcontent, tablinks;
                                    tabcontent = document.getElementsByClassName("tabcontent");
                                    for (i = 1; i < tabcontent.length; i++) {
                                        tabcontent[i].style.display = "none";
                                    }
                                    tablinks = document.getElementsByClassName("tablinks");
                                    for (i = 0; i < tablinks.length; i++) {
                                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                                    }
                                    document.getElementById(cityName).style.display = "block";
                                    evt.currentTarget.className += " active";
                                    }
                                    </script>
                                @endif
                           
                    </div>
                </div>
			</div>

        </section>
  
@endsection

    
  
@extends('layouts.app')

@section('content')

        <section class="generic-banner elements-banner relative" style="padding-top:250px; padding-bottom:250px;">
			<div class="container">
				
                <div class="row justify-content-center">
					<div class="col-lg-9 col-sm-9 col-md-9">
						<div class="banner-content text-center">
							
							                           
                        <form class="form-inline md-form form-sm"action="{{route('search')}}" method="get">
                        {{ csrf_field() }}
                            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search" name="q">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </form>
                        </div> 
                        
                    
                        
                        @if(isset($details))        
                                    
                                    <div class="tab">
                                        <button class="tablinks" onclick="openCity(event, 'all')" id="defaultOpen"  >All</button>
                                        <button class="tablinks" onclick="openCity(event, 'image')" >Image</button>
                                        <button class="tablinks" onclick="openCity(event, 'contact')" >contact</button>
                                    </div>

                                    <div id="all" class="tabcontent " style="display:none">
                                        
                                        <hr>
                                        <span></span>
                                        <span></span>
                                        @foreach($details as $provider)
                                        <h3><a href='/providers/{{$provider->id}}'>{{$provider->name}} </a></h3>
                                        <a href='/providers/{{$provider->id}}'>view more</a>
                                        <h5>{{$provider->description}}</h5>
                                        @endforeach
                                    
                                    </div>

                                    <div id="image" class="tabcontent " style="display:none">
                                        
                                        <hr>
                                        <span></span>
                                        <span></span>
                                        <div class="row">
                                        @foreach($providers as $provider)
                                        <div class="col-lg-4 col-sm-3 col-md-3">
                                         <img src='/storage/logo/{{$provider->logo}}' class='img-fluid img-responsive '> 
                                        </div>
                                        @endforeach
                                        </div>
                                    </div>

                                    <div id="contact" class="tabcontent " style="display:none">
                                       
                                        <hr>
                                        <span></span>
                                        <span></span>
                                        @foreach($providers as $provider)
                                        <div>
                                        <h3>{{$provider->address}}</h3>
                                        <h4>{{$provider->email}}.</h4>
                                        <h4>{{$provider->phone}}</h4>
                                      </div>
                                      @endforeach
                                    </div>
                                
                                    <script>
                                    document.getElementById("defaultOpen").click();

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
                                    <script type="text/javascript">
                                        var path = "{{ route('autocomplete') }}";
                                        $('input.typeahead').typeahead({
                                            source:  function (query, process) {
                                            return $.get(path, { query: query }, function (data) {
                                                    return process(data);
                                                });
                                            }
                                        });
                                    </script>
                        @endif
                           
                    </div>
                </div>
			</div>

        </section>
  
@endsection

    
  
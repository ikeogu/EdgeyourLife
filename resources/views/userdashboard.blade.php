@extends('layouts.app')

@section('content')
<script type="text/javascript">
 function geoFindMe() {
  var output = document.getElementById("result");

  if (!navigator.geolocation){
    output.innerHTML = "<p>Geolocation is not supported by your browser</p>";
    return;
  }

  function success(position) {
    var latitude  = position.coords.latitude;
    var longitude = position.coords.longitude;

    output.innerHTML = '<p>Latitude is ' + latitude + '° <br>Longitude is ' + longitude + '°</p>';

    var img = new Image();
    img.src = "https://maps.googleapis.com/maps/api/staticmap?center=" + latitude + "," + longitude + "&zoom=13&size=300x300&sensor=false";

    output.appendChild(img);
  }

  function error() {
    output.innerHTML = "Unable to retrieve your location";
  }

  output.innerHTML = "<p>Locating…</p>";

  navigator.geolocation.getCurrentPosition(success, error);
}

</script>
<section class="generic-banner elements-banner relative" style="padding-top:300px;">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6">
                        <div id="result" ></div>
                        <p><button onclick="geoFindMe()">Show my location</button></p>
						<form action="/search" method="POST" role="search">
                                {{ csrf_field() }}
                                <div class="input-group ">
                                    <input type="text" class="form-control col-md-6" name="q"
                                        placeholder="Enter Current Location and search Nearby Service"  id="searcher" > <span class="input-group-btn">
                                        <button type="submit" class="btn btn-default">
                                            <span class="glyphicon glyphicon-search"></span>
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
        

@extends('layouts.app')

@section('content')

<div class="container shape-container d-flex align-items-center ">
          <div class="col px-0" style="padding-top:300px;">
        <div class="card card-profile shadow mt--300">
          <div class="px-4">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="/storage/logo/{{$provider->logo}}" class="rounded-circle" height="75%" width="50%">
                  </a>
                </div>
              </div>
              <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                <div class="card-profile-actions py-4 mt-lg-0">
                  <a href="#" class="btn btn-sm btn-info mr-4">{{ $provider->name }}</a>
                  <a href="#" class="btn btn-sm btn-default float-right">{{ $provider->phone}}</a>
                </div>
              </div>
              <div class="col-lg-4 order-lg-1">
                <div class="card-profile-stats d-flex justify-content-center">
                  <div>
                    <span class="heading">{{ $provider->city }}</span>
                    <span class="description">City</span>
                  </div>
                  <div>
                    <span class="heading">{{ $provider->state }}</span>
                    <span class="description">State</span>
                  </div>
                  
                </div>
              </div>
            </div>
            <div class="text-center mt-5">
              <h3>{{ $provider->service}}
                <span class="font-weight-light"></span>
              </h3>
              <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>{{ $provider->address}}</div>
              <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i><h4>Special Tools :{{ $provider->special_tool}}</h4></div>
              <div><i class="ni education_hat mr-2"></i>
			  <h4>Qualification :{{ $provider->certification}}</h4></div>
            </div>
            <div class="mt-5 py-5 border-top text-center">
              <div class="row justify-content-center">
                <div class="col-lg-9">
				<h4>{{ $provider->email}}</h4>
                  <h4> {{ $provider->description}}</h4>
                 <h4>₦{{ $provider->minimum_price}}</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	</div>
	</div>
@endsection

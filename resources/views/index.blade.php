@extends('layouts.app')

@section('content')



<div class="position-relative">
     
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="align-items-center justify-content-center">
                <div class="row">
                    <div class="col col-lg-12 col-md-12 text-center">   
                        <img src="{{asset('/img/dg.png')}}" height="250" width="300">             
                        <form action="{{route('search')}}" method="get">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-2 col-lg-2 col-sm-2"></div>
                                <div class="col-md-9 col-lg-9 col-sm-9">
                                    <div class="form-group">
                                        <div class="input-group mb-5">
                                            <input class="form-control form-rounded" placeholder=" Search for service" type="text" name="q" id ="q">
                                            <div class="input-group-append"> 
                                                <span class="input-text">
                                                    <button type="submit" class="btn btn-success btn-md-2">
                                                        <i class="fa fa-search" ></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>   
                                    </div>
                                </div>
                            </div>    
                        </form>
                    </div>
                    @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">
                        {{ Session::get('message') }}</p>
                    @endif
                </div>

                <div class="row row-grid">
                    @foreach($nearby as $provider)
                    <div class="col col-lg-4">
                        <div class="card card-lift--hover shadow border-0">
                            <div class="card-body ">
                                <div class="icon icon-shape icon-shape-success rounded-circle mb-4">
                                
                                    <img src='/storage/logo/{{$provider->logo}}' class='img-fluid img-responsive '> 
                                                    
                                </div>
                                <h6 class="text-success text-uppercase">{{$provider->name}}</h6>
                                
                                <div>
                                    <span class="badge badge-pill ">{{$provider->city}}</span>
                                    <span class="badge badge-pill ">{{str_limit($provider->service, $limit = 20, $end = '...')}}</span>
                                    <span class="badge badge-pill ">₦ {{$provider->minimum_price}}</span>
                                </div>
                                <a href="/providers/{{$provider->id}}" class="btn btn-success mt-4">View</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            </div>
          </div>
        </div>
</div>
@endsection

   
@extends('layouts.app')

@section('content')
<div class="position-relative">
     
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="align-items-center justify-content-center">
            <div class="row">
                    <div class="col col-lg-12 col-md-12 text-center">   
                        <img src="{{asset('/img/dg.png')}}" height="130" width="450">             
                        <form action="{{route('search')}}" method="get">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <div class="form-group">
                                        <div class="input-group mb-5">
                                            <div class="input-group-prepend"> 
                                                <span class="input-text">
                                                    <button type="submit" class="btn btn-success btn-md-2">
                                                        <i class="fa fa-search" ></i>
                                                    </button>
                                                </span>
                                            </div>
                                            <input class="form-control" placeholder=" Search for service" type="text" name="q">
                                        </div>
                                    </div>
                                </div>
                            </div>    
                        </form>
                    </div>
                </div>
            </div>
          </div>
        </div>
        
    </div>
            
    <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                <li class="nav-item"> 
                    <a href="{{route('feedbacks.create')}}"><span> <i class="fa fa-comment" ></i style="font-size:20px;"> feedback</span>  </a>
                </li>
                
            </ul>
@endsection

    
  
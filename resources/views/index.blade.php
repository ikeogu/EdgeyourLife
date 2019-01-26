@extends('layouts.app')

@section('content')
  

<section class="generic-banner elements-banner relative" style="padding-top:250px; padding-bottom:250px;">
			<div class="container">
				<div class="row  align-items-center justify-content-center">
					<div class="col-lg-9">
						<div class="banner-content text-center">
						<center><h1 class="cover-heading" style="color:#6cbb23">EYL.</h1></center>    
							                           
                            <form action="/search" method="POST" role="search">
                                {{ csrf_field() }}
                                
                                <div class="input-group ">
                                    <div class="input-group md-form form-sm form-3 pl-0">
                                        <input class="form-control my-0 py-1 lime-border" type="text" placeholder=" Search for services" aria-label="Search" name="q">
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
                        
			    </div>

</section>
  
@endsection

    
  
@extends('layouts.app')

@section('content')



<section style="padding:190px; ">
  <main role="main" class="inner cover center">
	<center><h1 class="cover-heading" style="color:#6cbb23">EYL.</h1></center>
	<form action="/search" method="POST" role="search">
                                {{ csrf_field() }}
                                <div class="input-group ">
                                 		<div class="input-group md-form form-sm form-3 pl-0">
											<input class="form-control my-0 py-1 lime-border" type="text" placeholder=" Search for services" aria-label="Search" name="q">
											<div class="input-group-append">
											<span class="input-group-text lime lighten-2" id="basic-text1">
												<button type="submit" class="btn btn-default">
													<i class="fa fa-search text-grey"
														aria-hidden="true"></i>
												</button>
											</span>		
                                       </div>
									</div>
                            </form>
	
  </main>
  
</section>
  
@endsection

    
  
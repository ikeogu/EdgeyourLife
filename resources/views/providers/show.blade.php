@extends('layouts.app')

@section('content')

          
 <section class="feature-area pt-100 pb-100  relative" style="padding-top: 40px;">
          


          <div class="section-top-border">
                
                <div class="row  align-items-center justify-content-center">
				<h3 class="mb-90  ">Details</h3>
				<span></span>
				<span></span>
                  <div class="col-xs-6 col-sm-3 placeholder " >
                    <img src="/storage/logo/{{$provider->logo}}" width="150" height="150" class="img-responsive rounded" style="margin-left:50px;">
                  </div>
                </div>
		            <div class="progress-table-wrap">
		                <div class="progress-table">
		                    <div class="table-head">
		                        <div class="serial">#</div>
		                        <div class="country">Attributes</div>
		                        <div class="visit">Description</div>
		                    </div>
		                    <div class="table-row">
                        <div class="serial">01</div>
		                        <div class="visit">Providers Name</div>
		                        <div class="percentage">
		                            <div class="progress">
                                {{ $provider->name }}
		                            </div>
		                        </div>
		                    </div>
		                    <div class="table-row">
                        <div class="serial">02</div>
		                        <div class="visit">Description </div>
		                        <div class="percentage">
		                            <div class="progress">
                                {{ $provider->description}}
		                            </div>
		                        </div>
		                    </div>
		                    <div class="table-row">
                        <div class="serial">03</div>
		                        <div class="visit">Location</div>
		                        <div class="percentage">
		                            <div class="progress">
                                {{ $provider->address }}
		                            </div>
		                        </div>
		                    </div>
		                    <div class="table-row">
                        <div class="serial">04</div>
		                        <div class="visit">City</div>
		                        <div class="percentage">
		                            <div class="progress">
                                {{$provider->city}}  
		                            </div>
		                        </div>
		                    </div>
		                    <div class="table-row">
		                        <div class="serial">05</div>
		                        
		                        <div class="visit">State</div>
		                        <div class="percentage">
		                            <div class="progress">
		                             {{$provider->state}}
		                            </div>
		                        </div>
		                    </div>
		                    <div class="table-row">
		                        <div class="serial">06</div>
		                        
		                        <div class="visit">Phone Number</div>
		                        <div class="percentage">
		                            <div class="progress">
                                {{ $provider->phone}}
		                            </div>
		                        </div>
		                    </div>
		                    <div class="table-row">
		                        <div class="serial">07</div>
		                        
		                        <div class="visit">Email Address</div>
		                        <div class="percentage">
		                            <div class="progress">
                                {{ $provider->email}}
		                            </div>
		                        </div>
		                    </div>
		                    <div class="table-row">
		                        <div class="serial">08</div>                      
  
		                        <div class="visit"> Qualification</div>
		                        <div class="percentage">
		                            <div class="progress">
                                {{ $provider->qualification}}
		                            </div>
		                        </div>
                        </div>
                        <div class="table-row">
		                        <div class="serial">09</div>                      
  
		                        <div class="visit"> Special Tools for Services</div>
		                        <div class="percentage">
		                            <div class="progress">
                                {{ $provider->special_tool}}
		                            </div>
		                        </div>
                        </div>
                        <div class="table-row">
		                        <div class="serial">10</div>                      
  
		                        <div class="visit">minimum Price</div>
		                        <div class="percentage">
		                            <div class="progress">
                                {{ $provider->minimum_price}}
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
	</section>
@endsection
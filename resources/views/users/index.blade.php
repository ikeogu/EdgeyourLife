@extends('layouts.dashboard')

@section('others')

<section class="feature-area pt-100 pb-100  relative" style="padding-top: 200px;">
<div class="section-top-border">
                <h3 class="mb-30">Registered users</h3>
                
               
            <div class="row placeholders">
		            <div class="progress-table-wrap">
		                <div class="progress-table">
		                    <div class="table-head">
		                        <div class="serial">#</div>
		                        <div class="country">Name</div>
		                        <div class="visit">Email</div>
                               
                                <div class="visit">Phone</div>
		                    </div>
		                    <div class="table-row">
                            
                           
                             @foreach($users  as $user ) 
                              
                                <div class="serial">*</div>
                                        <div class="visit"> {{ $user->name }}</div>
                                        <div class="percentage">
                                        {{ $user->email }}
                                        </div>
                                        
                                        <div class="visit">{{ $user->phone}}</div>
                                </div>
                               
                                @endforeach
                               
		             </div>   		           
           
      
  </div>
</section>
@endsection
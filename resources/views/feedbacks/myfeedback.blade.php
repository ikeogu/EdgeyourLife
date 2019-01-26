@extends('layouts.dashboard')

@section('others')

 <section class="feature-area pt-100 pb-100  relative" >
        <div class="section-top-border">
            <h3 class="mb-30 card-header">Feedbacks from users</h3>
                <div class="row placeholders">
		            <div class="progress-table-wrap">
		                <div class="progress-table">
		                    <div class="table-head">
		                        <div class="serial">#</div>
		                        <div class="visit">Name</div>
		                        <div class="percentage">Email</div>
                               
                                <div class="visit">Name of Service</div>
                                
                                <div class="country">Message</div>
		                    </div>
		                    <div class="table-row">
                            
                           
                                @foreach($feedback  as $feedback ) 
                              
                                    <div class="serial">{{ $feedback->id}}</div>
                                        <div class="visit"> {{ $feedback->name }}</div>
                                        <div class="percentage">
                                            {{ $feedback->email }}
                                        </div>
                                            
                                        <div class="visit">{{ $feedback->name_of_service}}</div>
                                        <div class="country">{{ $feedback->feed_back}}</div>
                                    </div>
                                
                                @endforeach
		                    </div>
                        </div>
                    </div>
                </div>
        </div>
@endsection
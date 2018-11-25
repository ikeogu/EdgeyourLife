@extends('layouts.dashboard')

@section('others')
    <section class="feature-area pt-100 pb-100  relative" style="padding-top: 200px;">
        <div class="section-top-border">
            <h3 class="mb-30">Feedbacks from users</h3>
                <div class="row placeholders">
		            <div class="progress-table-wrap">
		                <div class="progress-table">
		                    <div class="table-head">
		                        <div class="serial">#</div>
		                        <div class="country">Name</div>
		                        <div class="visit">Email</div>
                               
                                <div class="visit">Name of Service</div>
                                
                                <div class="visit">Feedback</div>
		                    </div>
		                    <div class="table-row">
                            
                           
                                @foreach($feedbacks  as $feedback ) 
                              
                                    <div class="serial">*</div>
                                        <div class="visit"> {{ $feedback->name }}</div>
                                        <div class="percentage">
                                            {{ $feedback->email }}
                                        </div>
                                            
                                        <div class="visit">{{ $feedback->name_of_service}}</div>
                                        <div class="visit">{{ $feedback->feed_back}}</div>
                                    </div>
                                
                                @endforeach
		                    </div>
                        </div>
                    </div>
                </div>
        </div>

    </section>
@endsection
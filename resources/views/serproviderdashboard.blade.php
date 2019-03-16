@extends('layouts.dashboard')

@section('others')
<div class="generic-banner elements-banner relative" >
    <div class="container-fluid" styles="paddding-top:20px;">
        <div class="well">
            <h4>Analytic Overview</h4>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="well">
                        <div class="row">
                            
                        </div>
                    </div>
                </div>
            
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="well">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <h5> Services offered </h5>
                                <h3> <p class="joined-text">
                                {{ App\User::find(auth()->user()->id)->providers()->count()}}
                                 </p>

                                
                            </h3>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
                        
                                <div class="card-footer ">
                                                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endsection
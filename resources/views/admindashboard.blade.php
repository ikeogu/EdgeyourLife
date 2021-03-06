@extends('layouts.dashboard')

@section('others')
<div class="content">
    <div class="well">
        <h4>Analytic Overview</h4>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="well">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <h5>Total Users</h5>
                                <h4>{{ App\User::count() }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="well">
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <h5>No.of Services </h5>
                                <h3>{{ App\Provider::count() }}</h3>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
                       
                </div>
            </div>
            @endsection
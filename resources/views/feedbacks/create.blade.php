@extends('layouts.app')

@section('content')

<section style="padding-top:100px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                              <h4 class="title">{{ __('Kindly give us a feedback. ') }}</h4>
                        </div>
                        <div class="content">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                            @endif
                            @if (\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{ \Session::get('success') }}</p>
                            </div><br />
                            @endif
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <h3 class="mb-30">FeedBack on Service provided</h3>
                            <form method="POST" action="{{ route('feedbacks.store') }}" enctype="multipart/form-data">
                            @csrf
                                <div class="mt-10">
                                    <input type="text" name="name" placeholder="Full Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required="" class="single-input" value="{{ old('name') }}">
                                   
                                   
                                </div>
                                <div class="mt-10">
                                    <input type="text" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="" class="single-input" value="{{ old('email') }}">

                                     @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                </div>
                               
                                <div class="input-group-icon mt-10">
                                <p> Choose the name of Service provider</p>
                                {{ Form::select('provider_id', $services, ['class' => 'form-control']) }}
                                </div> 

                                
                                <div class="mt-10">
                                   <textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Message'" required="" name="feed_back"></textarea>
                                   @if ($errors->has('feed_back'))
                                            <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('feed_back') }}</strong>
                                            </span>
                                        @endif
                                   
                                </div>
                                <div class="form-group row mb-0" style="padding-top:30px;">
                                <button class="genric-btn primary circle pull-right" type="submit"> {{ __('Send') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection                            
@extends('layouts.app')

@section('content')
    @if(Auth::user())
    <section class="section section-lg pt-lg-0 section-contact-us">
      <div class="container">
        <div class="row justify-content-center mt--300">
          <div class="col-lg-8">
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
            <div class="card bg-gradient-secondary shadow">
              <div class="card-body p-lg-5">
                <h4 class="mb-1">Kindly give us a feedback</h4>
                <p class="mt-0">Your satisfaction is very important to us.</p>
                <h3 class="mb-30">FeedBack on Service provided to You</h3>
                <form method="POST" action="{{ route('feedbacks.store') }}" enctype="multipart/form-data">
                            @csrf
                    <div class="form-group mt-5">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-user-run"></i></span>
                            </div>
                            <input type="text" name="name" placeholder="Full Name"  class="form-control" class="single-input" value="{{ Auth::user()->name }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                            </div>
                            <input type="text" name="email" placeholder="Email"  class="form-control"  value="{{ Auth::user()->email}}">

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-control" >
                                <h4> Choose the name of Service provider</h4>
                                {{ Form::select('provider_id', $services, ['class' => 'form-control']) }}
                        </div>
                    </div> 
                        <div class="form-group mb-4">
                        <textarea class="form-control form-control-alternative" name="feed_back" rows="4" cols="80" placeholder="Type a message..."></textarea>
                        </div>
                       
                        <button type="button" class="btn btn-default btn-round btn-block btn-lg">Send Message</button>
                        </div>
                    </div>
                </form>    
            </div>
          </div>
        </div>
      </div>
   
    @else
    <div  style="padding-top:200px; padding-bottom:200px;">
        <center>
            <h3>Sorry! you must login first</h3> 
            <strong><a href="{{route('login')}}">Login Here</a></strong>
        </center>
     </div>

     @endif
</section>    
    @endsection                            
@extends('layouts.dashboard')

@section('others')
    <div class="content"style="padding-top:35px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="header">
                              <h4 class="title">{{ __('Register As a Service Provider ') }}</h4>
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
                        <div class="col-lg-8 col-md-8" style="padding-top:40px;">
                            <div class="card-header">
                                 <h3 class="mb-30">Please Tell us More about your service</h3>
                            </div>
                            <form  method="POST" action="{{route('providers.store')}}" enctype="multipart/form-data">
                            @csrf
                                <div class="mt-10">
                                    <input id="p_name" type="text"  placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Name'"  class="form-control{{ $errors->has('p_name') ? ' is-invalid' : '' }}" name="p_name" value="{{ old('p_name') }}" required autofocus>
                                         @if ($errors->has('p_name'))
                                            <span class="invalid-feedback" role="alert">
                                               <strong>{{ $errors->first('p_name') }}</strong>
                                            </span>
                                        @endif
                                </div>
                                <div class="mt-10">
                                    <input id="logo" type="file" class="form-control{{ $errors->has('logo') ? ' is-invalid' : '' }}" name="logo" value="{{ old('logo') }}" required autofocus placeholder="Picture/ Logo " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Picture/ Logo '">
                                        @if ($errors->has('logo'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('logo') }}</strong>
                                            </span>
                                        @endif
                                </div>
                                <div class="mt-10">
                                    <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ Auth::user()->phone }}" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" required autofocus>
                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                </div>
                                <div class="mt-10">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ Auth::user()->email }}" required  placeholder="Email Address" onfocus="this.placeholder = 'Email Address'" onblur="this.placeholder = 'Phone'">
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                
                                
                                <div class="input-group-icon mt-10">
                                    
                                    <div>
                                    <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'">
                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="input-group-icon mt-10">
                                    
                                    <div>
                                        <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus placeholder="City" onfocus="this.placeholder = ''" onblur="this.placeholder = 'City'">
                                        @if ($errors->has('city'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('city') }}</strong>
                                            </span>
                                        @endif  
                                    </div>						
                                </div>
                                <div class="input-group-icon mt-10">
                                
                                    <div>
                                        <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ old('state') }}" required autofocus placeholder="State of operation">
                                        @if ($errors->has('state'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('state') }}</strong>
                                            </span>
                                        @endif
                                                                    
                                    </div>
                                </div>

                                 <div class="mt-10">
                                    <input id="service" type="text" class="form-control{{ $errors->has('service') ? ' is-invalid' : '' }}" name="service" value="{{ old('service') }}" required placeholder="What is your specialty" >

                                        @if ($errors->has('service'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('service') }}</strong>
                                            </span>
                                        @endif
                                </div>
                           
                                <div class="mt-10">
                                    <input id="certification" type="text" class="form-control{{ $errors->has('certification') ? ' is-invalid' : '' }}" name="certification" value="{{ old('certification') }}" required autofocus  placeholder="Certification" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cerification'" >
                                    @if ($errors->has('certification'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('certification') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="mt-10">
                                    <input id="special_tool" type="text" class="form-control{{ $errors->has('special_tool') ? ' is-invalid' : '' }}" placeholder="Special Tool" onfocus="this.placeholder = ''" onblur="this.placeholder = 'special Tool'" name="special_tool" value="{{ old('special_tool') }}" required autofocus>
                                        @if ($errors->has('special_tool'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('special_tool') }}</strong>
                                            </span>
                                        @endif  
                                                
                                </div>
                                
                                <div class="mt-10">
                                    <input id="price" type="text" class="form-control{{ $errors->has('minimum_price') ? ' is-invalid' : '' }}" placeholder="minimum price" onfocus="this.placeholder = ''" onblur="this.placeholder = 'minimum_price'" name="minimum_price" value="{{ old('minimum_price') }}" required autofocus>
                                        @if ($errors->has('minimum_price'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('minimum_price') }}</strong>
                                            </span>
                                        @endif  
                                                
                                </div>
                                
                                
                               
                                <div class="mt-10">
                                                            
                                    <textarea id="description" type="text" class="single-textarea form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" placeholder="Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" value="{{ old('description') }}" required></textarea>
                                                            @if ($errors->has('description'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('description') }}</strong>
                                                                </span>
                                                            @endif

                                </div>
                                <div class="form-group row mb-0" style="padding-top:30px;">
                                    <center>
                                <button class="genric-btn success circle " type="submit"> {{ __('Register') }}</button>
                                </center>
                                </div>							
                                                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>    

                        @endsection

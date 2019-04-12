@extends('layouts.dashboard')

@section('others')
<div class="container" style="padding-top:60px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Profile ') }}</div>

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
   
<div class="col-lg-8 col-md-8">
    <h3 class="mb-30">Update Details</h3>
    <form  method="POST" action="{{ route('providers.update', [$provider->id]) }}" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="put">
    
        <div class="mt-10">
            <input id="logo" type="file" class="form-control{{ $errors->has('logo') ? ' is-invalid' : '' }}" name="logo" value="{{ $provider->logo }}" height="150" width="150">
                @if ($errors->has('logo'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('logo') }}</strong>
                    </span>
                @endif
        </div>
	    <div class="mt-10">
           
            <input id="p_name" type="text"    class="form-control" name="p_name" value="{{ $provider->p_name}}" required autofocus>

                                @if ($errors->has('p_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('p_name') }}</strong>
                                    </span>
                                @endif
        </div>
	    
        <div class="mt-10">
            <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ $provider->phone }}">
                @if ($errors->has('phone'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </span>
                @endif
		</div>
	    <div class="mt-10">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $provider->email }}" >
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
		
        
		<div class="input-group-icon mt-10">
            
            <div>
            <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ $provider->address }}" >
            @if ($errors->has('address'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
		</div>
		<div class="input-group-icon mt-10">
            
            <div>
                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ $provider->city }}">
                @if ($errors->has('city'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('city') }}</strong>
                    </span>
                @endif  
            </div>						
		</div>
		<div class="input-group-icon mt-10">
         
            <div>
                <input id="state" type="text" class="form-control{{ $errors->has('state') ? ' is-invalid' : '' }}" name="state" value="{{ $provider->state }}" >
                @if ($errors->has('state'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('state') }}</strong>
                    </span>
                @endif
											
		    </div>
        </div>
        <div class="mt-10">
            <input id="certification" type="text" class="form-control{{ $errors->has('certification') ? ' is-invalid' : '' }}" name="certification" value="{{ $provider->certification }}" >
            @if ($errors->has('certification'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('certification') }}</strong>
                </span>
            @endif
	    </div>
		<div class="mt-10">
            <input id="special_tool" type="text" class="form-control{{ $errors->has('special_tool') ? ' is-invalid' : '' }}"  name="special_tool" value="{{ $provider->special_tool }}" >
                @if ($errors->has('special_tool'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('special_tool') }}</strong>
                    </span>
                @endif  
                         
        </div>
        
		
        <div class="mt-10">
        <input id="service" type="text" class="form-control{{ $errors->has('service') ? ' is-invalid' : '' }}" name="service" value="{{ $provider->service }}" >

            @if ($errors->has('service'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('service') }}</strong>
                </span>
            @endif
        </div>
        <div class="mt-10">
                                                            
                                    <textarea id="description" type="text" class="single-textarea form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" placeholder="Description" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Description'" value="{{ $provider->description }}" required></textarea>
                                                            @if ($errors->has('description'))
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $errors->first('description') }}</strong>
                                                                </span>
                                                            @endif

                                </div>
        
		<div class="form-group row mb-0">
        <button class="genric-btn primary circle" type="submit"> {{ __('Update') }}</button>
        </div>							
									
	</form>
</div>
@endsection

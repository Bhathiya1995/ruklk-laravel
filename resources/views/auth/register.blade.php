@extends('layouts.app')
@section('navbar')
@include('layouts.header')
@endsection

@section('content')
<div class="row">
    <div class="col-md-9">
    <div class="view" style="background-image: url('{{asset("images/backcover.jpg")}}');  background-repeat: no-repeat; background-size: cover; background-position: center center; height:100% ">
     
      <div class="mask rgba-black-light d-flex">
      </div>
    </div>
</div>
    <div class="col-md-3">

    <div class=" justify-content-center" style="padding-top: 50px; ">
        
                <div class=" mx-1">
                    <div class="text-center">
                        <h3 class="dark-grey-text mb-0 pt-md-4 pb-2"><strong>Register</strong></h3>
                    </div>
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                    <div class="md-form">
                                            <label for="name">{{ __('First Name') }}</label>
                                            <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>
                                                @if ($errors->has('firstname'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('firstname') }}</strong>
                                                    </span>
                                                @endif
                                            
                                        </div>
                            </div>
                            <div class="col-md-6">
                                    <div class="md-form">
                                            <label for="secondname" >{{ __('Second Name') }}</label>
                                                <input id="secondname" type="text" class="form-control{{ $errors->has('secondname') ? ' is-invalid' : '' }}" name="secondname" value="{{ old('secondname') }}" required autofocus>
                                                @if ($errors->has('secondname'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('secondname') }}</strong>
                                                    </span>
                                                @endif                           
                                        </div>  
                            </div>
                        </div>
                        <div class="md-form">
                                <select id="type" type="text" class="mdb-select md-form form-control{{ $errors->has('type') ? ' is-invalid' : '' }}" name="type" value="{{ old('type') }}" required autofocus>
                                    <option value="buyer">Buyer</option>
                                    <option value="seller">Seller</option>
                                    <option value="volunteer">Volunteer</option>
                                    <option value="seller">Organization</option>
                                </select>    
                                @if ($errors->has('type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="md-form">
                            <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                    <div class="md-form">
                                            <label for="password">{{ __('Password') }}</label>
                                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                                @if ($errors->has('password'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                        </div>
                            </div>
                            <div class="col-md-6">
                        <div class="md-form">
                                <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            </div>
                        </div>
                        
                        <div class="md-form">
                            <label for="address">{{ __('Address') }}</label>
                             <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('address') }}" required autofocus>
                              @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                        </div>
                        
                        <div class="md-form">
                            <label for="mobileno">{{ __('Mobile No') }}</label>
                                <input id="mobileno" type="text" class="form-control{{ $errors->has('mobileno') ? ' is-invalid' : '' }}" name="mobileno" value="{{ old('mobileno') }}" required autofocus>
                                @if ($errors->has('mobileno'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobileno') }}</strong>
                                    </span>
                                @endif
                        </div>
    

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
    </div>
        </div>
    </div>
</div>
</div>
</section>
@include('layouts.footer')
@endsection

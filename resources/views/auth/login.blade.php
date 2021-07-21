@extends('layouts.template')

@section('title','Connexion')
    

@section('content')
@guest
    @include('pages.partials.header')

@endguest
@include('pages.partials.banner')
@include('pages.partials.bread')
<div id="page-wrapper" class="sign-in-wrapper">
    <div class="graphs">
        <div class="sign-up">
            <h1>Connectez-vous</h1>
            <hr>
            <style>
                .form_log strong{
                    color:red;
                }
            </style>
            <form method="POST" action="{{ route('login') }}" class="form_log">
                @csrf
            
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            
                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
            
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" >
            
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-12  ">
                        <br><input type="submit" value="Se connecter">
                    </div>
                </div>
            
                  {{-- <div class="form-group row">
                    <div class="col-md-6 offset-md-4">
                        
                      <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div> 
                    </div>
                </div>--}}
            
               
            </form>
            <div class="sub_home_right">
                <p> <a href="{{ route('register') }}"><b>Creer votre compte</b><i class="fa fa-user" aria-hidden="true"></i></a></p>
            </div>
        </div>
    </div>
</div>


@endsection


{{-- <div class="col-md-4">
    <form>
        <div id="login-form" class="form-container" data-form-container style="color: rgb(198, 40, 40); background: rgb(255, 205, 210);">
        <div class="row">
            <div class="form-title">
                <span>Login</span>
            </div>
        </div>
        <div class="input-container">
            <div class="row">
                <span class="req-input valid" >
                    <span class="input-status" data-toggle="tooltip" data-placement="top" title="Input your email."> </span>
                    <input type="email" data-min-length="8" placeholder="Email" value="testing@gmail.com">
                </span>
            </div>
            <div class="row">
                <span class="req-input input-password invalid">
                    <span class="input-status" data-toggle="tooltip" data-placement="top" title="Password must be at least 8 characters long."> </span>
                    <input type="password" data-min-length="8" placeholder="Password">
                </span>
            </div>
            
            <div class="row" style="display:none">
                <span class="req-input confirm-password">
                    <span class="input-status" data-toggle="tooltip" data-placement="top" title="Password Must Match Initial Password Field."> </span>
                    <input type="password" data-min-length="8" placeholder="Confirm Password">
                </span>
            </div>
            
            <div class="row">
                <a class="create-account"> Create an Account </a>
            </div>
            
            <div class="row submit-row">
                <button type="button" class="btn btn-block submit-form invalid">Login</button>
            </div>
            <div class="oauth-buttons">
                <span><i class="fa fa-facebook"></i> </span>
                <span><i class="fa fa-google-plus"></i> </span>
                <span><i class="fa fa-linkedin"></i> </span>
                <span><i class="fa fa-twitter"></i> </span>
            </div>
                
            
        </div>
        </div>
    
        </form>
    </div> --}}
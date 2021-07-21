@extends('layouts.template')

@section('title','Creer Compte')
    

@section('content')
@include('pages.partials.header')
@include('pages.partials.banner')
@include('pages.partials.bread')
<div id="page-wrapper" class="sign-in-wrapper">
    <div class="graphs">
        <div class="sign-up">
            <h1>Creer Votre compte</h1>
            <hr>
            <form method="POST" action="{{ route('register') }}">
                @csrf
            
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
            
                    <div class="col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
            
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            
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
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            
                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
            
                    <div class="col-md-6">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
            
                <div class="col-md-12  ">
                    <br><input type="submit" value="Se connecter">
                </div>
            </form>
            <div class="col-md-8 col-md-offset-4">
                <br><p> <a href="{{ route('login') }}"><b>Connectez-vous içi</b> <i class="fa fa-user" aria-hidden="true"></i></a></p>
            </div>
        </div>
    </div>
</div>


@endsection

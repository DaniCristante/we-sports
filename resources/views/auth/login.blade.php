@extends('layouts.app')
@section('title', 'Iniciar sesión')
@section('content')
    <div class="row justify-content-center">
        <div class="col-12 col-xs-7 col-md-6 my-5" id="loginPanel">
            <form action="{{route('login')}}" class="form-group form p-4" method="POST">
                @csrf
                <div class="row align-items-center justify-content-between form-title mb-2 ">
                    <h4>
                        {{__('messages.login.title')}}
                    </h4>
                    <img src="{{asset('images/favicon.png')}}" alt="WeSports"
                         class="float-left border rounded-lg border-secondary" width="40" height="40">
                </div>
                <div class="input-group my-1">
                    <div class="input-group-prepend">
                    <span class="input-group-text bg-secondary">
                        <i class="fas fa-at fa text-white"></i>
                    </span>
                    </div>
                    <input type="email" name="email" class="form-control py-4 @error('email') is-invalid @enderror"
                           value="{{old('email')}}" required
                           placeholder="{{__('messages.login.email')}}">
                </div>
                <div class="input-group my-1">
                    <div class="input-group-prepend">
                    <span class="input-group-text bg-secondary">
                        <i class="fas fa-key text-white"></i>
                    </span>
                    </div>
                    <input type="password" name="password"
                           class="form-control py-4  @error('email') is-invalid @enderror" required
                           placeholder="{{__('messages.login.password')}}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                    @enderror
                </div>
                <br/>
                <div class="text-center">
                    <input
                        type="submit"
                        value="{{__('messages.login.title')}}"
                        class="btn btn-success p-2  w-50"
                    />
                </div>
            </form>
            <div class="p-2 m-2 text-center">
                <h4> {{__('messages.login.notuser')}}
                </h4>
                <button class="btn btn-secondary" onclick="window.location.replace('/register')">{{__('messages.login.link')}}</button>
            </div>
        </div>
    </div>
@endsection

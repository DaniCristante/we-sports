@extends('layouts.app')
@section('title', 'Registro')
@section('content')
    <div class="row justify-content-center">
        <div id="registerPanel" class="col-12 col-xs-7 col-md-6">
            <form action="{{route('register')}}" class="form-group form text-center p-4" method="POST">
                @csrf
                <div class="row align-items-center justify-content-between form-title mb-2 ">
                    <h4>
                        Crear cuenta
                    </h4>
                    <img src="{{asset('images/favicon.png')}}" alt="WeSports"
                         class="float-left border rounded-lg border-secondary" width="40" height="40">
                </div>

                <div>
                    <div class="row">
                        <div class="col-12 col-md-5">
                            <input type="text" placeholder="Nombre" name="uname" value="{{old('uname')}}"
                                   class="form-control my-1 @error('uname') is-invalid @enderror">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12 col-md-7">
                            <input type="text" placeholder="Apellidos" name="surnames" value="{{old('surnames')}}"
                                   class="form-control my-1 @error('surnames') is-invalid @enderror">
                            @error('surnames')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <input type="text" placeholder="Nickname" name="nickname" value="{{old('nickname')}}"
                           class="form-control my-1 @error('nickname') is-invalid @enderror">
                    @error('nickname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <hr class="bg-secondary">
                    <input type="email" placeholder="Email" name="email" value="{{old('email')}}"
                           class="form-control my-1 @error('email') is-invalid @enderror">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <input type="password" placeholder="Contraseña" name="password"
                                   class="form-control my-1 @error('password') is-invalid @enderror">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="password" placeholder="Confirma la contraseña" name="password_confirmation"
                                   class="form-control my-1" required>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <input
                        type="submit"
                        value="Registrarse"
                        class="btn btn-success p-2 my-2  w-50"
                    />
                </div>
            </form>
            <hr>
            <div class="p-2 m-2 text-center">
                <h4> ¿Ya tienes una cuenta?
                    <button class="btn btn-secondary" onclick="window.location.replace('/login')">Inicia sesión</button>
                </h4>
            </div>
        </div>
    </div>
@endsection

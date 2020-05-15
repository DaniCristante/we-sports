@extends('layouts.ws-app')

@section('content')

    <div class="row justify-content-center">
        {{--        LOGIN PANEL--}}
        <div class="col-12 col-xs-7 col-md-6 " id="loginPanel">
            <form action="{{url('callapi-login')}}" class="form-group form p-4" method="POST">
                @csrf
                <div class="row align-items-center justify-content-between form-title mb-2 ">
                    <h4>
                        Login
                    </h4>
                    <img src="{{asset('images/favicon.png')}}" alt="WeSports"
                         class="float-left border rounded-lg border-secondary" width="40" height="40">
                </div>
                <input
                    type="email"
                    placeholder="Write your email"
                    class="form-control my-1"
                    name="email"
                />
                <input type="password" name="password" class="form-control my-1" placeholder="password">
                <br/>
                <div class="text-center">
                    <input
                        type="submit"
                        value="Iniciar sesión"
                        class="btn btn-success py-1  w-50"
                    />
                </div>

            </form>

            <div class="p-2 m-2 text-center">

                <h4> ¿Aún no tienes una cuenta?
                    <button id="registerBtn" class="btn btn-secondary"> Regístrate</button>
                </h4>
            </div>


        </div>


        {{--        REGISTER PANEL--}}


        <div id="registerPanel" class="col-12 col-xs-7 col-md-6">

            <form action="" class="form-group form text-center p-4">
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
                            <input type="text" placeholder="Nombre" name="name" class="form-control my-1">
                        </div>
                        <div class="col-12 col-md-7">
                            <input type="text" placeholder="Apellidos" name="surnames" class="form-control my-1">
                        </div>

                    </div>

                    <input type="text" placeholder="Nickname" name="nickname" class="form-control my-1">

                    <hr class="bg-secondary">

                    <input type="email" placeholder="Email" name="email" class="form-control my-1">


                    <div class="row">
                        <div class="col-12 col-md-6">
                            <input type="password" placeholder="Contraseña" name="password" class="form-control my-1">
                        </div>
                        <div class="col-12 col-md-6">
                            <input type="password" placeholder="Confirma la contraseña" name="passwordConfm"
                                   class="form-control my-1">
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
                    <button id="loginBtn" class="btn btn-secondary"> Iniciar sesión</button>
                </h4>
            </div>

        </div>


    </div>
@endsection

@section('scripts')
    <script src="{{asset('js/entry.js')}}">

    </script>
@endsection

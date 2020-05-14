@extends('layouts.ws-app')

@section('content')

    <div class="container my-3 p-3">

        {{--        LOGIN PANEL--}}

        <div class="bg-info p-3 my-2 p-2" id="loginPanel">
            <form id="loginForm">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <div class="bg-dark p-2 m-2 text-center">
                <hr>
                <button id="registerBtn" class="btn btn-secondary"> Dont have acount?</button>
            </div>

        </div>


        {{--        REGISTER PANEL--}}

        <div id="registerPanel" class="bg-dark p-3">

            <form action="" class="form-group">
                Name
                <input type="text" class="form-control">

                Email
                <input type="email" class="form-control">

                Password
                <input type="password" class="form-control">

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <div class="bg-dark p-2 m-2 text-center">
                <hr>
                <button id="loginBtn" class="btn btn-secondary"> Have an acount</button>
            </div>
        </div>
    </div>




@endsection

@section('scripts')
    <script src="{{asset('js/entry.js')}}">

    </script>
@endsection

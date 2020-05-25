@extends('layouts.app')

@section('content')

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  fixed-top align-items-center justify-content-center">
        <div class="col-12 justify-content-between">

            <button class="navbar-toggler sideMenuToggler mx-2" type="button">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="#">WeSports<span class="text-danger">Admin</span></a>


            <a href="" class="btn btn-danger float-right">Log out</a>
        </div>

    </nav>
    <div class="wrapper d-flex ">
        <div class="sideMenu bg-primary">
            <div class="sidebar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2">
                            <i class="fas fa-columns text-white"></i>
                            <span class="text-white">Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="nav-link px-2">
                            <i class="fas fa-users text-white"></i>
                            <span class="text-white">Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2">
                            <i class="fas fa-users text-white"></i>
                            <span class="text-white">Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link px-2">
                            <i class="fas fa-users text-white"></i>
                            <span class="text-white">Events</span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
        <div class="content">
            <main>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 my-3">
                            <div class=" px-3 py-3">
                                <h4 class="mb-2">New Clients</h4>
                                <div class="progress" style="height: 16px;">
                                    <div
                                        class="progress-bar bg-warning"
                                        role="progressbar"
                                        style="width: 25%;"
                                        aria-valuenow="25"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                    >
                                        25
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 my-3">
                            <div class="bg-mattBlackLight px-3 py-3">
                                <h4 class="mb-2">New Projects</h4>
                                <div class="progress" style="height: 16px;">
                                    <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 50%;"
                                        aria-valuenow="25"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                    >
                                        50
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 my-3">
                            <div class="bg-mattBlackLight p-3">
                                <h4 class="mb-2">Completed</h4>
                                <div class="progress" style="height: 16px;">
                                    <div
                                        class="progress-bar bg-success"
                                        role="progressbar"
                                        style="width: 80%;"
                                        aria-valuenow="25"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                    >
                                        80
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
        </div>
    </div>



@endsection

@section('scripts')
    <script src="{{asset('js/admin-panel.js')}}">

    </script>
@endsection

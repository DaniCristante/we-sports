<nav class="navbar navbar-expand-lg bg-primary sticky-top">


    <div class="col-6">
        <a class="navbar-brand" href="#">

            <img class="border border-primary rounded-lg" src="{{asset('images/brand-logo.png')}}" alt="WeSports"
                 width="180" height="40">
        </a>
    </div>
    <div class="col-6 text-right">

        <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#exampleModal">
            Login
        </button>

    </div>

    <!-- Modal -->
    <div class="modal fade col-11 col-md-12" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog border rounded-lg border-white " role="document">

            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h3 class="text-secondary">Welcome to WeSports</h3>

                    <a class="btn float-left" data-dismiss="modal" aria-label="Close">
                        <img src="https://img.icons8.com/cotton/24/000000/cancel--v1.png"/>
                    </a>
                </div>

                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <i class="fa fa-bug"></i>
                            <input type="email" class="form-control" name="email"
                                   placeholder="Enter email">

                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="password"
                                   placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-outline-success float-right w-25">Login</button>
                    </form>

                </div>
                <div class="modal-footer text-center align-items-center bg-secondary">
                    <div class="col-12">
                        <a href="" class="btn btn-outline-dark">Forgot password?</a>
                    </div>
                    {{--                    <div class="col-12 mt-1"><p>Don’t have an account yet? <a href=""--}}
                    {{--                                                                              class="btn btn-success">Register</a>--}}
                    {{--                        </p>--}}
                    {{--                    </div>--}}

                </div>
            </div>
        </div>
    </div>

</nav>
<div class="jumbotron">
    <h1 class="display-4">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
        featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
</div>

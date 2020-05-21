@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center my-5 p-2">
            <div class="card col-10 col-md-4 mr-2" style="width: 18rem;">
                <img class="card-img-top border rounded-circle my-1"
                     src="https://spoiler.bolavip.com/__export/1578319752701/sites/bolavip/img/2020/01/06/peaky_blinders_sexta_temporada_crop1578318169058.jpg_1005196607.jpg"
                     alt="Card image cap">
                <div class="card-body">
                    <h6>UserName</h6>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci animi aspernatur at deleniti
                    distinctio eligendi esse eveniet itaque natus nesciunt nihil, officiis porro quaerat, repellat sunt
                    ullam veritatis voluptas voluptate?

                </div>

                <div class="card-footer p-2 my-2">
                    <i class="d-block fab fa-facebook">
                        <span class="mx-1">Tommy Shelbby</span>
                    </i>
                    <i class="d-block fab fa-twitter">
                        <span class="mx-1">@tomy</span>
                    </i>
                    <i class="d-block fas fa-mobile-alt">
                        <span class="mx-1">07 0456 9872</span>
                    </i>

                </div>

            </div>

            <div class="col-12 col-md-7 bg-light ml-2 row">
                <div class="col-12 ">
                    <ul class="list-group list-group-horizontal-md" id="userPerfiList">
                        <li class="list-group-item collapsed" data-toggle="collapse" data-target="#eventosUsuario">
                            Eventos creados
                        </li>
                        <li class="list-group-item">Eventos participados</li>
                        <li class="list-group-item">Amigos</li>
                    </ul>
                </div>
                <div class="col-12 collapse" id="eventosUsuario">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias deserunt doloribus eligendi esse
                        ex exercitationem fugit hic impedit incidunt ipsam maxime modi molestiae numquam, optio quidem
                        ratione saepe vel voluptates?
                    </p>
                    <i>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci asperiores delectus
                        dignissimos dolor dolorem ex iste iure laborum placeat, praesentium recusandae repellat ullam
                        voluptas? Inventore magnam necessitatibus nemo similique tenetur.
                    </i>
                    <br>
                    <strong class="text-black-50">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa cumque deleniti ducimus facere
                        nam nisi sunt? Aut, doloribus esse ex explicabo illum in iure modi mollitia, non repellat rerum
                        saepe!
                    </strong>

                </div>
            </div>


        </div>
    </div>

@endsection

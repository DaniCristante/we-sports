<div class="container">

    <div class="col-12  col-md-8 m-auto">

        <form action="" class="form-group form p-4 ">
            <div class="row align-items-center justify-content-between form-title mb-2 ">
                <h4>
                    Crear evento
                </h4>
                <img src="{{asset('images/favicon.png')}}" alt="WeSports"
                     class="float-left border rounded-lg border-secondary" width="40" height="40">
            </div>
            <div>
                <div class="row my-2 justify-content-center align-items-center">
                    <div class="col-12 col-md-2">
                        <span>Título </span>
                    </div>
                    <div class="col-12 col-md-10">
                        <input type="text" name="title" class="form-control" required>
                    </div>
                </div>

                <div class="row my-2 justify-content-center align-items-center">
                    <div class="col-12 col-md-8">
                        <span>Selecciona un deporte</span>
                        <select name="sport_id" class="form-control" required>
                            <option selected disabled hidden>Lista de deportes</option>
                            @foreach($sports as $sport)
                                <option value="{{$sport['id']}}"
                                        class="form-control">{{$sport['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-md-4 ">
                        <span>Participantes</span>
                        <input type="number" name="max_participants" class="form-control" min="1" required>
                    </div>
                </div>

                <hr class="bg-primary">

                <div class="row my-2 justify-content-center align-items-center">
                    <div class="col-12 col-md-7">
                        <input type="text" name="adress" placeholder="Dirección" required class="form-control my-1">
                    </div>
                    <div class="col-12 col-md-5">
                        <input type="text" name="city" placeholder="Ciudad" required class="form-control my-1">

                    </div>

                    <div class="col-10 col-md-6 my-2 ">
                        <span>Fecha</span>
                        <input type="datetime-local" name="datetime" class="form-control" required>
                    </div>

                    <div class="col-10 col-md-6 my-2 ">
                        <span>Imagen</span>
                        <input type="file" name="image" class="form-control" required>
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


    </div>
</div>

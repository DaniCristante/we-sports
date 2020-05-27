<form action="{{url('events/create')}}" class="form-group form p-4" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <div class="row my-2 justify-content-center align-items-center">
            <div class="col-12 col-md-2">
                <span>Título </span>
            </div>
            <div class="col-12 col-md-10">
                <input type="text" name="title" class="form-control" value="{{old('title')}}" required>
            </div>
        </div>
        <div class="row my-2 justify-content-center align-items-center">
            <div class="col-12 col-md-2">
                <span>Descripción </span>
            </div>
            <div class="col-12 col-md-10">
                <textarea name="description" class="form-control" required>{{old('description')}}</textarea>
            </div>
            @error('description')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
            @enderror
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
                <input type="number" name="max_participants" class="form-control" min="1"
                       value="{{old('max_participants')}}" required>
            </div>
        </div>

        <hr class="bg-primary">

        <div class="row my-2 justify-content-center align-items-center">
            <div class="col-12 col-md-7">
                <input type="text" name="address" placeholder="Dirección" value="{{old('address')}}" required
                       class="form-control my-1">
            </div>
            <div class="col-12 col-md-5">
                <input type="text" name="city" placeholder="Ciudad" value="{{old('city')}}" required
                       class="form-control my-1">

            </div>
            <div class="col-10 col-md-6 my-2 ">
                <span>Fecha</span>
                <input type="datetime-local" name="datetime" value="{{old('datetime')}}"
                       class="form-control @error('datetime') is-invalid @enderror"
                       required>
                @error('datetime')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-10 col-md-6 my-2 ">
                <span>Imagen</span>
                <input type="file" name="img" class="form-control @error('img') is-invalid @enderror">
                @error('img')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
    </div>
    @if ($message = Session::get('event-failed'))
        <h5 class="alert alert-warning">{{$message}}</h5>
    @endif
    <div class="text-center">
        <input
            type="submit"
            value="Crear evento"
            class="btn btn-success p-2 my-2  w-50"
        />
    </div>
</form>

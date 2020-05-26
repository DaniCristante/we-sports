
<div id="userUpdateForm">
    <form action="{{url('dashboard/update')}}" class="form-group form  col-12 my-2 mx-1 p-4" method="POST">
        @csrf
        <h3 class="form-title">Actualizar perfil</h3>

        <div class="form-group">
            <label>Imagen perfil</label>
            <input type="file" class="form-control" name="uimg" value="@if($data['uimg']) {{$data['uimg'] }} @endif">
        </div>

        <div class="form-group">
            <label>Nickname</label>
            <input type="text" class="form-control" readonly name="nickname" value="{{$data['nickname']}}">
            <small class="alert-warning">este campo no se puede modificar</small>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" readonly name="email" value="{{$data['email']}}">
            <small class="alert-warning">este campo no se puede modificar</small>
        </div>

        <hr class="bg-secondary">

        <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" name="uname" value="{{$data['uname']}}">
        </div>

        <div class="form-group">
            <label>Apellidos</label>
            <input type="text" class="form-control" name="surnames"
                   value="@if($data['surnames']){{$data['surnames'] }}@endif">
        </div>

        <div class="form-group">
            <label>Número de telefono</label>
            <input type="number" class="form-control" name="phone"
                   value="@if($data['phone']){{$data['phone'] }}@endif">
        </div>

        <div class="form-group">
            <label>Ciudad</label>
            <input type="text" class="form-control" name="city"
                   value="@if($data['city']){{$data['city'] }}@endif">
        </div>
        <div class="form-group">
            <label>Dirección</label>
            <input type="text" class="form-control" name="address"
                   value="@if($data['address']){{$data['address'] }}@endif">
        </div>


        <div class="text-center">
            <input
                type="submit"
                value="Actualizar"
                class="btn btn-outline-success p-2 my-2  w-50"
            />
        </div>
    </form>

</div>

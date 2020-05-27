<div id="userUpdateForm">
    <form action="{{url('dashboard/update')}}" class="form-group form  col-12 my-2 mx-1 p-4" method="POST">
        @csrf

        <div class="form-group" id="imgInput">
            <label>Imagen perfil</label>
            <input type="file" class="form-control" name="uimg" id="uimg"
                   value="@if($data['uimg']) {{$data['uimg'] }} @endif">
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

        <div class="form-group" id="nameInput">
            <label>Nombre</label>
            <input type="text" class="form-control" name="uname" id="uname" value="{{$data['uname']}}">
        </div>

        <div class="form-group" id="inputSurnames">
            <label>Apellidos</label>
            <input type="text" class="form-control" name="surnames" id="surnames"
                   value="@if($data['surnames']){{$data['surnames'] }}@endif">
        </div>

        <div class="form-group" id="phoneInput">
            <label>Número de telefono</label>
            <input type="tel" class="form-control" name="phone" id="phone"
                   value="@if($data['phone']){{$data['phone'] }}@endif">
        </div>

        <div class="form-group" id="cityInput">
            <label>Ciudad</label>
            <input type="text" class="form-control" name="city" id="city"
                   value="@if($data['city']){{$data['city'] }}@endif">
        </div>
        <div class="form-group" id="addressInput">
            <label>Dirección</label>
            <input type="text" class="form-control" name="address" id="address"
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

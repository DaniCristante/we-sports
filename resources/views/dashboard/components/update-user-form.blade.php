<div id="userUpdateForm">
    <form id="user-update-form" action="{{url('dashboard/update')}}" class="form-group form  col-12 my-2 mx-1 p-4" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group" id="imgInput">
            <label>{{__('messages.dashboard.components.update-form.image')}}</label>
            <input type="file" class="form-control" name="uimg" id="uimg"
                   value="@if($data['uimg']) {{$data['uimg'] }} @endif">
            <div class="messages">
            </div>
        </div>

        <div class="form-group">
            <label>Nickname</label>
            <input type="text" class="form-control" readonly name="nickname" value="{{$data['nickname']}}">
            <small class="alert-warning">{{__('messages.dashboard.components.update-form.cant-modify')}}</small>
            <div class="messages">
            </div>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" readonly name="email" value="{{$data['email']}}">
            <small class="alert-warning">{{__('messages.dashboard.components.update-form.cant-modify')}}</small>
            <div class="messages">
            </div>
        </div>

        <hr class="bg-secondary">

        <div class="form-group" id="nameInput">
            <label>{{__('messages.dashboard.components.update-form.name')}}</label>
            <input type="text" class="form-control" name="uname" id="uname" value="{{$data['uname']}}">
            <div class="messages">
            </div>
        </div>

        <div class="form-group" id="inputSurnames">
            <label>{{__('messages.dashboard.components.update-form.surnames')}}</label>
            <input type="text" class="form-control" name="surnames" id="surnames"
                   value="@if($data['surnames']){{$data['surnames'] }}@endif">
            <div class="messages">
            </div>
        </div>

        <div class="form-group" id="phoneInput">
            <label>{{__('messages.dashboard.components.update-form.phone')}}</label>
            <input type="tel" class="form-control" name="phone" id="phone"
                   value="@if($data['phone']){{$data['phone'] }}@endif">
            <div class="messages">
            </div>
        </div>

        <div class="form-group" id="cityInput">
            <label>{{__('messages.dashboard.components.update-form.city')}}</label>
            <input type="text" class="form-control" name="city" id="city"
                   value="@if($data['city']){{$data['city'] }}@endif">
            <div class="messages">
            </div>
        </div>
        <div class="form-group" id="addressInput">
            <label>{{__('messages.dashboard.components.update-form.address')}}</label>
            <input type="text" class="form-control" name="address" id="address"
                   value="@if($data['address']){{$data['address'] }}@endif">
            <div class="messages">
            </div>
        </div>


        <div class="text-center">
            <input
                type="submit"
                value="{{__('messages.dashboard.components.update-form.update')}}"
                class="btn btn-outline-success p-2 my-2  w-50"
            />
        </div>
    </form>

</div>

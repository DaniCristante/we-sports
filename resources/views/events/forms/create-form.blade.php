<div class="container">

    <div class="col-12  col-md-8 m-auto">

        <form action="{{url('events/create')}}" class="form-group form p-4" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row align-items-center justify-content-between form-title mb-2 ">
                <h4>
                    {{__('messages.create-page.title')}}
                </h4>
                <img src="{{asset('images/favicon.png')}}" alt="WeSports"
                     class="float-left border rounded-lg border-secondary" width="40" height="40">
            </div>
            <div>
                <div class="row my-2 justify-content-center align-items-center">
                    <div class="col-12 col-md-2">
                        <span>{{__('messages.form-inputs.title')}} </span>
                    </div>
                    <div class="col-12 col-md-10">
                        <input type="text" name="title" class="form-control" value="{{old('title')}}" required>
                    </div>
                </div>
                <div class="row my-2 justify-content-center align-items-center">
                    <div class="col-12 col-md-2">
                        <span>{{__('messages.form-inputs.description')}} </span>
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
                        <span>{{__('messages.form-inputs.sport')}}</span>
                        <select name="sport_id" class="form-control" required>
                            <option selected disabled hidden>{{__('messages.form-inputs.sport')}}</option>
                            @foreach($sports as $sport)
                                <option value="{{$sport['id']}}"
                                        class="form-control">{{$sport['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 col-md-4 ">
                        <span>{{__('messages.form-inputs.participants')}}</span>
                        <input type="number" name="max_participants" class="form-control" min="1"
                               value="{{old('max_participants')}}" required>
                    </div>
                </div>

                <hr class="bg-primary">

                <div class="row my-2 justify-content-center align-items-center">
                    <div class="col-12 col-md-7">
                        <input type="text" name="address" placeholder="{{__('messages.form-inputs.address')}}" value="{{old('address')}}" required
                               class="form-control my-1">
                    </div>
                    <div class="col-12 col-md-5">
                        <input type="text" name="city" placeholder="{{__('messages.form-inputs.city')}}" value="{{old('city')}}" required
                               class="form-control my-1">

                    </div>
                    <div class="col-10 col-md-6 my-2 ">
                        <span>{{__('messages.form-inputs.date')}}</span>
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
                        <span>{{__('messages.form-inputs.image')}}</span>
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
                    value="{{__('messages.create-page.title')}}"
                    class="btn btn-success p-2 my-2  w-50"
                />
            </div>
        </form>


    </div>
</div>

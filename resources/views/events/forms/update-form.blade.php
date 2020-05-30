<div class="container">

    <div class="col-12 col-md-8 m-auto">

        <form action="{{url('update')}}" class="form-group form p-4" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row align-items-center justify-content-between form-title mb-2 ">
                <h4>
                    {{__('messages.update-page.head')}}
                </h4>
                <img src="{{asset('images/favicon.png')}}" alt="WeSports"
                     class="float-left border rounded-lg border-secondary" width="40" height="40">
            </div>
            <div>
                <div class="row my-2 justify-content-center align-items-center">
                    <div class="col-12 col-md-2">
                        <span>{{__('messages.update-page.title')}}</span>
                    </div>
                    <div class="col-12 col-md-10">
                        <input type="text" name="title" class="form-control" value="{{$event['title']}}" required>
                    </div>
                </div>
                <div class="row my-2 justify-content-center align-items-center">
                    <div class="col-12 col-md-2">
                        <span>{{__('messages.update-page.description')}}</span>
                    </div>
                    <div class="col-12 col-md-10">
                        <textarea name="description" class="form-control" required>{{$event['description']}}</textarea>
                    </div>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <hr class="bg-primary">
                <div class="row my-2 justify-content-center align-items-center">
                    <div class="col-12 col-md-2">
                        <span>{{__('messages.update-page.address')}}</span>
                    </div>
                    <div class="col-12 col-md-10">
                        <input type="text" name="address" placeholder="{{__('messages.update-page.address')}}" value="{{$event['address']}}"
                               class="form-control" required>
                    </div>
                </div>
                <div class="row my-2 justify-content-center align-items-center">
                    <div class="col-12 col-md-2">
                        <span>{{__('messages.update-page.city')}}</span>
                    </div>
                    <div class="col-12 col-md-10">
                        <input type="text" name="city" placeholder="{{__('messages.update-page.city')}}" value="{{$event['city']}}"
                               class="form-control" required>
                    </div>
                </div>
                <hr class="bg-primary">

                <div class="row my-2 justify-content-center align-items-center">
                    <div class="col-12 col-md-2">
                        <span>{{__('messages.update-page.date')}}</span>
                    </div>
                    <div class="col-12 col-md-10">
                        <input type="datetime-local" name="datetime" value="{{$datetime}}"
                               class="form-control @error('datetime') is-invalid @enderror" required>
                        @error('datetime')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                </div>
                <input value="{{$event['id']}}" name="id" hidden>
                <div class="row my-2 justify-content-center align-items-center">
                    <div class="col-12 col-md-2">
                        <span>{{__('messages.update-page.image')}}</span>
                    </div>
                    <div class="col-12 col-md-10">
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
                    value="{{__('messages.update-page.button')}}"
                    class="btn btn-success p-2 my-2  w-50"
                />
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('#createEventButton').hide();
    })
</script>

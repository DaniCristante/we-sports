<div class="container-fluid">
    <div class="row align-items-center">
        <header id="homePageHeader" class="container-fluid  p-2 bg-dark">
            @if (session('status'))
                <div id="alerts" class="alert alert-success text-center">
                    {{session('status')}}
                </div>
            @endif
            <div class="container my-4">
                <div class="col-12">
                    <h2 class="text-center">{{__('messages.homepage.welcome')}}</h2>
                    <div id="web-abstract">
                        <h4 class="p-2 text-center">
                            {{__('messages.homepage.abstract')}}
                        </h4>
                    </div>
                </div>
                <hr class="col-8 bg-light">
                <div class="container pt-2">
                    <div>
                        <h5 class="text-center text-white">{{__('messages.homepage.filter')}}</h5>
                    </div>
                    <form action="{{url('events')}}" method="post" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-12 p-0 my-1">
                                        <input type="text" name="city" class="form-control search-slt"
                                               placeholder="{{__('messages.form-inputs.city')}}">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 p-0 my-1">
                                        <input type="date" name="date" class="form-control search-slt"
                                               placeholder="Fecha">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 p-0 my-1">
                                        <select class="form-control search-slt" name="sport" id="sportsList">
                                            <option value="none" disabled hidden selected>- {{__('messages.form-inputs.sport')}} -
                                            </option>
                                            @foreach($sports as $sport)
                                                <option value="{{$sport['id']}}">{{$sport['name']}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 p-0 my-1">
                                        <input type="submit" name="submit" class="btn btn-secondary wrn-btn"
                                               value="{{__('messages.form-inputs.find')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </header>
    </div>
</div>


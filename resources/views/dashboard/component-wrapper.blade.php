<div class="content">
    <div class="container-fluid" id="adminContent">
        @if(session('status'))
            <div id="alerts" class="alert alert-success text-center">
                {{session('status')}}
            </div>
        @endif
        @include('dashboard.components.update-user-form')
        @include('dashboard.components.created-events')
        @include('dashboard.components.participation-record')
    </div>
</div>
</div>


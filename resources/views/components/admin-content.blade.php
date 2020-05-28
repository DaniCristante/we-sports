<div class="content">
    <div class="container-fluid" id="adminContent">
        @if(session('event-status'))
            <div id="alerts" class="alert alert-success text-center">
                {{session('event-status')}}
            </div>
        @endif
        @include('components.user-update-form')
        @include('components.admin-events')
        @include('components.participation-record')
    </div>
</div>
</div>

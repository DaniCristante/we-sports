<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">{{__('messages.modal.delete-event')}}</h5>
            </div>
            <div class="modal-body">
                <a href="{{url('events/delete?eid='.$userEvent['id'])}}" class="btn btn-primary">{{__('messages.modal.yes')}}</a>
                <button class="btn-primary btn" data-dismiss="modal">{{__('messages.modal.no')}}</button>
            </div>
        </div>
    </div>
</div>

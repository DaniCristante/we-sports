<div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">¿Seguro que deseas eliminar el evento?</h5>
            </div>
            <div class="modal-body">
                <a href="{{url('dashboard/delete?eid='.$userEvent['id'])}}" class="btn btn-primary">Si</a>
                <button class="btn-primary btn" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>

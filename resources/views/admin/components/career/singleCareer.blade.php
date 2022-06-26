<div class="modal fade" id="modal{{$attr['modal_name']}}" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{$attr['data']->full_name}}</h5>
                <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            </div>
            <div class="modal-body">
                <span>Full Name: {{$attr['data']->full_name}}</span><br>
                <span>Email: {{$attr['data']->email}}</span><br>
                <span>Phone: {{$attr['data']->phone}}</span><br>
                <span>Job: {{$attr['data']->Job}}</span><br>
                <embed src="{{ asset('heto/gallery/' . get_file_name($attr['data']->upload_id)) }}" width="90%" height="600px" />

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script>
    $('#{{$attr['modal_name']}}').on('hide.bs.modal', function (event) {
        $("#dataTable").DataTable().ajax.reload()
    })
</script>

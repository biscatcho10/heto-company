@extends("admin.layouts.index")
@section("content")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 mt-1">
                <div class="col-sm-5">
                    <h1>Careers</h1>
                </div>
                <div class="col-sm-2 align-content-center">
                    <h5 class=" justify-content-center text-right" style="margin:auto;line-height:45px;vertical-align:middle;">Jobs filter</h5>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        {!! form::open(['route'=>['careers.index'],'id'=>'form-filter', 'method'=>"get"] ) !!}
                            {{ form::select('job_id', $result, app('request')->input('job_id'),['id'=>'select-filter','class'=>'select2 form-control templatingSelect2', "style"=>"height: 100px, width:60%"]) }}
                        {!!form::close()!!}
                    </div>
                </div>
                <div class="col-sm-2">
                    <a href="{{ route('careers.create') }}" type="button" class="btn btn-block btn-primary btn-md">Create
                        Career</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="card">
            <div class="card-body p-0">
                {!! $dataTable->table() !!}
            </div>
        </div>
    </section>
    <script>
        var select = document.getElementById('select-filter');
        select.onchange = function(){
            this.form.submit();
        };
    </script>
@endsection

@push('scripts')
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">
    <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
    <script src="/vendor/datatables/buttons.server-side.js"></script>
    {!! $dataTable->scripts() !!}
    <script>
        $(document).ready(function(){
            $('#dataTable_wrapper tbody').sortable({
                axis: 'y',
                update: function (event, ui) {
                    var data = $(this);
                    var ids = new Array();
                    $('#dataTable_wrapper tbody tr').each(function(){
                        ids.push($(this).attr('id'))
                    });
                    // POST to server using $.post or $.ajax
                    $.ajax({
                        data: {"_token": "{{csrf_token()}}", ids},
                        type: 'POST',
                        url: '{{route("careers-reorder")}}',
                        success:function (data){
                            if(data)  $("#dataTable").DataTable().ajax.reload()
                        }

                    });
                }
            })
        });
    </script>
@endpush

@extends("admin.layouts.index")
@section("content")
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Categories</h1>
                </div>
                <div class="col-sm-4">
                </div>
                <div class="col-sm-2">
                    <a href="{{ route('categories.create') }}" type="button" class="btn btn-block btn-primary btn-md">Create
                        Category</a>
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
@endsection

@push('scripts')
    <script src="/styles/admin/js/jquery/jquery.min.js"></script>
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
                        url: '{{route("categories-reorder")}}',
                        success:function (data){
                            if(data)  $("#dataTable").DataTable().ajax.reload()
                        }

                    });
                }
            })
        });
    </script>
@endpush

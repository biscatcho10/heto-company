<ul class="d-flex justify-content-center">

    @if( $page !== 'careers' && $page !== 'contacts')
        <li>
            <a class="waves-effect btn btn-xs btn-primary edit-btn mr-1" data-value="$data->id"
               href="{{route("{$page}.edit", $data->id)}}">Update</a>
        </li>
    @endif


    <li>
        <button type="button" class="btn btn-xs btn-danger delete-{{$data->id}} mr-1"  value="{{$data->id}}">Delete</button>
    </li>

    @if($page === 'careers' )
        <li>
            <a class="waves-effect btn btn-xs btn-light mr-1" id="showCareer{{$data->id}}" data-toggle="modal" data-target="#modal{{$data->id}}" role="button">Open</a>
            @include('admin.components.career.singleCareer',$attr = ['modal_name'=>$data->id,'data'=>$data] )
        </li>
    @endif


    @if($page === 'projects' )
        <li>
            <button type="button"
                    class="waves-effect btn btn-xs btn-light mr-1"
                    data-toggle="modal"
                    data-target="#moveModal{{$data->id}}"
                    data-backdrop="static" data-keyboard="false" >
                Move
            </button>
            @include('admin.components.project_type.project.action_modal',$attr = ['modal_name'=>'moveModal'.$data->id,'id'=>$data->id,'project_type'=>$data->project_type_id,'action'=>'move'] )
        </li>

        <li>
            <button type="button"
                    class="waves-effect btn btn-xs btn-light mr-1"
                    data-toggle="modal"
                    data-target="#copyModal{{$data->id}}"
                    data-backdrop="static" data-keyboard="false" >
                Copy
            </button>
            @include('admin.components.project_type.project.action_modal',$attr = ['modal_name'=>'copyModal'.$data->id,'id'=>$data->id,'project_type'=>$data->project_type_id,'action'=>'copy'] )
        </li>
        <li>
            <button type="button"
                    class="waves-effect btn btn-xs btn-light mr-1"
                    data-toggle="modal"
                    data-target="#cloneModal{{$data->id}}"
                    data-backdrop="static" data-keyboard="false" >
                Clone
            </button>
            @include('admin.components.project_type.project.action_modal',$attr = ['modal_name'=>'cloneModal'.$data->id,'id'=>$data->id,'project_type'=>$data->project_type_id,'action'=>'clone'] )
        </li>
    @endif
</ul>

<script>
$(document).ready(function(){
    $('#dataTable tbody tr').on('click','.delete-{{$data->id}}',function(){
            var id = $(this).val();
            var c = confirm('Are you sure?');
            if (c){
                $.ajax({
                    data: {"_token": "{{csrf_token()}}"},
                    type: 'DELETE',
                    url: "{{route($page.".destroy",$data->id)}}",
                    success:function(){
                        $("#dataTable").DataTable().ajax.reload()
                        var message = $('' +
                            '<div class="alert alert-success" id ="success-message" style="margin:15px; height:2.5rem"  role="alert"> <span class="justify-content-center">{{$page}} deleted succesfully</span>  <br>'+
                        '</div>');
                        $( ".main-content-inner" ).prepend(message);
                        $('#success-message').fadeOut(5000, function() { $(this).remove(); })
                    }
                });

            }
    })

    $('#dataTable tbody tr').on('click','#showCareer{{$data->id}}',function(){
        console.log("testing")

        if("{{isset($data->seen) ? $data->seen : 0}}" == 'No'){
        console.log("test")
            $.ajax({
                url: "{{ route('careers.show') }}",
                method: "POST",
                data: {_token: "{{csrf_token()}}", id: {{$data->id}}},
                success: function () {
                    // $("#dataTable").DataTable().ajax.reload()
                },
            });
        }
    })


    });
</script>

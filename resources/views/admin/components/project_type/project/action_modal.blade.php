@php
if(!isset($project_types)){
    $project_types = \App\Models\ProjectType::all();
    $result=[];
    foreach ($project_types as $project_type){
        $result[$project_type->id] = $project_type->title;
    }
    $project_types = $result;
}
@endphp
<div class="modal fade bd-example-modal-sm" id="{{$attr['modal_name']}}" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Destination</h5>
                <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
            </div>
            <div class="modal-body">
                @include('admin.components.project_type.project.form')
                @method('POST')
                <div class="form-group">
                    {{ form::label('project_types','Project type')}}
                    {{ form::select('project_type_id', $project_types, $attr['project_type'],['class'=>'select2 form-control templatingSelect2', "style"=>"height: 100px, width:100%"]) }}
                </div>
                {{ form::hidden('id', $attr['id']) }}
                {!!form::close()!!}
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success float-right m-3" onclick="$('#form-data-{{$attr['action']}}{{$attr['id']}}').submit()">Save Changes</button>
            </div>
        </div>
    </div>
</div>

<script>
jQuery(document).ready(function($){
    if ('{{$attr['action']}}' !== 'clone'){
        $('#{{$attr['modal_name']}} select.select2 option[value="{{$attr['project_type']}}"]').attr('disabled', true);
    }
});
</script>
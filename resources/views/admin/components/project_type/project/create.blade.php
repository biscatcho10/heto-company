@extends("admin.layouts.index")
@section("content")
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    {!! form::open(['route'=>['projects.store'],'id'=>'form-data'] ) !!}
                    <h4 class="header-title">Project</h4>
                    @method('POST')
                    @csrf
                    @include('admin.components.project_type.project.fields')
                    {{ form::hidden('thumbnail_image', $project->thumbnail_image, array('id' => 'thumbnail_image')) }}
                    {{ form::hidden('gallery', $project->gallery, array('id' => 'gallery')) }}
                    {!!form::close()!!}
                    <button type="submit" class="btn btn-success float-right mt-3" onclick="$('#form-data').submit()">Save Changes</button>
                    @include('admin.widgets.uploader.mediaNav',$attr = ['upload_type' => 'single', 'upload_id' => 0,'modal_name'=>'thumbnail','section_id'=>'thumbnail_image'] )
                    @include('admin.widgets.uploader.mediaNav',$attr = ['upload_type' => 'multi', 'upload_id' => 0,'modal_name'=>'gallery_upload','section_id'=>'gallery'] )
                </div>
            </div>
        </div>
    </div>
@endsection

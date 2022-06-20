@extends("admin.layouts.index")
@section("content")
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    {!! form::open(['route'=>['project-types.update', $project_type->id],'id'=>'form-data'] ) !!}
                    <h4 class="header-title">Project Services</h4>
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ form::label('title','Title')}}
                                {{form::text('title',$project_type->title,['class'=>'form-control','placeholder'=>'Title'])}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                    <textarea class="form-control" name="description" id="summernote">{{$project_type->description}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ form::label('services_image','Service Gallery')}}
                                {{ form::hidden('gallery',$project_type->gallery, array('id' => 'gallery')) }}
                                <a class="btn btn-light"
                                   style="cursor: pointer"
                                   data-toggle="modal"
                                   data-target="#gallery_upload"
                                >Browse Media
                                    <span class="float-right green gallery_upload"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    {!!form::close()!!}
                    <button type="submit" class="btn btn-success float-right m-3" onclick="$('#form-data').submit()">Save Changes</button>
                    @include('admin.widgets.uploader.mediaNav',$attr = ['upload_type' => 'multi', 'upload_id' => $project_type->gallery == null? 0: $project_type->gallery,'modal_name'=>'gallery_upload','section_id'=>'gallery'] )
                </div>
            </div>
        </div>
    </div>
<script>
$(document).ready(function (){
    $('#summernote').summernote({
        placeholder: 'Description',
        tabsize: 2,
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
        ]
    });
});

</script>
@endsection

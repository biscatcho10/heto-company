<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('title','Title')}}
            {{form::text('title',$project->title,['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('title','Thumbnail Image')}}
            <br>
            <a class="btn btn-light"
               style="cursor: pointer"
               data-toggle="modal"
               data-target="#thumbnail"
            >Browse Media
                <span class="float-right green thumbnail" ></span>
            </a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('title','Gallery')}}
            <br>
            <a class="btn btn-light"
            style="cursor: pointer"
            data-toggle="modal"
            data-target="#gallery_upload"
            >Browse Media
                <span class="float-right green banner gallery_upload" ></span>
            </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('categories','Category')}}
            {{ form::select('category_id', $categories, $project->category_id,['class'=>'select2 form-control templatingSelect2', "style"=>"height: 100px, width:100%"]) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('project_type','Project Type')}}
            {{ form::select('project_type_id', $project_types, $project->project_type_id,['class'=>'select2 form-control templatingSelect2', "style"=>"height: 100px, width:100%"]) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('location','Location')}}
            {{form::text('location',$project->location,['class'=>'form-control','placeholder'=>'Loaction'])}}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('seo_title','Seo Title')}}
            {{ form::text('seo_title', $project->seo_title,['class'=>'form-control','placeholder'=>'Seo Title']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('seo_description','Seo Description')}}
            {{ form::textarea('seo_description', $project->seo_description,['class'=>'form-control','placeholder'=>'Seo Description','rows'=>'1']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('seo_keywords','Seo Keywords')}}
            {{form::text('seo_keywords',$project->seo_keywords,['class'=>'form-control','placeholder'=>'Seo Keywords'])}}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {{ form::label('description','Description')}}
            {{form::textarea('description',$project->description,['class'=>'form-control','placeholder'=>'Description','rows'=>'2'])}}
        </div>
    </div>
</div>


<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {{ form::label('case_study','Case Study')}}
            <textarea class="form-control" name="case_study" id="summernote">{{$project->case_study}}</textarea>
        </div>
    </div>
</div>


<script>
    $(document).ready(function (){
        $('#summernote').summernote({
            placeholder: 'Case Study',
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

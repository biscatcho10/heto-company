<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {{ form::label('title','Title')}}
            {{form::text('title',$job->title,['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {{ form::label('description','Description')}}
            {{form::text('description',$job->description,['class'=>'form-control','placeholder'=>'Description','rows'=>'3'])}}
        </div>
    </div>
</div>




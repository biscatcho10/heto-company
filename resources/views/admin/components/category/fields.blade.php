<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {{ form::label('title','Title')}}
            {{form::text('title',$category->title,['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
    </div>
</div>




<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {{ form::label('title','Name')}}
            {{form::text('name',$product->name,['class'=>'form-control','placeholder'=>'Name'])}}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {{ form::label('title','Description')}}
            {{form::textarea('desc',$product->desc,['class'=>'form-control','placeholder'=>'Description'])}}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {{ form::label('title','Image')}}
            {{ form::file('image',['class'=>'form-control'])}}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {{ form::label('title','File')}}
            {{ form::file('file',['class'=>'form-control'])}}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('seo_title','Seo Title')}}
            {{ form::text('seo_title', $product->seo_title,['class'=>'form-control','placeholder'=>'Seo Title']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('seo_description','Seo Description')}}
            {{ form::textarea('seo_description', $product->seo_description,['class'=>'form-control','placeholder'=>'Seo Description','rows'=>'1']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('seo_keywords','Seo Keywords')}}
            {{form::text('seo_keywords',$product->seo_keywords,['class'=>'form-control','placeholder'=>'Seo Keywords'])}}
        </div>
    </div>
</div>


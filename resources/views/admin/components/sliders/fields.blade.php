<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {{ form::label('title','Title')}}
            {{form::text('title',$slider->title,['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {{ form::label('title','Sub Title')}}
            {{form::text('subtitle',$slider->subtitle,['class'=>'form-control','placeholder'=>'Sub Title'])}}
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
    @if ($slider->image != asset('heto/sliders'))
        <div class="col-sm-6">
            <div class="form-group">
                <img src="{{$slider->image}}" class="img-fluid" width="300px" height="300px">
            </div>
        </div>
    @endif
</div>

<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('seo_title','Seo Title')}}
            {{ form::text('seo_title', $slider->seo_title,['class'=>'form-control','placeholder'=>'Seo Title']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('seo_description','Seo Description')}}
            {{ form::textarea('seo_description', $slider->seo_description,['class'=>'form-control','placeholder'=>'Seo Description','rows'=>'1']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('seo_keywords','Seo Keywords')}}
            {{form::text('seo_keywords',$slider->seo_keywords,['class'=>'form-control','placeholder'=>'Seo Keywords'])}}
        </div>
    </div>
</div>


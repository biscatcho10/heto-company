<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {{ form::label('title','Name')}}
            {{form::text('name',$client->name,['class'=>'form-control','placeholder'=>'Name'])}}
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
    @if ($client->image != "http://heto.test/heto/clients")
        <div class="col-sm-6">
            <div class="form-group">
                <img src="{{$client->image}}" class="img-fluid" width="150px" height="150px">
            </div>
        </div>
    @endif
</div>

<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('title','URL')}}
            {{form::text('url',$client->url,['class'=>'form-control','placeholder'=>'URL'])}}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('seo_title','Seo Title')}}
            {{ form::text('seo_title', $client->seo_title,['class'=>'form-control','placeholder'=>'Seo Title']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('seo_description','Seo Description')}}
            {{ form::textarea('seo_description', $client->seo_description,['class'=>'form-control','placeholder'=>'Seo Description','rows'=>'1']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('seo_keywords','Seo Keywords')}}
            {{form::text('seo_keywords',$client->seo_keywords,['class'=>'form-control','placeholder'=>'Seo Keywords'])}}
        </div>
    </div>
</div>


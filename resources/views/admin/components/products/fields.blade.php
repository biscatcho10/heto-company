<div class="row">
    <div class="col-sm-8">
        <div class="form-group">
            {{ form::label('title', 'Name') }}
            {{ form::text('name', $product->name, ['class' => 'form-control', 'placeholder' => 'Name']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('title', 'Model') }}
            {{ form::text('model', $product->model, ['class' => 'form-control', 'placeholder' => 'Model']) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="form-group">
            {{ form::label('title', 'Description') }}
            {{ form::textarea('desc', $product->desc, ['class' => 'form-control', 'placeholder' => 'Description', 'rows' => '3', 'maxlength' => '134']) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {{ form::label('title', 'Image') }}
            {{ form::file('image', ['class' => 'form-control']) }}
        </div>
    </div>
    @if ($product->image != asset('heto/products'))
        <div class="col-sm-6">
            <div class="form-group">
                <img src="{{ $product->image }}" class="img-responsive" width="150px" height="150px">
            </div>
        </div>
    @endif

</div>

<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            {{ form::label('title', 'File') }}
            {{ form::file('file', ['class' => 'form-control']) }}
        </div>
    </div>

    @if ($product->file != asset('heto/products'))
        <div class="col-sm-6">
            <div class="form-group">
                <!-- preview file -->
                <a href="{{ $product->file }}" target="_blank" class="btn btn-primary" style="margin-top: 32px">
                    Preview
                </a>
            </div>
        </div>
    @endif

</div>

<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('seo_title', 'Seo Title') }}
            {{ form::text('seo_title', $product->seo_title, ['class' => 'form-control', 'placeholder' => 'Seo Title']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('seo_description', 'Seo Description') }}
            {{ form::textarea('seo_description', $product->seo_description, ['class' => 'form-control', 'placeholder' => 'Seo Description', 'rows' => '1']) }}
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            {{ form::label('seo_keywords', 'Seo Keywords') }}
            {{ form::text('seo_keywords', $product->seo_keywords, ['class' => 'form-control', 'placeholder' => 'Seo Keywords']) }}
        </div>
    </div>
</div>

@extends("admin.layouts.index")
@section("content")
    <div class="card-body">
        <h4 class="header-title">Career</h4>
        {!! form::open(['route'=>['careers.store'],'id'=>'form-data', 'method'=>"post"] ) !!}
        <div class="form-group">
            {{ form::label('full_name','Full Name')}}
            {{ form::text('full_name', null, ['class'=>'form-control', 'placeholder'=>"Enter your fullname"]) }}
        </div>
        <div class="form-group">
            {{ form::label('email','Email')}}
            {{ form::email('email', null, $attributes = array('class'=>"form-control", 'id'=>"exampleInputEmail1" ,'aria-describedby'=>"emailHelp", 'placeholder'=>"Enter email")) }}
            <small id="emailHelp" class="form-text text-muted">We'll never share your
                email with anyone else.</small>
        </div>
        <div class="form-group">
            {{ form::label('phone','Phone')}}
            {{ form::text('phone', null, ['class'=>'form-control', 'placeholder'=>"Enter phone number"]) }}
        </div>
        <div class="form-group">
            {{ form::label('jobs','Jobs')}}
            {{ form::select('job_id', $result, null,['class'=>'select2 form-control templatingSelect2', "style"=>"height: 100px, width:100%"]) }}
        </div>
        {{ form::hidden('upload_id',null, array('id' => 'upload_id')) }}
        {!!form::close()!!}
        {{ form::label('cv','Upload your CV')}}
        @include('admin.widgets.uploader.dragdrop',$attr = ['upload_type' => 'single', 'upload_id' => 0,'modal_name'=>'career','section_id'=>'upload_id'] )
        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4" onclick="$('#form-data').submit()">Submit</button>
    </div>
@endsection

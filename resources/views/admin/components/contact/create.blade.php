@extends("admin.layouts.index")
@section("content")
<div class="card-body">
    <h4 class="header-title">Contact Us</h4>
        {!! form::open(['route'=>['contacts.store'],'id'=>'form-data', 'method'=>"post"] ) !!}
        <div class="form-group">
            {{ form::label('name','Name')}}
            {{ form::text('name', null, ['class'=>'form-control', 'placeholder'=>"Enter your name"]) }}
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
            {{ form::label('message','Message')}}
            {{ form::textarea('message', null, ['class'=>'form-control','rows'=>'5', 'placeholder'=>"Enter message"]) }}
        </div>
        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4" onclick="$('#form-data').submit()">Submit</button>
    {!!form::close()!!}
</div>
@endsection

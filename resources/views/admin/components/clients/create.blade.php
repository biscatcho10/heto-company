@extends("admin.layouts.index")
@section("content")
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    {!! form::open(['route'=>['clients.store'],'id'=>'form-data', "enctype" => "multipart/form-data"] ) !!}
                    <h4 class="header-title">Client</h4>
                    @method('POST')
                    @csrf
                    @include('admin.components.clients.fields')
                    {!!form::close()!!}
                    <button type="submit" class="btn btn-success float-right m-3" onclick="$('#form-data').submit()">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection


<form action="" enctype=""></form>

@extends("admin.layouts.index")
@section("content")
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    {!! form::open(['route'=>['jobs.update',$job],'id'=>'form-data'] ) !!}
                    <h4 class="header-title">Job</h4>
                    @method('PATCH')
                    @csrf
                    @include('admin.components.job.fields')
                    {!!form::close()!!}
                    <button type="submit" class="btn btn-success float-right m-3" onclick="$('#form-data').submit()">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

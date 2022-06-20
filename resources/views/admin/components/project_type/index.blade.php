@extends("admin.layouts.index")
@section("content")
<div class="card-body">
    <div class="row">
        <div class="col-sm-10">
            <h4 class="header-title">Services Table</h4>
        </div>
        <div class="col-sm-2">
            {{-- <a href="{{ route('categories.create') }}" type="button" class="btn btn-block btn-primary btn-md">Create --}}
                {{-- Category</a> --}}
        </div>
    </div>
    <div class="single-table">
        <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
                <thead class="text-uppercase">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($project_types as $project_type)
                    <tr>
                        <th scope="row">{{$project_type->id}}</th>
                        <td>
                            <a href="{{ route('project-types.show',$project_type->id) }}">{{$project_type->title}}</a>
                        </td>
                        <td>
                            <ul class="d-flex justify-content-center">
                                <li>
                                    <a class="btn btn-info btn-sm" href="{{route('project-types.edit',$project_type->id)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

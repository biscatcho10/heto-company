@extends("admin.layouts.index")
@section("content")
<div class="card-body">
    <div class="row">
        <div class="col-sm-10">
            <h4 class="header-title">Projects Table</h4>
        </div>
        <div class="col-sm-2">
            <a href="{{ route('projects.create') }}" type="button" class="btn btn-block btn-primary btn-md">Create
                Project</a>
        </div>
    </div>
    <div class="single-table">
        <div class="table-responsive">
            <table class="table table-hover progress-table text-center">
                <thead class="text-uppercase">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    {{-- <th scope="col">Description</th> --}}
                    <th scope="col">Thumbnail image</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($projects as $project)
                    <tr>
                        <th scope="row">{{$project->id}}</th>
                        <td>{{$project->name}}</td>
                        <td>{{$project->title}}</td>
                        <td>{{$project->description}}</td>
                        <td>{{$project->thumbnail_image}}</td>
                        <td>
                            <ul class="d-flex justify-content-center">
                                <li>
                                    <a class="btn btn-info btn-sm" href="{{route('projects.edit',$project->id)}}">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        Edit
                                    </a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('projects.destroy', $project->id ) }}">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                </li>
                                <li>
                                    <button type="button"
                                    class="btn btn-primary btn-sm"
                                    data-toggle="modal"
                                    data-target="#moveModal{{$project->id}}"
                                    data-backdrop="static" data-keyboard="false" >
                                    Move
                                    </button>
                                    @include('admin.components.project_type.project.action_modal',$attr = ['modal_name'=>'moveModal'.$project->id,'id'=>$project->id,'project_type'=>$project->project_type_id,'action'=>'move'] )
                                </li>

                                <li>
                                    <button type="button"
                                    class="btn btn-primary btn-sm"
                                    data-toggle="modal"
                                    data-target="#copyModal{{$project->id}}"
                                    data-backdrop="static" data-keyboard="false" >
                                    Copy
                                    </button>
                                    @include('admin.components.project_type.project.action_modal',$attr = ['modal_name'=>'copyModal'.$project->id,'id'=>$project->id,'project_type'=>$project->project_type_id,'action'=>'copy'] )
                                </li>
                                <li>
                                    <button type="button"
                                    class="btn btn-primary btn-sm"
                                    data-toggle="modal"
                                    data-target="#cloneModal{{$project->id}}"
                                    data-backdrop="static" data-keyboard="false" >
                                    Clone
                                    </button>
                                    @include('admin.components.project_type.project.action_modal',$attr = ['modal_name'=>'cloneModal'.$project->id,'id'=>$project->id,'project_type'=>$project->project_type_id,'action'=>'clone'] )
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

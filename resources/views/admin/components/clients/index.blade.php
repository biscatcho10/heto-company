@extends("admin.layouts.index")
@section("content")
    <div class="card-body">
        <div class="row">
            <div class="col-sm-10">
                <h4 class="header-title">Clients Table</h4>
            </div>
            <div class="col-sm-2">
                <a href="{{ route('clients.create') }}" type="button" class="btn btn-block btn-primary btn-md">
                    Create Client
                </a>
            </div>
        </div>
        <div class="single-table">
            <div class="table-responsive">
                <table class="table table-hover progress-table text-center">
                    <thead class="text-uppercase">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $client)
                        <tr>
                            <th scope="row">{{$client->id}}</th>
                            <td>{{$client->name}}</td>
                            <td>
                                <ul class="d-flex justify-content-center">
                                    <li>
                                        <a class="btn btn-info btn-sm" href="{{route('clients.edit',$client->id)}}">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                    </li>
                                    <li>
                                        <form method="POST" action="{{ route('clients.destroy', $client->id ) }}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                Delete
                                            </button>
                                        </form>
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

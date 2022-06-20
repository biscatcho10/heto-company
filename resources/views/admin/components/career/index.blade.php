@extends("admin.layouts.index")
@section("content")
    <div class="card-body">
        <div class="row">
            <div class="col-md-8">
                <h4 class="header-title">Careers Table</h4>
            </div>
            <div class="col-md-4">
{{--                <select class="custom-select mb-2" id="filter" name="filter">--}}
{{--                    <option selected="selected">Open this select menu</option>--}}
{{--                    <option value="1">One</option>--}}
{{--                    <option value="2">Two</option>--}}
{{--                    <option value="3">Three</option>--}}
{{--                </select>--}}
            </div>
        </div>
        <div class="single-table">
            <div class="table-responsive">
                <table class="table table-hover progress-table text-center">
                    <thead class="text-uppercase">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Job Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($careers as $career)
                        <tr>
                            <th scope="row">{{$career->id}}</th>
                            <td>{{$career->full_name}}</td>
                            <td>{{$career->email}}</td>
                            <td>{{$career->phone}}</td>
                            <td>{{$career->job_title}}</td>
                            <td><span class="status-p {{$career->seen==0?'bg-warning':'bg-success'}}">{{$career->seen==0?'UnSeen':'Seen'}}</span></td>
                            <td>
                                <ul class="d-flex justify-content-center">
                                    <li>
                                        <form method="POST" action="{{ route('careers.destroy', $career->id ) }}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a class="btn btn-rounded btn-danger mb-3 text-white" role="button">Delete</a>
                                        </form>
                                    </li>
                                    <li>
                                        <a class="btn btn-rounded btn-primary mb-3" data-toggle="modal" data-target="#{{$career->id}}" role="button">Open</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        @include('admin.components.career.singleCareer',$attr = ['modal_name'=>$career->id,'data'=>$career] )
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

{{--    <script>--}}
{{--        $("#filter").change(function(){--}}
{{--            var id = $(this).val();--}}
{{--            var token = "{{csrf_token()}}";--}}

{{--            $.ajax({--}}
{{--                url: "{{route('careers.filter')}}",--}}
{{--                method: 'POST',--}}
{{--                data: { id:id, _token:token},--}}
{{--                success: function() {--}}
{{--                    location.reload();--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}

@endsection

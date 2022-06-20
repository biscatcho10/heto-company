@extends("admin.layouts.index")
@section("content")
    <div class="card-body">
        <h4 class="header-title">Banners</h4>
        <div class="single-table">
            <div class="table-responsive">
                {!! form::open(['route'=>['banners.update'],'id'=>'form-data', 'method'=>"post"] ) !!}
                <table class="table table-striped text-center">
                    <thead class="text-uppercase">
                    <tr>
                        <th scope="col">Page</th>
                        <th scope="col">Banner Images</th>
                    </tr>
                    </thead>
                    <tbody>
                    @method('POST')
                    {{csrf_field()}}
                    @foreach($banners as $banner)
                        <tr>
                            <td>
                                <label class="mt-2">{{$banner->message}}</label>
                            </td>
                            <td>
                                {{ form::hidden($banner->page_key, $banner->upload_id, array('id' => $banner->page_key)) }}
                                <a class="btn btn-light"
                                   style="cursor: pointer"
                                   data-toggle="modal"
                                   data-target="#{{$banner->message}}"
                                >Browse Media
                                    <span class="float-right green thumbnail" ></span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {!!form::close()!!}
                @foreach($banners as $banner)
                    @include('admin.widgets.uploader.mediaNav',$attr = ['upload_type' => 'single', 'upload_id' => $banner->upload_id==null?0:(int)$banner->upload_id,'modal_name'=>$banner->message,'section_id'=>$banner->page_key ])
                @endforeach
                <button type="submit" class="btn btn-success float-right mt-3" onclick="$('#form-data').submit()">Save Changes</button>
            </div>
        </div>
    </div>
@endsection

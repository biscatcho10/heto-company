@extends("admin.layouts.index")
@section("content")
    <div class="row">
                <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                {!! form::open(['route'=>['settings.update'],'id'=>'form-data', 'method'=>"post"] ) !!}
                                <h4 class="header-title">Settings</h4>
                                @csrf
                                <div class="row">
                                    @foreach($settings as $setting)
                                        <div class="col-6">
                                            @if($setting->type == 'logo')
                                                {{ form::label($setting->message,$setting->message,['class'=>'col-form-label'])}}
                                                {{ form::hidden($setting->type,$setting->value == $setting->type ? 0: $setting->value , array('id' => $setting->type)) }}
                                                <a class="btn btn-light form-control"
                                                   style="cursor: pointer"
                                                   data-toggle="modal"
                                                   data-target="#{{$setting->type}}_upload"
                                                >Browse Media
                                                    <span class="float-right green {{$setting->type}}_upload"></span>
                                                </a>
                                            @else
                                                {{ form::label($setting->message,$setting->message,['class'=>'col-form-label'])}}
                                                {{ form::text($setting->type, $setting->value, ['class'=>'form-control']) }}
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                                {!!form::close()!!}
                                @foreach($settings as $setting)
                                    @if($setting->type == 'logo')
                                        @include('admin.widgets.uploader.mediaNav',$attr = ['upload_type' => 'single', 'upload_id' => $setting->value == $setting->type ? 0: $setting->value ,'modal_name'=>$setting->type.'_upload','section_id'=>$setting->type] )
                                    @endif
                                @endforeach
                                <button type="submit" class="btn btn-success float-right mt-3" onclick="$('#form-data').submit()">Save Changes</button>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
@endsection

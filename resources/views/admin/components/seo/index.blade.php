@extends("admin.layouts.index")
@section("content")
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    {!! form::open(['route'=>['seos.update'],'id'=>'form-data', 'method'=>"post"] ) !!}
                    <h4 class="header-title">Seo</h4>
                    @csrf
                    <div class="row">
                        @foreach($seos as $seo)
                            <div class="{{ str_contains($seo->type, 'description') ? 'col-12' : 'col-6' }}">
                                    {{ form::label($seo->message,$seo->message,['class'=>'col-form-label'])}}
                                @if(str_contains($seo->type, 'description'))
                                    {{ form::textarea($seo->type, $seo->value, ['class'=>'form-control','rows'=>'2']) }}
                                @else
                                    {{ form::text($seo->type, $seo->value, ['class'=>'form-control']) }}
                                @endif

                                @if(str_contains($seo->type, 'description'))
                                    <br> <hr> <br>
                                @endif

                            </div>
                        @endforeach
                    </div>
                    {!!form::close()!!}
                    <button type="submit" class="btn btn-success float-right mt-3" onclick="$('#form-data').submit()">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

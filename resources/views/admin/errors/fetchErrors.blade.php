@if(!$errors->isEmpty())
    <div class="alert alert-danger" style="margin:15px" role="alert">
        @foreach ($errors->all() as $error)
            {{$error}} <br>
        @endforeach
    </div>
@endif

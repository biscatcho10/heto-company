@if(session("success") != null)
    @if(is_array(session("success")))
        <div class="alert alert-success" id="success-message" style="margin:15px; height:1rem" role="alert">
            @foreach (session("success") as $succ)
                {{$succ}} <br>
            @endforeach
        </div>
    @else
        <div class="alert alert-success" id="success-message" style="margin:15px" role="alert">
            {{session("success")}} <br>
        </div>
    @endif
    <script>
        $(document).ready(function(){
            $('#success-message').delay(2500).fadeOut(5000, function() { $(this).remove(); })
        });
    </script>
@endif

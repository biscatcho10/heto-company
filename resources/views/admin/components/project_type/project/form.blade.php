@if ($attr['action'] == 'move')
    {!! form::open(['route'=>['projects.move'],'id'=>'form-data-'.$attr['action'].$attr['id']] ) !!}
@else
    {!! form::open(['route'=>['projects.copy'],'id'=>'form-data-'.$attr['action'].$attr['id']] ) !!}
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@elseif(session('errors'))
    <div class="alert alert-warning">
        {{session('errors')}}
    </div>
@endif
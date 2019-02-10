@if(Session::has('success'))
<div class="alert alert-success">
    <strong>Success: </strong>{{ Session::get('success') }}
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger">
    <strong>Error: </strong>{{ Session::get('error') }}
</div>
@endif

@if(count($errors)> 0 )
<div class="alert alert-danger">
    <strong>Errors: </strong> 
    <ul>
        @foreach($errors->all() as $e)
        <li>{{ $e }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(Session::has('message'))
<div class="alert alert-message">
    <strong>Message: </strong> {{ Session::get('message') }}
</div>
@endif
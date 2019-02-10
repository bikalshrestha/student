@extends('master.layout')

@section('content')
<div class="container page-container">
    
     <ol class="breadcrumb">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li class="active"><a href="{{ $data['slug'] }}" >{{ $data['title'] }}</a></li>
    </ol>
    
    
     <h2 class="title">{{ $data['title'] }}</h2>
    {!!html_entity_decode($data['content']) !!}
</div>

@endsection

@extends('master.layout')

@section('content')
<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="#" class="active">User Profile</a></li>
        </ol>
        <h2 class="title">User Profile {{ $profile->first_name }} {{ $profile->last_name}}</h2>
        <div class="profile_info col-md-6">
            <div><span class="title">Username:</span> <span class="value">{{ $profile->username }}</span></div>
            <div><span class="title">City:</span> <span class="value">{{ $profile->profile->city }}</span></div>
            <div><span class="title">Address 1:</span> <span class="value">{{ $profile->profile->address1 }}</span></div>
            <div><span class="title">Address 12:</span> <span class="value">{{ $profile->profile->address2 }}</span></div>
            <div><span class="title">Zip / Postal Code:</span> <span class="value">{{ $profile->profile->post_code }}</span></div>
            <div><span class="title">Phone1:</span> <span class="value">{{ $profile->profile->phone1 }}</span></div>
            <div><span class="title">Phone2:</span> <span class="value">{{ $profile->profile->phone2 }}</span></div>
        </div>

@endsection

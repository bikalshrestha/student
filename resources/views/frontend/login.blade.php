@extends('master.layout')

@section('content')

<div class="container">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
            <li><a href="#" class="active">Register</a></li>
        </ol>
        <div class="col-md-6">
            <h3 class="title">Registered Customers</h2>
                {!! Form::open(['route' => 'user.login.verify']) !!}
                <div class="form-group">
                    <label for="username">Username: </label>
                    <input type="text" name="username" class="form-control username" id="username" value="" placeholder="Username" > 
                </div>

                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" name="password" class="form-control password" id="password" value="" placeholder="Password" >
                </div>
                <div class="form-group">
                    <p><a href="">Forgot Password ?</a></p>
                </div>

                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary" value="submit">Submit</button>
                </div>
                {!! Form::close() !!}
        </div>
        <div class="col-md-6">
            <h3 class="title">New Customer</h2>
                <p>Creating an account has many benefits: check out faster, keep more than one address, track orders and more.</p>
                <a href="{{ url('/register') }}" class="btn btn-primary">Create An Account</a>
        </div>
    </div>
</div>

@endsection


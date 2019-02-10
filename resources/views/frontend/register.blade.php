@extends('master.layout')

@section('content')

<div class="container">
    <div id="register_container">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#" class="active">Register</a></li>
            </ol>
            <h2 class="title">Create New Customer Account</h2>
            <div id="register_form_wrapper" class="col-md-offset-3 col-md-6 col-md-offset-3">

                {!! Form::open(['route' => 'register.process', 'id' => 'register_form', 'class' => 'validate']) !!}
                <h3 class="title">PERSONAL INFORMATION</h3>
                <div class="form-group">
                    {!! Form::label('first_name', 'First Name', ['class' => 'label'] ) !!}
                    {!! Form::text('first_name', '', ['class' => 'form-control first_name', 'id' => 'first_name', 'placeholder' => 'First Name']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('last_name', 'Last Name', ['class' => 'label'] ) !!}
                    {!! Form::text('last_name', '', ['class' => 'form-control last_name', 'id' => 'last_name', 'placeholder' => 'Last Name']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('username', 'Userame', ['class' => 'label'] ) !!}
                    {!! Form::text('username', '', ['class' => 'form-control username', 'id' => 'username', 'placeholder' => 'Username']) !!}
                </div>

                <h3 class="title">ADDRESS INFORMATION</h3>
                <div class="form-group">
                    {!! Form::label('street_address1', 'Street Address 1', ['class' => 'label'] ) !!}
                    {!! Form::text('street_address1', '', ['class' => 'form-control street_address1', 'id' => 'street_address1', 'placeholder' => 'Street Address']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('street_address12', 'Street Address 2', ['class' => 'label'] ) !!}
                    {!! Form::text('street_address2', '', ['class' => 'form-control street_address2', 'id' => 'street_address2', 'placeholder' => 'Street Address 2']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('country', 'Country', ['class' => 'label'] ) !!}
                    {!! Form::select('country', $countries, '', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('state', 'State', ['class' => 'label'] ) !!}
                    {!! Form::select('state', $states, '', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('city', 'City', ['class' => 'label'] ) !!}
                    {!! Form::text('city', '', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('postcode', 'Zip / Postal Code', ['class' => 'label'] ) !!}
                    {!! Form::text('postcode', '', ['class' => 'form-control postcode', 'id' => 'postcode', 'placeholder' => 'Post Code']) !!}
                </div>


                <h3 class="title">SIGN-IN INFORMATION</h3>
                <div class="form-group">
                    {!! Form::label('email', 'email', ['class' => 'label'] ) !!}
                    {!! Form::email('email', '', ['class' => 'form-control email', 'id' => 'email', 'placeholder' => 'Email']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Password', ['class' => 'label'] ) !!}
                    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password', 'id'=>'password']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('confirm_password', 'Confirm Password', ['class' => 'label'] ) !!}
                    {!! Form::password('repassword', ['class' => 'form-control repassword', 'id' => 'repassword', 'placeholder' => 'Confirm Password']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('submit', ['class' => 'btn btn-primary right']) !!}
                </div>


                {!! Form::close()!!}


            </div>
        </div>
    </div>  
</div>

@endsection


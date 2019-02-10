@extends('master.layout')

@section('content')
<section id="contact">
    <div class="container">
        <div id="register_container">

            <ol class="breadcrumb">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="#" class="active">Contact</a></li>
            </ol>
            <div class="row">
                <div id="contact_form_wrapper" class="col-md-8">
                    {!! Form::open(['route' => 'contact.process', 'id' => 'contact_form', 'class' => 'validate']) !!}
                    <h3 class="title"> Contact us </h3>
                    <div class="form-group">
                        {!! Form::label('name', 'Full Name', ['class' => 'label'] ) !!}
                        {!! Form::text('name', '', ['class' => 'form-control name', 'id' => 'name', 'placeholder' => 'Name']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Email', ['class' => 'label'] ) !!}
                        {!! Form::text('email', '', ['class' => 'form-control email', 'id' => 'email', 'placeholder' => 'Email']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('phone', 'Phone', ['class' => 'label'] ) !!}
                        {!! Form::text('phone', '', ['class' => 'form-control phone', 'id' => 'phone', 'placeholder' => 'Phone']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('message', 'Message', ['class' => 'label'] ) !!}
                        {!! Form::textarea('message', '', ['class' => 'form-control message', 'id' => 'message', 'placeholder' => 'Message']) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('submit', ['class' => 'btn btn-primary right']) !!}
                    </div>
                    {!! Form::close()!!}
                </div>
                <div class="col-md-4 contact_right">
                    <h3 class="title">Mailing Address</h3>
                    <div><i class="fa fa-map-marker"></i><p><span>12 Bell Street, </span>Hamilton</p></div>
                    <div><i class="fa fa-phone"></i><p>+977 9841702595</p></div>
                    <div><i class="fa fa-mobile"></i><p>+977 9841702595</p></div>
                    <div><i class="fa fa-envelope"></i><p><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></p></div>
                </div>
            </div>
        </div>  
    </div>
</section>
<section id="contact_map">
    <div class="container">
        <div class="row">
            <div id="map"></div>
        </div>
    </div>
</section>

@endsection


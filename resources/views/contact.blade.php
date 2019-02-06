@extends('layouts.app')

@section('content')
<h1>Contact</h1>
    {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name:')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'John Doe'])}}
        </div>
        <div class="form-group">
            {{Form::label('email', 'E-Mail:')}}
            {{Form::text('email', '', ['class' => 'form-control','placeholder' => 'JohnDoe@email.com'])}}
        </div>
        <div class="form-group">
            {{Form::label('message', 'Message:')}}
            {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter your message'])}}
        </div>
        <div>
            {{FOrm::submit('Submit',['class'=> 'btn btn-secondary'])}}
        </div>
    {!! Form::close() !!}
@endsection

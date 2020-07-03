@extends('template')

@section('title')
    My to-do list
@endsection

@section('content')
    {!! Form::open(['url' => 'todo']) !!}
        {!! Form::text('todo', null, ['class' => 'todo', 'placeholder' => 'Add to do here']) !!}
        {!! Form::text('description', null, ['class' => 'description', 'placeholder' => 'What you have to do exactly ?']) !!}
        {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
@endsection
@extends('template')

@section('title')
    edit
@endsection

@section('content')
    <div>Modification to-do</div>
    {!! Form::model($todo,['route' => ['todo.update', $todo->id], 'method' => 'put', 'class' => 'editor']) !!}
    {!! Form::text('todo', null, ['class' => 'todoinput', 'placeholder' => 'todo']) !!}
    {!! Form::date('date', null, ['class' => 'date']) !!}
    {!! Form::submit('Update', ['class' => 'btnupdate']) !!}
    {!! Form::close() !!}
@endsection
    
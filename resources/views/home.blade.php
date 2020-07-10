@extends('template')

@section('title')
    My to-do list
@endsection

@section('content')
    <div class='content col-lg-11'>

        @if(isset($updated))
            <div class='box-edit'>
                <p>Edit une tâche</p>
                {!! Form::model($updated,['route' => ['todo.update', $updated->id], 'method' => 'put', 'class' => 'editor']) !!}
                {!! Form::text('todo', null, ['class' => 'col-lg-5 form-control todoedit', 'placeholder' => 'todo']) !!}
                {!! Form::date('date', null, ['class' => 'col-lg-5 form-control date']) !!}
                {!! Form::submit('Update', ['class' => 'btn btn-outline-primary btnupdate']) !!}
                {!! Form::close() !!}
            </div>
        @endif
        <div class='message'>
            @if(isset($message))
                <span class="alert alert-success" role="alert">
                    {!! $message !!}
                </span>
            @endif
        </div>
        
        <div class='contain-table'>
            <table class="col-lg-11">
                <thbody>
                    @foreach ($todo as $one)
                        <tr class="row">
                            <td class="todo col-lg-9">
                                {!! $one->todo !!}
                                <div>
                                    @if($one->date == date('Y-m-d'))
                                        <p class="badge badge-success">Aujourd' hui</p>
                                    @elseif($one->date == date('Y-m-d',strtotime('+1 day')))
                                        <p class="badge badge-warning">Demain</p>
                                    @elseif($one->date < date('Y-m-d'))
                                        <p class="badge badge-danger">Manqué</p>
                                    @else
                                        <p style='color: rgb(60, 161, 201);'>Date : {!! $one->date !!}</p>
                                    @endif
                                </div>
                            </td>
                            <td class="col-lg-1">
                            {!! link_to_route('todo.edition', 'Editer',[$one->date, $one->id], ['class' => 'edit']) !!}
                            </td>
                            <td class="col-lg-2">
                                {!! Form::open(['method' => 'DELETE', 'route' => ['todo.destroy', $one->id]]) !!}
                                {!! Form::submit('Terminer',['class' => 'finish btn btn-outline-success', 'onclick' => 'return confirm(\'Vous confirmer avoir terminer cet tâche ?\')']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </thbody>
            </table>
        </div>
        {!! Form::open(['url' => 'todo', 'class' => 'formulaire justify-content-around offset-lg-1 col-lg-10 row']) !!}
            <div class="form-group  col-lg-3 {!! $errors->has('todo') ? 'has-error' : '' !!}">
                {!! Form::text('todo', null, ['class' => 'form-control', 'placeholder' => 'Ajouter une tâche']) !!}
                {!! $errors->first('todo', '<small class="help-block">:message</small>') !!}
            </div>
            <div class="form-group  col-lg-2 {!! $errors->has('date') ? 'has-error' : '' !!}">
                {!! Form::date('date', null, ['class' => 'form-control']) !!}
                {!! $errors->first('date', '<small class="help-block">:message</small>') !!}
            </div>
            {!! Form::submit('Ajouter',['class' => 'btn btn-outline-primary']) !!}
        {!! Form::close() !!}
        <div class='link'>
            {!! $links !!}
        </div>
    </div>
@endsection
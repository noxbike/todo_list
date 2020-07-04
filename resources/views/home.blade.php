@extends('template')

@section('title')
    My to-do list
@endsection

@section('content')
    {!! Form::open(['url' => 'todo']) !!}
        {!! Form::text('todo', null, ['class' => 'todo', 'placeholder' => 'Add to do here']) !!}
        {!! Form::text('description', null, ['class' => 'description', 'placeholder' => 'description']) !!}
        {!! Form::submit('Envoyer') !!}
    {!! Form::close() !!}
    <table class='table'>
        <thead>
			<tr>
				<th>todo</th>
				<th>description</th>
			</tr>
		</thead>
        <thbody>
        @foreach ($todo as $one)
            <tr>
                <td class="todo"><strong>{!! $one->todo !!}</strong></td>
                <td class="description"><strong>{!! $one->description !!}</strong></td>
                <td class='delete'>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['todo.destroy', $one->id]]) !!}
                    {!! Form::submit('supprimer',['class' => 'supprimer', 'onclick' => 'return confirm(\'Vraiment supprimer cet todo ?\')']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </thbody>
    </table>
    {!! $links !!}
@endsection
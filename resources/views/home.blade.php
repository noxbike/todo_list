@extends('template')

@section('title')
    My to-do list
@endsection

@section('content')
    <div class='content col-lg-6'>
    {!! Form::open(['url' => 'todo']) !!}
        {!! Form::text('todo', null, ['class' => 'todo', 'placeholder' => 'Add to do here']) !!}
        {!! Form::date('date', null, ['class' => 'date']) !!}
        {!! Form::submit('Add') !!}
    {!! Form::close() !!}
    <table class='table'>
        <thead>
			<tr>
				<th>todo</th>
				<th>date</th>
			</tr>
		</thead>
        <thbody>
        @foreach ($todo as $one)
            <tr>
                <td class="todo"><strong>{!! $one->todo !!}</strong></td>

                @if($one->date == date('Y-m-d'))
                    <td class="date"><strong>Aujourd-hui</strong></td>
                @elseif($one->date == date('Y-m-d',strtotime('+1 day')))
                    <td class="date"><strong>Demain</strong></td>
                @elseif($one->date < date('Y-m-d'))
                <td class="date"><strong>Manqué</strong></td>
                @else
                    <td class="date"><strong>{!! $one->date !!}</strong></td>
                @endif

                <td class='edit'>
                {!! link_to_route('todo.edit', 'Edit',[$one->id], ['class' =>'edit']) !!}
                </td>
                <td class='delete'>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['todo.destroy', $one->id]]) !!}
                    {!! Form::submit('Finish',['class' => 'supprimer', 'onclick' => 'return confirm(\'Vraiment supprimer cet todo ?\')']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </thbody>
    </table>
    {!! $links !!}
    </div>
@endsection
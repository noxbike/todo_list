<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
        {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css') !!}
    </head>
    <body>
        <div class='row'>
            <div class='col-lg-2'>
                <ul class='sidebar'>
                    <li>{!! link_to('date/' . date('Y-m-d') .'', 'Today',['class' => 'btn btn-xs btn-info']) !!}</li>
                    <li>{!! link_to('date/' . date('Y-m-d',strtotime('+1 day')) .'', 'Tomorrow',['class' => 'btn btn-xs btn-info']) !!}</li>
                    <li>{!! link_to('todo', 'all',['class' => 'btn btn-xs btn-info']) !!}</li>
                    <li>{!! link_to('date/' . date('Y-m-d',strtotime('-1 day')) .'', 'miss',['class' => 'btn btn-xs btn-info']) !!}</li>
                </ul>
            </div>
            @yield('content')
        </div>
    </body>
</html>
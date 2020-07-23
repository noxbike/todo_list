<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css') !!}
        {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap-theme.min.css') !!}
        {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') !!}
        {!! Html::style('css/style.css') !!}
    </head>
    <body>
        <div class='row bar-todo col-lg-12'>
            <div class='col-lg-1'>
                <p class='icon'><i class="fas fa-bars fa"></i></p>
            </div>
            <div class='col-lg-11'>
                <p>Ma liste des tâches</p>
            </div>
        </div>
        <div class='row view col-lg-12'>
            <div class='sidebar col-lg-1'>
                <ul>
                    <li>{!! link_to('todo', 'Tout') !!}</li>
                    <li>{!! link_to('todo/' . date('Y-m-d') .'/date', "Aujourd'hui") !!}</li>
                    <li>{!! link_to('todo/' . date('Y-m-d',strtotime('+1 day')) .'/date', 'Demain') !!}</li>
                    <li>{!! link_to('todo/' . date('Y-m-d',strtotime('-1 day')) .'/date', 'Manqué') !!}</li>
                </ul>
            </div>
            @yield('content')
        </div>
    </body>
</html>
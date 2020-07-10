<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>@yield('title')</title>
        {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css') !!}
        {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap-theme.min.css') !!}
        {!! Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css') !!}
        <style>

            .view, .bar-todo{
                margin:0px;
                padding:0px;
            }

            .bar-todo{
                color:white;
                font-size:1.3em;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                text-align:center;
                background-color:rgb(26, 26, 26);
            }

            .editor p{
                text-align:center;
                color:white;
            }

            .editor{
                display:flex;
                justify-content:center;
                align-items: center;
            }

            .content{
                padding:0px;
                z-index:1;
                height:94.5vh;
                background-color:rgb(30, 30, 30);
            }

            .contain-table{
                padding-top: 1%;
                display: flex;
                flex-direction: column;
                align-items: center;
                height: 70%;
            }

            .edit, .btn{
                font-size: 0.8em;
            }

            .box-edit{
                color:white;
                position:absolute;
                z-index: 2;
                display:flex;
                flex-direction:column;
                justify-content:center;
                align-items:center;
                background-color: rgba(0, 0, 0, 0.8);
                width:100%;
                height: 100%;
            }

            table{
                color:white;
            }

            .help-block{
                color:red;
            }
            
            .todo div{
                font-size: 0.8em;
            }

            .message{
                height:10%;
                width: 40%;
                margin-right: auto;
                margin-left: auto;
                padding: 2%;
            }

            .sidebar{
                height:94.5vh;
                padding:0px;
                border-right: 1px solid rgba(255, 255, 255, 0.1);
                background-color:rgb(26, 26, 26);
            }

            .formulaire{
                color: black;
                padding-top:2%;
                border-top: 1px solid rgba(255, 255, 255, 0.1);
            }

            ul{
                padding:0px;
                list-style:none;
                display:flex;
                height:50%;
                flex-direction:column;
            }

            li{
                height: 2.2em;
                line-height:2em;
                text-align:center;
                border-bottom: 0.5px solid rgba(255, 255, 255, 0.1);
                border-top: 1px solid rgba(0, 0, 0, 0.2);
            }

            li:hover, a:hover, tr:hover{
                text-decoration: none;
                color:white;
                background-color:rgb(20, 20, 20);
            }

            a{
                color:gray;
            }

            .icon{
                color:white;
            }

            .pagination{
                margin-right: auto;
                margin-left: auto;
                color: white;
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                width: 15%;
            }

            .editor input{
                margin-right: 5%;
            }

            .pagination li, .pagination li:hover, .pagination li a:hover{
                border:none;
                background: none;
            }

        </style>
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
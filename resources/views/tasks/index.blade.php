<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="./resources/assets/scss/app.scss">
        {{-- <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .text-left {
                text-align: left;
            }
        </style> --}}
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <div class="container">
                <div class="title m-b-md">
                    Todo list
                </div>

                <form action="" class="form">
                    @foreach ($tasks as $task)
                        <div class="form-group">
                            <div class="form-field">
                                @switch($task->done)
                                    @case(1)
                                        <input type="checkbox" id="task-{{$task->id}}" value="1" checked>
                                        @break
                                    @case(0)
                                        <input type="checkbox" id="task-{{$task->id}}" value="0">
                                        @break
                                    @default
                                    <input type="checkbox" id="task-{{$task->id}}" value="0">
                                @endswitch
                            
                                <label for="task-{{$task->id}}">{{$task->body}}</label>
                            </div>
                        </div>
                    @endforeach  
                </form>
                
            
            </div>
        </div>
    </body>
</html>

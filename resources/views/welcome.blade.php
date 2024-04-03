<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        
    </head>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            display: flex;
            flex-direction: row;
        }
        nav {
            background-color: #D5E8E8;
            width: 250px;
        }
        main{
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .main__page-head{
            font-size: 25px;
            background: #D7E8D5;
            padding: 6px 6px;
        }
        nav > div{
            text-align: center;
            font-size: 40px;
            padding: 15px 0;
        }
        nav > ul{
            padding: 0;
            list-style: none;
        }
        nav > ul li{
            display: flex;
            align-items: center;
            text-decoration: none;
            color:black;
            font-size: 20px;
            height: 40px;
            padding: 0 0 0 15px;
        }
        nav > ul li a{
            text-decoration: none;
            color: black;
        }
        nav > ul .active{
            background: #CCD9DE;
        }
        nav > ul li:hover{
            background: #CCD9DE;
        }

        .main__box-content{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }
        .main__box-shadow{
            width: 95%;
            height: 95%;
            padding: 20px;
            background-color: white;
            box-shadow: 2px 2px 15px slategray;
            border-radius: 6px;
        }
        
    </style>
    <body>
        <nav>
            <div>
                <span>MYNOTES</span>
            </div>
            <hr>
            <ul>
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li @if (explode('/',request()->path())[0] == 'note') class = "active" @endif>
                    <a href="{{route('note.index')}}">Notes</a>
                </li>
            </ul>
        </nav>
        <main style="background: rgb(252, 247, 247)">
            <div class="main__page-head">
                @yield('title-section')
            </div>
            <div class="main__box-content">

                <div class="main__box-shadow">
                    @if ($message = Session::get('success'))
                        <div style="padding: 15px; background: green; color:white">
                            <p>{{$message}}</p>
                        </div>
                    @endif
                    @if ($message = Session::get('danger'))
                        <div style="padding: 15px; background: red; color:white">
                            <p>{{$message}}</p>
                        </div>
                    @endif
                    
                    @yield('content')
                </div>
            </div>
        </main>
    </body>
</html>

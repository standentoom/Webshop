<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Webshop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <!-- Styles -->
        <script>
$(document).ready(function(){
    $(".btn-hamburger").click(function(){
        $(".menu-hamburger").toggle();
    });
});
        /*
            $(".btn-hamburger").click(function(){
                $(".menu-hamburger").toggle();
            });*/
        </script>
        <style>
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
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .top-mid {
                padding: 25px;
                position: absolute;
                top: 100px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .text-header {
                font-size: 32px;
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

            .logo > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .btn-hamburger {
                font-size: 16px;
                color: #636b6f;
                margin-left: 30px;
                margin-top: -6px;
                padding-top: 4px;
                padding-bottom: 4px;
                padding-left: 9px;
                padding-right: 9px;
            }

            .menu-hamburger{
                display: none;
                width: 2px;
                margin-left:30px;
                margin-top: 10px;
                background-color: #e4e6e7;
            }

            .menu-hamburger > a {
                margin-left: 5px;
                margin-top: 50px;
                text-decoration: none;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-left logo">
                <button class="btn-hamburger">&#9776</button>
                <a class="logo" href="">KCB</a>
                <div class="menu-hamburger">
                    <a href="">Honda</a>
                    <a href="">Derbi</a>
                    <a href="">Zundab</a>
                    <a href="">Tomos</a>
                    <a href="">Vespa</a>
                </div>
            </div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            <div class="top-mid">
                <p class="text-header">THOMOS.</p>
            </div>

            <div class="content">
                <p>On this page youj wil see a banner and a drop down menu</p>
            </div>
        </div>
    </body>
</html>

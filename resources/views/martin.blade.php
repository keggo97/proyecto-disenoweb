<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Martín</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #0f0f0f;
            color: rgb(222, 246, 255);
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

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .texto-encabezado .titulo {
            font-weight: 700;
            font-size: 50px;
            animation: azul-neon 2s infinite alternate;
        }
        .texto-encabezado .titulo-naranja-neon,
        .texto-encabezado .icono {
            margin-bottom: 0;
            font-size: 60px;
            animation: naranja-neon 2s infinite alternate;
        }

        .texto-encabezado, .descripcion {
            margin-top: 40px;
            font-size: 20px;
        }
        /*@keyframes azul-neon {*/
        /*    0%, 10%, 15%, 20%, 30%, 35%, 40%, 50%, 55%, 60%, 70%, 75%, 80%, 85%, 90%, 100% {*/
        /*        text-shadow: 9px 9px 18px #2fff31,*/
        /*        3px 3px 5px #006c0a,*/
        /*        -3px -3px 5px #006c0a,*/
        /*        -9px -9px 27px #2fff31;*/
        /*    }*/

        /*    10%, 15%, 60% {*/
        /*        text-shadow: none;*/
        /*    }*/
        /*}*/
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

        <header class="contenido-encabezado" id="contenido-encabezado">
            <div class="texto-encabezado">
                <h1 class="titulo">
                    Martín<br>
                </h1>
            </div>
        </header>
</div>
</body>
</html>

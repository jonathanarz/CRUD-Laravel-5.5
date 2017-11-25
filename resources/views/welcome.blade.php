<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
        </style>
        <script>
          $(document).ready(function(){
            $('.carousel').carousel();
          });
        </script>
    </head>
    <body style="background-color:#eeeeee">
      <div class="jumbotron" style="background-color:#2b3c51">
        <div class="container">
          <div>
            <br>
              <h1 style="display:inline; color:white;text-decoration:underline;font-style: italic;font-size:35px">KNOWLEDGE SOCIETY AND QUALITY OF LIFE</h1>
                @if (Route::has('login'))
                  @auth
                      <a class="right links" href="{{ url('/home') }}"><i class="small material-icons">home</i></a>
                  @else
                      <a class="right links" href="{{ route('register') }}"><i class="medium material-icons" style="color:white">person_add</i></a>
                      <a class="right links" style="color:#2b3c51">__</a>
                      <a class="right links" href="{{ route('login') }}"><i class="medium material-icons" style="color:white">slideshow</i></a>
                  @endauth
                @endif
                <br><br><br>
          </div>
        </div>
      </div>
      <div style="background-color:#eeeeee">
        <br>
      </div>
      <nav style="background-color:#cf2a27">
        <div class="nav-wrapper">
          <ul class="left hide-on-med-and-down">
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Números anteriores</a></li>
            <li><a href="#">Guía de autores</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
          <ul class="right">
            <li><i class="small material-icons" style="color:white;margin-left: -10%;">search</i></li>
            <li><p style="display:inline;margin-left: -10%;">Buscar </p></li>
            <li><input class="browser-default" type="text" style="margin-left: -10%;"></input>
            <li><input class="browser-default" type="text"></input>
          </ul>
        </div>
      </nav>
      <br>
      <div style="background-color:white" class="valign-wrapper">
        <div class="carousel">
          <a class="carousel-item" href="#one!"><img src="https://lorempixel.com/250/250/nature/1"></a>
          <a class="carousel-item" href="#two!"><img src="https://lorempixel.com/250/250/nature/2"></a>
          <a class="carousel-item" href="#three!"><img src="https://lorempixel.com/250/250/nature/3"></a>
          <a class="carousel-item" href="#four!"><img src="https://lorempixel.com/250/250/nature/4"></a>
          <a class="carousel-item" href="#five!"><img src="https://lorempixel.com/250/250/nature/5"></a>
        </div>
      </div>
    </body>
</html>

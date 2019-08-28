<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/Latinder Logo mobile.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Latinder</title>
    <script src="https://kit.fontawesome.com/8ac21f36ef.js"></script>

    <style>
        /* BACKGROUND */
        body{
            overflow-x: hidden;
            width: 100%;
            height:100%;
            background-image: url("images/backgroundGradient.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size:cover;
        }

        @media screen and (min-width: 1440px){
            #ul{
                margin-left: 25%;
                transform: translateX(-10%);
            }
        }



    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light text-bg " style="height: 100px">
        <a class="navbar-brand" href="#">
            <img src="images/Latinder logo.png" width="250px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse"  id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="ul" >
                <li class="nav-item">
                    <a class="nav-link" href="/home"><h4 style="font-family: 'Roboto', sans-serif;">HOME</h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/perfil"><h4 style="font-family: 'Roboto', sans-serif;">PERFIL</h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/cuidados_basicos"><h4 style="font-family: 'Roboto', sans-serif;">CUIDADOS BÁSICOS</h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/direitos_dos_animais"><h4 style="font-family: 'Roboto', sans-serif;">DIREITO DOS ANIMAIS</h4></a>
                </li>
            </ul>

        </div>


    </nav>
    @yield('content')


</body>
</html>

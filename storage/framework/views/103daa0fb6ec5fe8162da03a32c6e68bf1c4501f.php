<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/Latinder Logo mobile.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8ac21f36ef.js"></script>

    <title>Latinder</title>
    <script src="https://kit.fontawesome.com/8ac21f36ef.js"></script>


    <style>
        /* BACKGROUND */
        body{
            width: 100%;
            height:100%;
            background-image: url("images/backgroundGradient.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size:cover;
        }

        @media  screen and (min-width: 1440px){
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

    <div class="collapse navbar-collapse bg-light text-center p-2" style="z-index: 10" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" id="ul" >
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route("timeLine")); ?>"><h4 style="font-family: 'Roboto', sans-serif;">HOME</h4></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route("cadastrar")); ?>"><h4 style="font-family: 'Roboto', sans-serif;">PERFIL</h4></a>
            </li>

            <?php if($Usuario->perfil > 1): ?>


            <li class="nav-item">
                <a class="nav-link" href="/gerenciar_entidades"><h4 style="font-family: 'Roboto', sans-serif;">ENTIDADES</h4></a>
            </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="/cuidados_basicos"><h4 style="font-family: 'Roboto', sans-serif;">CUIDADOS BÁSICOS</h4></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/direitos_dos_animais"><h4 style="font-family: 'Roboto', sans-serif;">DIREITO DOS ANIMAIS</h4></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo e(route("sair")); ?>"><h4 style="font-family: 'Roboto', sans-serif;">SAIR</h4></a>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0  d-flex justify-content-center">
            <input class="form-control mr-sm-2 col-sm-8 " type="search" placeholder="Insira os dados">
            <button class="btn btn-outline-primary my-2 my-sm-0 " type="submit"><i class="fas fa-search"></i></button>
        </form>
    </div>


</nav>
<div style="margin-top: 100px"></div>
<?php echo $__env->yieldContent('content'); ?>


</body>
</html>
<?php /**PATH C:\pogramas\latinder\resources\views//layouts/padraohome.blade.php ENDPATH**/ ?>
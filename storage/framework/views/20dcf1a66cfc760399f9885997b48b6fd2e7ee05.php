<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../../images/Latinder Logo mobile.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
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
            overflow-x: hidden;
            width: 100%;
            height:100%;
            background-image: url("../../images/backgroundGradient.png");
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size:cover;
        }





    </style>
</head>
<body>
<header class="sticky-top container p-0 col-12">
    <nav class="col-12 navbar navbar-expand-lg navbar-light bg-white text-bg " id="myHeader" style="height: 150px; width: 100%;">
        <a class="navbar-brand" href="#">
            <img src="../../images/Latinder logo.png" width="250px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center bg-white " style="z-index: 10" id="navbarTogglerDemo02">
            <ul class="navbar-nav" id="ul" >
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route("timeLine")); ?>"><h4 style="font-family: 'Roboto', sans-serif;">HOME</h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route("cadastrar")); ?>"><h4 style="font-family: 'Roboto', sans-serif;">PERFIL</h4></a>
                </li>
                <?php if($usuario->perfil > 1): ?>
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
                    <a class="nav-link" href="/conversas"><h4 style="font-family: 'Roboto', sans-serif;">CHAT</h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route("sair")); ?>"><h4 style="font-family: 'Roboto', sans-serif;">SAIR</h4></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ">
                        <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#collapseForm" aria-expanded="false" aria-controls="collapseForm">
                            <i class="fas fa-filter"></i>
                        </button>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="collapse" id="collapseForm">
        <div class="card card-body ">
            <form class="form-inline" method="post" action="<?php echo e(route("filtro")); ?>">
                <?php echo csrf_field(); ?>
                <label for="raca"  class="mr-2">Raça</label>
                <select  name="raca" class="form-control d-inline mr-2">
                    <option value="0">Qualquer raça</option>
                    <?php $__currentLoopData = $racas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $raca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($raca->id); ?>"><?php echo e($raca->nome); ?></option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <label for="porte" class="mr-2">Porte</label>
                <select name="porte" class="form-control mr-2" id="porte">
                    <option value="0">Qualquer porte</option>
                    <option value="pequeno">Pequeno</option>
                    <option value="medio">Médio</option>
                    <option value="grande">Grande</option>
                </select>

                <label for="sexo" class="mr-2">Sexo</label>
                <select name="sexo" class="form-control mr-2" id="sexo">
                    <option value="0">Qualquer sexo</option>
                    <option value="femea">Femea</option>
                    <option value="macho">Macho</option>
                </select>

                <label for="cor"class="mr-2">Cor</label>
                <select name="cor" class="form-control mr-2" id="cor">
                    <option value="0">Qualquer Cor</option>
                    <option value="preto">preto</option>
                    <option value="branco">branco</option>
                    <option value="dourado">dourado</option>
                    <option value="creme">creme</option>
                    <option value="amarelo">amarelo</option>
                    <option value="chocolate">chocolate</option>
                    <option value="mestico">mestiço</option>
                </select>

                <label for="pelagem"class="mr-2">Pelagem</label>
                <select name="pelagem" class="form-control mr-2" id="pelagem">
                    <option value="0">Qualquer pelagem</option>
                    <option value="curto">curto</option>
                    <option value="medio">médio</option>
                    <option value="longo">longo</option>
                </select>

                <input type="submit" class="btn btn-block btn-outline-primary mt-2" value="Procurar">
            </form>
        </div>
</header>

</div>
    <?php echo $__env->yieldContent('content'); ?>


</body>
</html>
<?php /**PATH C:\pogramas\latinder\resources\views//layouts/padrao.blade.php ENDPATH**/ ?>
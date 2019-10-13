<?php $__env->startSection('content'); ?>
    <style>
        .butn-cad{width: 12%; background-image: url(../imgs/icons/cadastrar.png);background-repeat: no-repeat; background-size: cover; position: fixed;bottom: 5%;right: 5%;z-index: 5;opacity:0.5;}
        .butn-cad:hover{opacity: 1}
        .tag{
            border-style: solid;
            border-width: 2px;
            border-radius: 10px;
            padding: 2px 3px;
            border-color:  #0083ff;
            color: black;
        }
    </style>
    <a href="<?php echo e(route("animal.create")); ?>"> <img class="butn-cad" src="../images/cadastrar.png" width="100px"; alt="Cadastrar animal"> </a>
    <?php $__currentLoopData = $publicacoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publicacao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <!-- INICIO DO CORPO DA POSTAGEM -->
            <div class="col-md-8 col-sm-10 col-lg-7 col-11 bg-light rounded shadow mt-md-2 mt-2 mb-1">
                <div class="col-12 text-muted p-2">
                    <img class="rounded-circle border text" src="<?php echo e($publicacao->usuario->imagem); ?>" width="80px">
                    <a class="ml-3 mt-5" style="font-family: 'Roboto', sans-serif; font-size:30px "><?php echo e($publicacao->usuario->nome); ?></a>
                </div>
                <div class="rounded">
                    <img src="<?php echo e($publicacao->animal->imagem); ?>" class="rounded" width="100%">
                </div>
                <div class="mt-3">
                    <a class="tag">Pelagem é <?php echo e($publicacao->animal->pelagem); ?></a>
                    <a class="tag"> É vacinado? <?php echo e($publicacao->animal->vacinacao); ?></a>
                    <a class="tag">Seu porte é <?php echo e($publicacao->animal->porte); ?></a>
                    <a class="tag">Seu pelo é <?php echo e($publicacao->animal->cor); ?></a>
                    <a class="tag"><?php echo e($publicacao->animal->sexo); ?></a>
                    <a class="tag">É castrado? <?php echo e($publicacao->animal->catracao); ?></a>
                    <div class="mt-3 pb-2">
                        <a><?php echo e($publicacao->animal->descricao); ?></a>
                    </div>
                    <div class="mt-3 pb-2">
                        <a><?php echo e($publicacao->animal->endereco->rua); ?></a>
                    </div>
                </div>
            </div>
            <!-- INICIO DO CORPO DA POSTAGEM -->

        </div>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('/layouts/padraohome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views//home.blade.php ENDPATH**/ ?>
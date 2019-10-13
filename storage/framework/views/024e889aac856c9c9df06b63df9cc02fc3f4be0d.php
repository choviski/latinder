<?php $__env->startSection("content"); ?>
    <style>
        .tag{
            border-style: solid;
            border-width: 2px;
            border-radius: 10px;
            padding: 2px 3px;
            border-color:  #0083ff;
            color: black;
        }
    </style>
    <div class="row">
        <div class="col-4 col-md-2 text-center bg-light border-top border-bottom border-right p-2   ">
            <img src="<?php echo e($usuario->imagem); ?>" class="rounded-circle border" width="80px">
            <p class="font-weight-bold"><?php echo e($usuario->nome); ?></p>
        </div>
        <div class="col-4 col-md-5 text-center bg-light border-top border-bottom border-right border p-2"><a href="<?php echo e(route("cadastrar")); ?>"><h5 class="mt-4 mt-md-3 text-muted">CADASTROS</h5></a></div>
        <div class="col-4 col-md-5 text-center bg-light border-top border-bottom border p-2"><a href="<?php echo e(route("listar")); ?>"><h5 class="mt-4 mt-md-3 text-muted "><u>INTERESSES</u></h5></a></div>
    </div>
    <!-- ============ AQUI VÃO AS POSTAGENS ============ -->
    <?php $__currentLoopData = $interesses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interesse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">

            <div class="col-md-8 col-sm-10 col-lg-7 col-11 bg-light rounded shadow mt-md-5 mt-2 mb-1">
                <div class="col-12 text-muted p-2">
                    <img class="rounded-circle border text" src=<?php echo e($interesse->publicacao->usuario->imagem); ?> width="80px">
                    <a class="ml-3 mt-5" style="font-family: 'Roboto', sans-serif; font-size:30px "><?php echo e($interesse->publicacao->usuario->nome); ?></a>
                </div>
                <div class="rounded">
                    <img src="<?php echo e($interesse->publicacao->animal->imagem); ?>" class="rounded" width="100%">
                </div>
                <div class="mt-3">
                    <div class="mt-3">
                        <a class="tag">Pelagem é <?php echo e($interesse->publicacao->animal->pelagem); ?></a>
                        <a class="tag"> É vacinado? <?php echo e($interesse->publicacao->animal->vacinacao); ?></a>
                        <a class="tag">Seu porte é <?php echo e($interesse->publicacao->animal->porte); ?></a>
                        <a class="tag">Seu pelo é <?php echo e($interesse->publicacao->animal->cor); ?></a>
                        <a class="tag"><?php echo e($interesse->publicacao->animal->sexo); ?></a>
                        <a class="tag">É castrado? <?php echo e($interesse->publicacao->animal->catracao); ?></a>
                        <div class="mt-3 pb-2">
                            <a><?php echo e($interesse->publicacao->animal->descricao); ?></a>
                        </div>
                        <div class="mt-3 pb-2">
                            <a><?php echo e($interesse->publicacao->animal->endereco->rua); ?></a>
                        </div>

                </div>
            </div>


        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts/padrao", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/perfilcominteresses.blade.php ENDPATH**/ ?>
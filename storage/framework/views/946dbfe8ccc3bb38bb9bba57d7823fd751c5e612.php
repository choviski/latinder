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
            <a  href="visitar/<?php echo e($usuario->id); ?>"> <img src="<?php echo e($usuario->imagem); ?>" class="rounded-circle border" width="80px">
                <p class="font-weight-bold"><?php echo e($usuario->nome); ?></p></a>
        </div>
        <div class="col-4 col-md-5 text-center bg-light border-top border-bottom border-right border p-2"><a href="<?php echo e(route("cadastrar")); ?>"><h5 class="mt-4 mt-md-3 text-muted"><u>CADASTROS</u></h5></a></div>
        <div class="col-4 col-md-5 text-center bg-light border-top border-bottom border p-2"><a href="<?php echo e(route("listar")); ?>"><h5 class="mt-4 mt-md-3 text-muted ">INTERESSES</h5></a></div>
    </div>
<!-- ============ AQUI VÃO AS POSTAGENS ============ -->
    <?php $__currentLoopData = $publicacaos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publicacao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="container-fluid">
            <div class="row d-flex justify-content-center">
                <div  class="col-md-8 col-sm-10 col-lg-7 col-11 bg-light rounded-right shadow mt-md-2 mt-2 mb-5" style="border-top-left-radius: 50px;border-bottom-left-radius: 50px;" >
                    <div class="col-12 mt-2 text-muted p-2">
                        <div class="border p-0 mt-1 mb-1" style="border-radius: 50px">
                            <p class="display-4 text-center">
                                <?php if($publicacao->animal->nome==""): ?>
                                    Sem nome
                                <?php else: ?>
                                    <?php echo e($publicacao->animal->nome); ?>

                                <?php endif; ?>
                            </p>
                        </div>
                        <?php if($usuario->id == $publicacao->usuario->id): ?>
                            <div class="float-right">

                                <form method="post" action="/publicacao/remover/<?php echo e($publicacao->id); ?>" onsubmit="return confirm('Tem certeza que deseja excluir essa publicacao ?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <a class="btn btn-info" href="/animal/<?php echo e($publicacao->animal->id); ?>/edit/"><i class="far fa-edit"></i></a>
                                    <button class="btn btn-danger "><i class="fas fa-trash"></i></button>
                                </form>


                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="rounded border">
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
                        <div class="mt-3 pb-2 mb-5">
                            <a><i class="fas fa-map-marker-alt"></i> <?php echo e($publicacao->animal->endereco->rua); ?></a>
                        </div>
                    </div>


                </div>
            </div>
        </div>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts/padrao", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/perfilcomcadastros.blade.php ENDPATH**/ ?>
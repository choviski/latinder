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
            <a  href="visitar/<?php echo e($amigo->id); ?>"><img src="<?php echo e($amigo->imagem); ?>" class="rounded-circle border" width="80px">
            </a>
                <p class="font-weight-bold" href="visitar/<?php echo e($amigo->id); ?>"><?php echo e($amigo->nome); ?></p>
        </div>
        <div class="col-4 col-md-5 text-center bg-light border-top border-bottom border-right border p-2"><a href="visitar/<?php echo e($amigo->id); ?>"><h5 class="mt-4 mt-md-3 text-muted">CADASTROS</h5></a></div>
        <div class="col-4 col-md-5 text-center bg-light border-top border-bottom border p-2"><a href="<?php echo e(route("interessea")); ?>"><h5 class="mt-4 mt-md-3 text-muted "><u>INTERESSES</u></h5></a></div>
    </div>
    <!-- ============ AQUI VÃO AS POSTAGENS ============ -->

    <?php $__currentLoopData = $interesses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interesse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="container-fluid">
                        <div class="row d-flex justify-content-center">

                            <div class="col-md-8 col-sm-10 col-lg-6 col-11 bg-light rounded-right shadow mt-md-2 mt-2 mb-5"
                                 style="border-top-left-radius: 50px;border-bottom-left-radius: 50px;">
                                <div class="col-12 mt-2 text-muted p-2">
                                    <a href="visitar/<?php echo e($interesse->publicacao->usuario->id); ?>"> <img class="rounded-circle border text"
                                                                                                    src="<?php echo e($interesse->publicacao->usuario->imagem); ?>"
                                                                                                    width="80px"></a>
                                    <div class="col-lg-6 col-sm-4 col-md-6 col-4 d-inline-block mt-2">
                                        <a class="ml-3 mt-5" style="font-family: 'Roboto', sans-serif; font-size:2vw;word-break: break-word "
                                           href="visitar/<?php echo e($interesse->publicacao->usuario->id); ?>"><?php echo e($interesse->publicacao->usuario->nome); ?></a>
                                    </div>
                                    <div class="d-inline-block  mt-2" style="margin-bottom: 0px">
                                        <p class="text-center ml-2" style="font-size: 3vw">
                                            <?php if($interesse->publicacao->animal->nome==""): ?>
                                                Sem nome
                                            <?php else: ?>
                                                <?php echo e($interesse->publicacao->animal->nome); ?>

                                            <?php endif; ?>
                                        </p>
                                    </div>

                                </div>
                                <?php if($usuario->id == $interesse->publicacao->usuario->id): ?>
                                    <div class="float-right">

                                        <form method="post" action="/publicacao/remover/<?php echo e($interesse->publicacao->id); ?>"
                                              onsubmit="return confirm('Tem certeza que deseja excluir essa publicacao ?')">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <a class="btn btn-info" href="/animal/<?php echo e($interesse->publicacao->animal->id); ?>/edit/"><i
                                                        class="far fa-edit"></i></a>
                                            <button class="btn btn-danger "><i class="fas fa-trash"></i></button>
                                        </form>


                                    </div>
                                <?php endif; ?>
                                <div class="rounded border" style="position: relative">
                                    <img src="<?php echo e(url($interesse->publicacao->animal->imagem)); ?>" class="rounded" width="100%"
                                         style=" min-height :300px; max-height:400px">
                                    <div class="mt-3 mt-sm-4 p-2 p-sm-0 p-md-1" style="position: absolute; bottom: -25px;">
                                        <p class="d-inline-block bg-primary text-light p-1 rounded " style="word-break: break-all;margin-top: 2px;margin-bottom: 0px">Pelagem é <?php echo e($interesse->publicacao->animal->pelagem); ?></p>
                                        <p class="d-inline-block bg-primary text-light p-1 rounded " style="word-break: break-all;margin-top: 2px;margin-bottom: 0px"> É vacinado? <?php echo e($interesse->publicacao->animal->vacinacao); ?></p>
                                        <p class="d-inline-block bg-primary text-light p-1 rounded " style="word-break: break-all;margin-top: 2px;margin-bottom: 0px">Seu porte é <?php echo e($interesse->publicacao->animal->porte); ?></p>
                                        <p class="d-inline-block bg-primary text-light p-1 rounded " style="word-break: break-all;margin-top: 2px;margin-bottom: 0px">Seu pelo é <?php echo e($interesse->publicacao->animal->cor); ?></p>
                                        <p class="d-inline-block bg-primary text-light p-1 rounded " style="word-break: break-all;margin-top: 2px;margin-bottom: 0px"><?php echo e($interesse->publicacao->animal->sexo); ?></p>
                                        <p class="d-inline-block bg-primary text-light p-1 rounded " style="word-break: break-all;margin-top: 2px;margin-bottom: 0px">É castrado? <?php echo e($interesse->publicacao->animal->catracao); ?></p>
                                        <div class="mt-3 pb-2">

                                        </div>

                                    </div>

                                </div>
                                <p class="mt-1"><b>Descrição: </b><?php echo e($interesse->publicacao->animal->descricao); ?></p>
                                <div class="mt-3 pb-2">
                                    <a><i class="fas fa-map-marker-alt"></i> <?php echo e($interesse->publicacao->animal->endereco->rua); ?>, <?php echo e($interesse->publicacao->animal->endereco->complemento); ?> | <?php echo e($interesse->publicacao->animal->endereco->cidade->nome); ?> - <?php echo e($interesse->publicacao->animal->endereco->cidade->estado); ?></a>
                                </div>
                            </div>
                        </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layouts/padrao", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/perfilinteresses.blade.php ENDPATH**/ ?>
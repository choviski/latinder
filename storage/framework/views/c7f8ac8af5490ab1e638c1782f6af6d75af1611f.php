<?php $__env->startSection('header'); ?>
    <h1 class="display-4">PUBLICAÇÃOES</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?><ul class="list-group">
    <ul class="list-group">
        <a href="<?php echo e(route("entidades")); ?>"><button class="btn btn-outline-secondary col-1 mb-2">VOLTAR</button></a>
        <?php $__currentLoopData = $publicacaos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publicacao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <li class="list-group-item align-items-center d-flex justify-content-between">ID #<?php echo e($publicacao->id); ?> |
                ID Usuário: <?php echo e($publicacao->id_usuario); ?>

                <span class="d-flex">
                    <form method="get" action="/publicacao/<?php echo e($publicacao->id); ?>">
                        <?php echo csrf_field(); ?>
                         <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                    </form>
                <form method="get" action="/publicacao/<?php echo e($publicacao->id); ?>/edit/">
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
                </form>
                <form method="post" action="/publicacao/remover/<?php echo e($publicacao->id); ?>" onsubmit="return confirm('Tem certeza que deseja excluir <?php echo e($publicacao->id); ?> ?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
                </span>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <form method="get" action="<?php echo e(route("publicacao.create")); ?>">
        <?php echo csrf_field(); ?>
        <button class="btn btn btn-outline-primary mt-2 col-1">Adicionar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/publicacao/index.blade.php ENDPATH**/ ?>
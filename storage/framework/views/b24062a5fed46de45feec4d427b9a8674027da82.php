<?php $__env->startSection('header'); ?>
    <h1 class="display-4">RELAÇÃO ENTRE USUÁRIOS</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?><ul class="list-group">
    <ul class="list-group">
        <?php $__currentLoopData = $usuarios_has_usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <li class="list-group-item align-items-center d-flex justify-content-between">ID #<?php echo e($u->id); ?> | Usuário 1: <?php echo e($u->id_usuario); ?> | Usuário 2: <?php echo e($u->id_usuario2); ?>


                <span class="d-flex">
                    <form method="get" action="/usuarios_has_usuarios/<?php echo e($u->id); ?>">
                        <?php echo csrf_field(); ?>
                         <button class="btn btn-secondary mr-1"> <i class="fas fa-eye"></i></button>
                    </form>
                <form method="get" action="/usuarios_has_usuarios/<?php echo e($u->id); ?>/edit/">
                    <?php echo csrf_field(); ?>
                    <button class="btn btn-info mr-1"> <i class="far fa-edit"></i> </button>
                </form>
                <form method="post" action="/usuarios_has_usuarios/remover/<?php echo e($u->id); ?>" onsubmit="return confirm('Tem certeza que deseja excluir <?php echo e($u->id); ?> ?')">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </form>
                </span>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <form method="get" action="<?php echo e(route("usuarios_has_usuarios.create")); ?>">
        <?php echo csrf_field(); ?>
        <button class="btn btn btn-outline-primary mt-2 ">Adicionar</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/usuarios_has_usuarios/index.blade.php ENDPATH**/ ?>
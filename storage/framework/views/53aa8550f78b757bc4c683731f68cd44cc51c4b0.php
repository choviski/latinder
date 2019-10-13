<?php $__env->startSection('header'); ?>
    <h1 class="display-4"><?php echo e($usuarios_has_usuario->id); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table class="table bg-light rounded">
        <thead style="background-color:lightskyblue">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">ID USUÁRIO 1</th>
            <th scope="col">ID USUÁRIO 2</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo e($usuarios_has_usuario->id); ?></td>
            <td><?php echo e($usuarios_has_usuario->id_usuario); ?></td>
            <td><?php echo e($usuarios_has_usuario->id_usuario2); ?></td>
            <td><?php echo e($usuarios_has_usuario->created_at); ?></td>
            <td><?php echo e($usuarios_has_usuario->updated_at); ?></td>
            <td><?php echo e($usuarios_has_usuario->deleted_at); ?></td>
        </tr>
        </tbody>
    </table>
    <a href="/usuarios_has_usuarios"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('../layouts/cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/usuarios_has_usuarios/show.blade.php ENDPATH**/ ?>
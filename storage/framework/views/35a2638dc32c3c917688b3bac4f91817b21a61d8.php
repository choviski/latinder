<?php $__env->startSection('header'); ?>
    <h1 class="display-4"><?php echo e($usuario->nome); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table class="table bg-light rounded">
        <thead style="background-color:lightskyblue">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">LOGIN</th>
            <th scope="col">SENHA</th>
            <th scope="col">E-MAIL</th>
            <th scope="col">IMAGEM</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo e($usuario->id); ?></td>
            <td><?php echo e($usuario->nome); ?></td>
            <td><?php echo e($usuario->login); ?></td>
            <td><?php echo e($usuario->senha); ?></td>
            <td><?php echo e($usuario->email); ?></td>
            <td><?php echo e($usuario->imagem); ?></td>
            <td><?php echo e($usuario->created_at); ?></td>
            <td><?php echo e($usuario->updated_at); ?></td>
            <td><?php echo e($usuario->deleted_at); ?></td>
        </tr>
        </tbody>
    </table>
    <a href="/usuario"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('../layouts/cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/usuario/show.blade.php ENDPATH**/ ?>
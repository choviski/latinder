<?php $__env->startSection('header'); ?>
    <h1 class="display-4">Publicação número: <?php echo e($publicacao->id); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table class="table bg-light rounded">
        <thead style="background-color:lightskyblue">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CONTEÚDO</th>
            <th scope="col">ID USUÁRIO</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo e($publicacao->id); ?></td>
            <td><?php echo e($publicacao->conteudo); ?></td>
            <td><?php echo e($publicacao->id_usuario); ?></td>
            <td><?php echo e($publicacao->created_at); ?></td>
            <td><?php echo e($publicacao->updated_at); ?></td>
            <td><?php echo e($publicacao->deleted_at); ?></td>
        </tr>
        </tbody>
    </table>
    <a href="/publicacao"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('../layouts/cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/publicacao/show.blade.php ENDPATH**/ ?>
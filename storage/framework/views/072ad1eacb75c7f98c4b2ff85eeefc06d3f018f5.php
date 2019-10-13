<?php $__env->startSection('header'); ?>
    <h1 class="display-4">EDITAR INTERESSE</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <form class="form-horizontal" action="<?php echo e(Route('interesse.update',['interesse'=> $interesse->id])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group bg-light p-2 rounded">
            <label  for="id_publicacao">ID Publicação:</label>

            <input type="number" class="form-control" id="id_publicacao" value="<?php echo e($interesse->id_publicacao); ?>" name="id_publicacao" required>


            <label for="id_usuario">ID Usuário:</label>

            <input type="number" class="form-control" id="id_usuario" value="<?php echo e($interesse->id_usuario); ?>" name="id_usuario" >

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/interesse/edit.blade.php ENDPATH**/ ?>
<?php $__env->startSection('header'); ?>
    <h1 class="display-4">EDITAR ESPÉCIE</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <form class="form-horizontal" action="<?php echo e(Route('especie.update',['especie'=> $especie->id])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group bg-light p-2 rounded">
            <label  for="nome">Nome:</label>

            <input type="text" class="form-control" id="nome" value="<?php echo e($especie->nome); ?>" name="nome" required>



            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/especie/edit.blade.php ENDPATH**/ ?>
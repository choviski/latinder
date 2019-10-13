<?php $__env->startSection('header'); ?>
    <h1 class="display-4">EDITAR CIDADE</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <form class="form-horizontal" action="<?php echo e(Route('cidade.update',['cidade'=> $cidade->id])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group bg-light p-2 rounded">

            <label  for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" value="<?php echo e($cidade->nome); ?>" name="nome" required>

            <label  for="estado">Estado:</label>
            <input type="text" class="form-control" id="estado" value="<?php echo e($cidade->estado); ?>" name="estado" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/cidade/edit.blade.php ENDPATH**/ ?>
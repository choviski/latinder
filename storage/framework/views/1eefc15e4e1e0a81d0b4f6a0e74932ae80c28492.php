<?php $__env->startSection('header'); ?>
    <h1 class="display-4">CADASTRO DE CIDADE</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form  action="<?php echo e(Route('cidade.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group bg-light p-2 rounded">
            <label  for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="insira o nome da cidade" name="nome" required>

            <label  for="estado">Estado:</label>
            <input type="text" class="form-control" id="estado" placeholder="insira o estado" name="estado" required>


            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/cidade/create.blade.php ENDPATH**/ ?>
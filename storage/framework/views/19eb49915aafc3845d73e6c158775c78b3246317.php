<?php $__env->startSection('header'); ?>
    <h1 class="display-4">CADASTRO DE USUARIO ANIMAL</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form  action="<?php echo e(Route('usuarioAnimal.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group bg-light p-2 rounded">
            <label  for="usuario">Id usuario:</label>
            <input type="number" class="form-control" id="usuario" placeholder="insira o id do Usuario" name="id_usuarios" required>

            <label  for="animal">Id animal:</label>
            <input type="number" class="form-control" id="animal" placeholder="insira o id do Animal" name="id_animais" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts.cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/usuarioAnimal/create.blade.php ENDPATH**/ ?>
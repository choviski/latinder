<?php $__env->startSection('header'); ?>
    <h1 class="display-4">EDITAR USUARIO ANIMAL</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <form class="form-horizontal" action="<?php echo e(Route('usuarioAnimal.update',['usuario'=> $usuario->id])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group bg-light p-2 rounded">
            <label  for="usuario">Usuario:</label>

            <input type="text" class="form-control" id="usuario" value="<?php echo e($usuario->id_usuarios); ?>" name="id_usuarios" disabled>


            <label for="animal">Animal:</label>

            <input type="text" class="form-control" id="animal" value="<?php echo e($usuario->id_animais); ?>" name="id_animais" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts.cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/usuarioAnimal/edit.blade.php ENDPATH**/ ?>
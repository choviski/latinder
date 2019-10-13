<?php $__env->startSection('header'); ?>
    <h1 class="display-4">CADASTRO DE RAÇAS</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form  action="<?php echo e(Route('usuarios_has_usuarios.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group bg-light p-2 rounded">
            <label  for="id_usuario">Id Usuario:</label>
            <input type="text" class="form-control" id="id_usuario" placeholder="insira o nome da raça" name="id_usuario" required>

            <label  for="id_usuario2">Id Usuario 2:</label>
            <input type="text" class="form-control" id="id_usuarios" placeholder="insira o nome da raça" name="id_usuario2" required>


            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/usuarios_has_usuarios/create.blade.php ENDPATH**/ ?>
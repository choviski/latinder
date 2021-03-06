<?php $__env->startSection('header'); ?>
    <h1 class="display-4">CADASTRO DE INTERESSE</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form  action="<?php echo e(Route('interesse.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group bg-light p-2 rounded">
            <label  for="id_publicacao">ID Publicação:</label>
            <input type="number" class="form-control" id="id_publicacao" placeholder="insira o id da publicação" name="id_publicacao" required>

            <label  for="id_usuario">Id da usuário:</label>
            <input type="number" class="form-control" id="id_usuario" placeholder="Insira o id do usuário" name="id_usuario" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/interesse/create.blade.php ENDPATH**/ ?>
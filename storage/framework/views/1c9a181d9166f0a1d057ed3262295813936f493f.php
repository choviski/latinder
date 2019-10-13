<?php $__env->startSection('header'); ?>
    <h1 class="display-4">CADASTRO DE RAÇAS</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form  action="<?php echo e(Route('raca.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group bg-light p-2 rounded">
            <label  for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="insira o nome da raça" name="nome" required>

            <label  for="id_especies">Id da espécie:</label>
            <input type="number" class="form-control" id="id_especies" placeholder="Insira o id da raça" name="id_especie" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/raca/create.blade.php ENDPATH**/ ?>
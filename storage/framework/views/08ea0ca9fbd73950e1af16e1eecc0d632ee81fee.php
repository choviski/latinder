<?php $__env->startSection('header'); ?>
    <h1 class="display-4">EDITAR ENDEREÇO</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <form class="form-horizontal" action="<?php echo e(Route('endereco.update',['endereco'=> $endereco->id])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group bg-light p-2 rounded">
            <label  for="rua">Rua:</label>

            <input type="text" class="form-control" id="rua" value="<?php echo e($endereco->rua); ?>" name="rua" required>


            <label for="bairro">Bairro:</label>

            <input type="text" class="form-control" id="bairro" value="<?php echo e($endereco->bairro); ?>" name="bairro" required>


            <label  for="cep">CEP:</label>

            <input type="text" class="form-control" id="cep" value="<?php echo e($endereco->cep); ?>"name="cep" required>

            <label  for="complemento">Complemento:</label>
            <input type="text" class="form-control" id="complemento" value="<?php echo e($endereco->complemento); ?>"name="complemento" required>

            <label  for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" value="<?php echo e($endereco->id_cidade); ?>"name="id_cidade" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/endereco/edit.blade.php ENDPATH**/ ?>
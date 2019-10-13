<?php $__env->startSection('header'); ?>
    <h1 class="display-4">CADASTRO DE PUBLICAÇÃO</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form  action="<?php echo e(Route('publicacao.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group bg-light p-2 rounded">
            <label  for="conteudo">Id do animal:</label>
            <input type="text" class="form-control" id="conteudo" placeholder="Insira o id do animal" name="id_animal" required>

            <label  for="id_usuario">Id do usuario:</label>
            <input type="number" class="form-control" id="id_especies" placeholder="Insira o id do usuário" name="id_usuario" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/publicacao/create.blade.php ENDPATH**/ ?>
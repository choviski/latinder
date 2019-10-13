<?php $__env->startSection('header'); ?>
    <h1 class="display-4">EDITAR PUBLICAÇÕES</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <form class="form-horizontal" action="<?php echo e(Route('publicacao.update',['publicacao'=> $publicacao->id])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group bg-light p-2 rounded">
            <label  for="conteudo">Conteúdo:</label>

            <input type="text" class="form-control" id="conteudo" value="<?php echo e($publicacao->conteudo); ?>" name="conteudo" required>


            <label for="id_usuario">Id Usuário:</label>

            <input type="number" class="form-control" id="id_usuario" value="<?php echo e($publicacao->id_usuario); ?>" name="id_usuario" >

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/publicacao/edit.blade.php ENDPATH**/ ?>
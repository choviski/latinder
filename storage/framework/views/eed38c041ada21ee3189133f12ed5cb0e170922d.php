<?php $__env->startSection('header'); ?>
    <h1 class="display-4">EDITAR MENSAGEM</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <form class="form-horizontal" action="<?php echo e(Route('mensagem.update',['mensagem'=> $mensagem->id])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group bg-light p-2 rounded">
            <label  for="conteudo">Conteudo:</label>

            <input type="text" class="form-control" id="conteudo" value="<?php echo e($mensagem->conteudo); ?>" name="conteudo" required>


            <label for="remetente">Remetente:</label>

            <input type="number" class="form-control" id="remetente" value="<?php echo e($mensagem->id_remetente); ?>" name="id_remetente" disabled>


            <label  for="destinatario">Destinatario:</label>

            <input type="number" class="form-control" id="destinatario" value="<?php echo e($mensagem->id_destinatario); ?>"name="id_destinatario" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/mensagem/edit.blade.php ENDPATH**/ ?>
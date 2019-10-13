<?php $__env->startSection('header'); ?>
    <h1 class="display-4">'CADASTRO' DE MENSAGEM</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form  action="<?php echo e(Route('mensagem.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="form-group bg-light p-2 rounded">
            <label  for="conteudo">Conteudo:</label>
            <input type="text" class="form-control" id="conteudo" placeholder="insira a sua mensagem" name="conteudo" required>

            <label  for="destinatario">Destinatario:</label>
            <input type="text" class="form-control" id="destinatario" placeholder="insira o id do destinatario" name="id_destinatario" required>


            <label for="remetente">Remetente:</label>
            <input type="text" class="form-control" id="remetente" placeholder="insira o id do remetente" name="id_remetente" required>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/mensagem/create.blade.php ENDPATH**/ ?>
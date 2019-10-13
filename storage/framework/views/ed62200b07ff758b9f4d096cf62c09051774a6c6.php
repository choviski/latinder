<?php $__env->startSection('header'); ?>
    <h1 class="display-4"><?php echo e($mensagem->conteudo); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table class="table bg-light rounded">
        <thead style="background-color:lightgreen">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">CONTEUDO</th>
            <th scope="col">DESTINATARIO</th>
            <th scope="col">REMETENTE</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo e($mensagem->id); ?></td>
            <td><?php echo e($mensagem->conteudo); ?></td>
            <td><?php echo e($mensagem->id_destinatario); ?></td>
            <td><?php echo e($mensagem->id_remetente); ?></td>
            <td><?php echo e($mensagem->created_at); ?></td>
            <td><?php echo e($mensagem->updated_at); ?></td>
            <td><?php echo e($mensagem->deleted_at); ?></td>
        </tr>
        </tbody>
    </table>
    <a href="/mensagem"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('../layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/mensagem/show.blade.php ENDPATH**/ ?>
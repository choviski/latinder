<?php $__env->startSection('header'); ?>
    <h1 class="display-4"><?php echo e($endereco->rua); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table class="table bg-light rounded">
        <thead style="background-color:lightskyblue">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">RUA</th>
            <th scope="col">BAIRRO</th>
            <th scope="col">CEP</th>
            <th scope="col">COMPLEMENTO</th>
            <th scope="col">ID_CIDADES</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo e($endereco->id); ?></td>
            <td><?php echo e($endereco->rua); ?></td>
            <td><?php echo e($endereco->bairro); ?></td>
            <td><?php echo e($endereco->cep); ?></td>
            <td><?php echo e($endereco->complemento); ?></td>
            <td><?php echo e($endereco->id_cidade); ?></td>
            <td><?php echo e($endereco->created_at); ?></td>
            <td><?php echo e($endereco->updated_at); ?></td>
            <td><?php echo e($endereco->deleted_at); ?></td>
        </tr>
        </tbody>
    </table>
    <a href="/endereco"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('../layouts.cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/endereco/show.blade.php ENDPATH**/ ?>
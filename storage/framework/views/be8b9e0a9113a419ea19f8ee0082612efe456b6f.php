<?php $__env->startSection('header'); ?>
    <h1 class="display-4"><?php echo e($animal->nome); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <table class="table bg-light rounded">
        <thead style="background-color:lightskyblue">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">RAÇA</th>
            <th scope="col">PELAGEM</th>
            <th scope="col">É VACINADO ?</th>
            <th scope="col">É CASTRADO ?</th>
            <th scope="col">PORTE</th>
            <th scope="col">SEXO</th>
            <th scope="col">COR</th>
            <th scope="col">IDADE</th>
            <th scope="col">FOTO</th>
            <th scope="col">PORTE</th>
            <th scope="col">ENDERECO</th>
            <th scope="col">CREATED_AT</th>
            <th scope="col">UPDATED_AT</th>
            <th scope="col">DELETED_AT</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?php echo e($animal->id); ?></td>
            <td><?php echo e($animal->nome); ?></td>
            <td><?php echo e($animal->id_racas); ?></td>
            <td><?php echo e($animal->pelagem); ?></td>
            <td><?php echo e($animal->vacinacao); ?></td>
            <td><?php echo e($animal->catracao); ?></td>
            <td><?php echo e($animal->porte); ?></td>
            <td><?php echo e($animal->sexo); ?></td>
            <td><?php echo e($animal->cor); ?></td>
            <td><?php echo e($animal->idade); ?></td>
            <td><?php echo e($animal->imagem); ?></td>
            <td><?php echo e($animal->porte); ?></td>
            <td><?php echo e($animal->endereco->rua); ?></td>
            <td><?php echo e($animal->created_at); ?></td>
            <td><?php echo e($animal->updated_at); ?></td>
            <td><?php echo e($animal->deleted_at); ?></td>
        </tr>
        </tbody>
    </table>
    <a href="/animal"><button class="btn btn btn-secondary mt-2 "><i class="fas fa-arrow-left"></i></button></a>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('../layouts.cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/animal/show.blade.php ENDPATH**/ ?>
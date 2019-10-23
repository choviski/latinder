<?php $__env->startSection('header'); ?>
    <h1 class="display-4">EDITAR ANIMAL</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form  action="<?php echo e(Route('animal.update',['animal'=> $animal->id])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group bg-light p-2 rounded">
            <label  for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" value="<?php echo e($animal->nome); ?>" name="nome">

            <label  for="pelagem">Pelagem:</label>
            <select name="pelagem" class="form-control" id="pelagem">
                <option value="<?php echo e($animal->pelagem); ?>">"<?php echo e($animal->pelagem); ?>"</option>
                <option value="2">curto</option>
                <option value="3">médio</option>
                <option value="1">longo</option>
            </select>

            <label  for="vacinacao">É vacinado?</label>
            <select name="vacinacao" class="form-control" id="vacinacao">
                <option value="<?php echo e($animal->vacinacao); ?>">"<?php echo e($animal->vacinacao); ?>"</option>
                <option value="1">sim</option>
                <option value="2">não</option>
                <option value="3">não sei</option>
            </select>

            <label  for="porte">Qual o porte do animal?</label>
            <select name="porte" class="form-control" id="porte">
                <option value="<?php echo e($animal->porte); ?>">"<?php echo e($animal->porte); ?>"</option>
                <option value="3">pequeno</option>
                <option value="2">médio</option>
                <option value="1">grande</option>
            </select>

            <label  for="sexo">Qual o sexo do animal?</label>
            <select name="sexo" class="form-control" id="sexo">
                <option value="<?php echo e($animal->sexo); ?>">"<?php echo e($animal->sexo); ?>"</option>
                <option value="2">feminino</option>
                <option value="1">masculino</option>
            </select>

            <label  for="catracao">É castrado?</label>
            <select name="catracao" class="form-control" id="catracao">
                <option value="<?php echo e($animal->catracao); ?>">"<?php echo e($animal->catracao); ?>"</option>
                <option value="1">sim</option>
                <option value="2">não</option>
                <option value="3">não sei</option>
            </select>

            <label  for="cor">Cor:</label>
            <select name="cor" class="form-control" id="cor">
                <option value="<?php echo e($animal->cor); ?>">"<?php echo e($animal->cor); ?>"</option>
                <option value="1">preto</option>
                <option value="2">branco</option>
                <option value="3">dourado</option>
                <option value="4">creme</option>
                <option value="5">amarelo</option>
                <option value="6">chocolate</option>
                <option value="7">mestiço</option>
            </select>

            <label  for="idade">Idade:</label>
            <input type="number" class="form-control" id="idade" name="idade" value="<?php echo e($animal->idade); ?>">

            <label  for="Imagem">Imagem:</label>
            <img
               class="border mt-2" src="../../../<?php echo e($animal->imagem); ?>"width="150px"><br>

            <label  for="descricao">Descrição:</label>
            <textarea class="form-control" id="descricao" rows="3" name="descricao" ><?php echo e($animal->descricao); ?></textarea>


            <label  for="raca">Raça:</label>
            <select class="form-control" id="raca" name="id_raca" required>
                <option selected value="<?php echo e($animal->id_raca); ?>" >Manter mesma raça</option>
                <?php $__currentLoopData = $racas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $racas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($racas->id); ?>"><?php echo e($racas->nome); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>


            <label  for="endereco">Endereco:</label>
            <select name="id_endereco" class="form-control" id="endereco">
                    <option selected value="<?php echo e($animal->id_endereco); ?>">Manter mesmo endereço</option>
                <?php $__currentLoopData = $enderecos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $endereco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($endereco->id); ?>"><?php echo e($endereco->rua); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <input type="submit" class="btn btn-primary mt-2">

        </div>
    </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts.cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/animal/edit.blade.php ENDPATH**/ ?>
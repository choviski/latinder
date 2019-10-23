<?php $__env->startSection('header'); ?>
    <h1 class="display-4">CADASTRO DE ANIMAL</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <form action="<?php echo e(Route('animar')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="form-group bg-light p-2 rounded">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="insira o nome do animal" name="nome">

            <label for="pelagem">Pelagem:</label>
            <select name="pelagem" class="form-control" id="pelagem">
                <option disabled>selecione uma pelagem</option>
                <option value="2">curto</option>
                <option value="3">médio</option>
                <option value="1">longo</option>
            </select>

            <label for="vacinacao">É vacinado?</label>
            <select name="vacinacao" class="form-control" id="vacinacao">
                <option value="1">sim</option>
                <option value="2">não</option>
                <option value="3">não sei</option>
            </select>

            <label for="porte">Qual o porte do animal?</label>
            <select name="porte" class="form-control" id="porte">
                <option value="3">pequeno</option>
                <option value="2">médio</option>
                <option value="1">grande</option>
            </select>

            <label for="sexo">Qual o sexo do animal?</label>
            <select name="sexo" class="form-control" id="sexo">
                <option value="2">femea</option>
                <option value="1">macho</option>
            </select>

            <label for="catracao">É castrado?</label>
            <select name="catracao" class="form-control" id="catracao">
                <option value="1">sim</option>
                <option value="2">não</option>
                <option value="3">não sei</option>
            </select>

            <label for="cor">Cor:</label>
            <select name="cor" class="form-control" id="cor">
                <option value="1">preto</option>
                <option value="2">branco</option>
                <option value="3">dourado</option>
                <option value="4">creme</option>
                <option value="5">amarelo</option>
                <option value="6">chocolate</option>
                <option value="7">mestiço</option>
            </select>

            <label for="idade">Idade:</label>
            <input type="number" class="form-control" id="idade"
                   placeholder="insira o idade aproximada em anos(se você não souber deixe em branco)" name="idade">

            <label for="imagem">Imagem:</label>
            <input type="file" class="form-control" id="texto" placeholder="insira uma imagem" name="imagem" required>

            <label for="descricao">Descrição:</label>
            <textarea class="form-control" id="descricao" rows="3" name="descricao" required></textarea>

            <label for="raca">Raça:</label>
            <select class="form-control" id="raca" name="id_raca" required >
                <?php $__currentLoopData = $racas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $raca): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($raca->id); ?>"><?php echo e($raca->nome); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>

            <label for="endereco">Endereco:</label>
            <select name="id_endereco" class="form-control" id="endereco">
                <option value="2">ESCOLHA UM ENDEREÇO</option>
                <?php if($enderecos!=0): ?>
                    <?php $__currentLoopData = $enderecos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $endereco): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($endereco->id); ?>">Rua: <?php echo e($endereco->rua); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>

            </select>
            <section id="faq" class="col-12  text-dark mt-2">
                <div class="container p-0 m-0 col-12">
                    <div class="row">
                        <button class="btn btn-outline-primary shadow text-dark col-sm-12 col-md-12 d-flex justify-content-left "
                                type="button" data-toggle="collapse" data-target="#faq1" aria-expanded="false"
                                aria-controls="faq1">
                            <a class="ml-2">Novo endereço <i class="fas fa-map-marker-alt"></i> <i
                                        class="mt-1 mr-2 fas fa-plus  fa-1x "> </i></a>
                        </button>
                        <div class="collapse rounded col-12" id="faq1">
                            <div class="card card-body  col-sm-12 col-md-12 rounded">
                                <div class="form-group bg-light p-2 rounded bg-success">
                                    <label for="rua">Rua:</label>
                                    <input type="text" class="form-control" id="rua" placeholder="insira o nome da rua"
                                           name="rua">

                                    <label for="bairro">Bairro:</label>
                                    <input type="text" class="form-control" id="bairro" placeholder="insira o bairro"
                                           name="bairro">

                                    <label for="compl">Complemento:</label>
                                    <input type="text" class="form-control" id="compl"
                                           placeholder="insira o complemento" name="complemento">

                                    <label for="cep">CEP:</label>
                                    <input type="text" class="form-control" id="cep" placeholder="insira o CEP"
                                           name="cep">

                                    <label for="cidade">Cidade:</label>
                                    <select name="id_cidade" class="form-control" id="cidade">
                                        <option value="2">ESCOLHA UMA CIDADE</option>
                                            <?php $__currentLoopData = $cidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cidade): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($cidade->id); ?>"><?php echo e($cidade->nome); ?> - <?php echo e($cidade->estado); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <input type="submit" class="btn btn-primary mt-2 mb-3 col-12">
        </div>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/animal/create.blade.php ENDPATH**/ ?>
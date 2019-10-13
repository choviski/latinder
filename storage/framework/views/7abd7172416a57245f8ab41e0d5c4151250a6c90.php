<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">

            <div class="col-md-8 col-sm-10 col-lg-7 col-11 pt-2 bg-light rounded shadow mt-md-5 mt-2 mb-1 text-center">
                <h4 style="font-family: 'Roboto', sans-serif; color: lightskyblue">Insira os dados do animal</h4>
                <form  action="<?php echo e(Route('animal.store')); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="form-group bg-light p-2 rounded">
                        <input type="text" class="form-control mt-3" id="nome" placeholder="insira o nome do animal" name="nome">

                        <select name="pelagem" class="form-control  mt-3" id="pelagem">
                            <option disabled>selecione uma pelagem</option>
                            <option value="2">curto</option>
                            <option value="3">médio</option>
                            <option value="1">longo</option>
                        </select>

                        <select name="vacinacao" class="form-control mt-3" id="vacinacao">
                            <option value="1">sim</option>
                            <option value="2">não</option>
                            <option value="3">não sei</option>
                        </select>

                        <select name="porte" class="form-control mt-3" id="porte">
                            <option value="3">pequeno</option>
                            <option value="2">médio</option>
                            <option value="1">grande</option>
                        </select>

                        <select name="sexo" class="form-control mt-3" id="sexo">
                            <option value="2">femea</option>
                            <option value="1">macho</option>
                        </select>

                        <select name="catracao" class="form-control mt-3" id="catracao">
                            <option value="1">sim</option>
                            <option value="2">não</option>
                            <option value="3">não sei</option>
                        </select>

                        <select name="cor" class="form-control mt-3" id="cor">
                            <option value="1">preto</option>
                            <option value="2">branco</option>
                            <option value="3">dourado</option>
                            <option value="4">creme</option>
                            <option value="5">amarelo</option>
                            <option value="6">chocolate</option>
                            <option value="7">mestiço</option>
                        </select>

                        <input type="number" class="form-control mt-3" id="idade" placeholder="insira o idade aproximada em anos(se você não souber deixe em branco)" name="idade">

                        <input type="file" class="form-control mt-3" id="imagem" placeholder="insira a Imagem" name="imagem" required>

                        <textarea class="form-control mt-3" id="descricao" rows="3" name="descricao"></textarea>


                        <input type="number" class="form-control mt-3" id="raca" placeholder="insira o id da raça" name="id_raca" required>

                        <input type="number" class="form-control mt-3" id="endereco" placeholder="insira o id do endereco" name="id_endereco" required>

                        <input type="submit" class="btn mt-5 col-sm-12" style= "background-color: lightskyblue;color: white" value="CADASTRAR ANIMAL">

                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('/layouts/padrao', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/cadastroanimal.blade.php ENDPATH**/ ?>
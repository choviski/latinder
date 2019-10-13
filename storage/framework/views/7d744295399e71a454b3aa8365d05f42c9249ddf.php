<?php $__env->startSection('header'); ?>
    <h1 class="display-4">EDITAR USUARIO</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <script>
        function imagem1() {
            document.getElementById("imagem").value = "../../../imgs_perfil/foto_perfil1.png";
        }
        function imagem2() {
            document.getElementById("imagem").value = "../../../imgs_perfil/foto_perfil2.png";
        }

    </script>
    <form class="form-horizontal" action="<?php echo e(Route('usuario.update',['usuario'=> $usuario->id])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group bg-light p-2 rounded">

            <label  for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" value="<?php echo e($usuario->nome); ?>" name="nome" required>

            <label  for="login">Login:</label>
            <input type="text" class="form-control" id="login" value="<?php echo e($usuario->login); ?>" name="login" required>


            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" value="<?php echo e($usuario->email); ?>" name="email" requiredS>


            <label  for="senha">Senha:</label>
            <input type="password" class="form-control" id="senha" value="<?php echo e($usuario->senha); ?>"name="senha" required>

            <label  for="perfil">Perfil:</label>
            <input type="number" min="1" max="2" class="form-control" id="perfil" value="<?php echo e($usuario->perfil); ?>"name="perfil" required>

            <p class="text-center mt-1 font-weight-bold">Foto de perfil:</p>
            <div class="d-flex justify-content-center">
                <a onclick="imagem1()" class="col-md-5 col-sm-12 mt-1  btn btn-light rounded">
                    <div class="view overlay zoom" >
                        <img class="img-fluid rounded-circle " src="../../../imgs_perfil/foto_perfil1.png"  width="200px">
                    </div>
                </a>
                <a onclick="imagem2()" class="col-md-5 col-sm-12 mt-1  btn btn-light rounded">
                    <div class="view overlay zoom" >
                        <img class="img-fluid rounded-circle " src="../../../imgs_perfil/foto_perfil2.png"  width="200px">
                    </div>
                </a>
            </div>
            <input type="hidden" class="form-control"  id="imagem" value="<?php echo e($usuario->imagem); ?>" name="imagem">


            <input type="submit" class="btn-block btn-primary mt-2 ">

        </div>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('../layouts/cruds', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/usuario/edit.blade.php ENDPATH**/ ?>
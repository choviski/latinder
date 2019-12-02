<?php $__env->startSection('content'); ?>
<div class=" p-2 bg-light rounded shadow text-center">
    <form action="/login" method="post" class="form-group ">
        <?php echo csrf_field(); ?>
        <input type="text" name="login" class="form-control mt-2" placeholder="Login" required>
        <input type="password" name="senha" class="form-control mt-2" placeholder="Senha" required>
        <input type="submit" value="Entrar" class="btn-block btn-primary rounded mt-2">
        <a href="esqueceu">Esqueci minha senha</a>
    </form>
    <a href="<?php echo e(route('cadastroUsuario')); ?>"><button  class="btn-block btn-primary rounded">Cadastrar-se</button></a>
    <?php if(!empty($mensagem)): ?>
        <div class="alert alert-danger mt-2">
            <?php echo e($mensagem); ?>

        </div>
    <?php endif; ?>
    <?php if(!empty($criado)): ?>
        <div class="alert alert-success mt-2">
            <?php echo e($criado); ?>

        </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('/layouts/iniciais', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/welcome.blade.php ENDPATH**/ ?>
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>

<?php $__env->startSection('content'); ?>
    <style>
        .butn-cad{width: 12%; background-image: url(../imgs/icons/cadastrar.png);background-repeat: no-repeat; background-size: cover; position: fixed;bottom: 5%;right: 5%;z-index: 5;opacity:0.5;}
        .butn-cad:hover{opacity: 1}
        .tag{
            border-style: solid;
            border-width: 2px;
            border-radius: 10px;
            padding: 2px 3px;
            border-color:  #0083ff;
            color: black;
        }
    </style>
    <a href="<?php echo e(route("animal.create")); ?>"> <img class="butn-cad" src="../images/cadastrar.png" width="100px"; alt="Cadastrar animal"> </a>
    <?php $__currentLoopData = $publicacoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publicacao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <!-- INICIO DO CORPO DA POSTAGEM -->
            <div  class="col-md-8 col-sm-10 col-lg-7 col-11 bg-light rounded-right shadow mt-md-2 mt-2 mb-5" style="border-top-left-radius: 50px;border-bottom-left-radius: 50px;" >
                <div class="col-12 mt-2 text-muted p-2">
                    <img class="rounded-circle border text" src="<?php echo e($publicacao->usuario->imagem); ?>" width="80px">
                    <a class="ml-3 mt-5" style="font-family: 'Roboto', sans-serif; font-size:30px "><?php echo e($publicacao->usuario->nome); ?></a>
                    <div class="border p-0 mt-1 mb-1" style="border-radius: 50px">
                    <p class="display-4 text-center"><?php echo e($publicacao->animal->nome); ?></p>
                    </div>
                    <p class="text-right"> <i class="fas fa-clock mb-1 mr-1"></i> <?php echo e($publicacao->tempo); ?></p>
                    <?php if($Usuario->id == $publicacao->usuario->id): ?>
                        <div class="float-right">

                            <form method="post" action="/publicacao/remover/<?php echo e($publicacao->id); ?>" onsubmit="return confirm('Tem certeza que deseja excluir essa publicacao ?')">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <a class="btn btn-info" href="/animal/<?php echo e($publicacao->animal->id); ?>/edit/"><i class="far fa-edit"></i></a>
                                <button class="btn btn-danger "><i class="fas fa-trash"></i></button>
                            </form>


                     </div>
                    <?php endif; ?>
                </div>

                <div class="rounded border">
                    <img src="<?php echo e($publicacao->animal->imagem); ?>" class="rounded" width="100%">
                </div>

                <div class="mt-3">
                    <a class="tag">Pelagem é <?php echo e($publicacao->animal->pelagem); ?></a>
                    <a class="tag"> É vacinado? <?php echo e($publicacao->animal->vacinacao); ?></a>
                    <a class="tag">Seu porte é <?php echo e($publicacao->animal->porte); ?></a>
                    <a class="tag">Seu pelo é <?php echo e($publicacao->animal->cor); ?></a>
                    <a class="tag"><?php echo e($publicacao->animal->sexo); ?></a>
                    <a class="tag">É castrado? <?php echo e($publicacao->animal->catracao); ?></a>
                    <div class="mt-3 pb-2">
                        <a><?php echo e($publicacao->animal->descricao); ?></a>
                    </div>
                    <div class="mt-3 pb-2">
                        <a><i class="fas fa-map-marker-alt"></i> <?php echo e($publicacao->animal->endereco->rua); ?></a>
                    </div>
                    <div class="mt-3 pb-2 ">
                        <i class="far fa-heart fa-2x border border-primary rounded-circle p-2" id="like<?php echo e($publicacao->id); ?>" onclick="like(<?php echo e($publicacao->id); ?>)"></i>
                       <?php $__currentLoopData = $interesses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $interesse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($interesse->id_publicacao == $publicacao->id && $Usuario->id == $interesse->id_usuario): ?>
                                <i class="fas fa-heart fa-2x border border-primary rounded-circle p-2"></i>
                                    <script>
                                        $("#like<?php echo e($publicacao->id); ?>").remove();
                                    </script>
                                <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>




                        <hr>
                        <div id="divComentarios<?php echo e($publicacao->id); ?>" class="p-2">

                            <?php $__currentLoopData = $comentarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comentario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($comentario->id_publicacao == $publicacao->id): ?>
                                    <div class="row">
                                        <div class="col-12 border p-1  mt-1" style="border-radius: 50px">
                                            <img src="<?php echo e($comentario->usuario->imagem); ?>" width="50px" class="rounded-circle ">
                                            <a class=""><b><?php echo e($comentario->usuario->nome); ?></b>: <?php echo e($comentario->conteudo); ?></a>
                                        </div>
                                    </div>
                                <?php endif; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>

                        <?php echo csrf_field(); ?>
                        <input type="hidden" value="<?php echo e($publicacao->id); ?>" name="publicacao" id="id<?php echo e($publicacao->id); ?>">
                            <textarea class="rounded w-100" placeholder="Insira seu comentario aqui....." style="height: 150px;resize: none" name="conteudo" id="conteudo<?php echo e($publicacao->id); ?>"></textarea>
                        <input type="submit" value="Comentar" class="btn btn-outline-primary mb-5 col-sm-12 col-md-12 col-lg-12" onclick="comentar(<?php echo e($publicacao->id); ?>)">
                </div>
            </div>



        </div>
    </div>
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"
>
    </script>
        <script>
    function like(id){
        var publicacao = $('#id'+id).val();
        $.ajax({
            url:'/interesses/'+publicacao,
        }).done(
            function () {
                document.getElementById("like"+id).classList.remove("far");
                document.getElementById("like"+id).classList.add("fas");
                document.getElementById("like"+id).removeAttribute("onclick");

            }
        ).fail(
            function () {
                alert("erro");
            }
        );
    }
    function comentar(id){
        var publicacao = $('#id'+id).val();
        var conteudo = $('#conteudo'+id).val();

        $.ajax({
            url:'/comentar/'+publicacao+'/'+conteudo,
        }).done(
            function (data) {
                $("#divComentarios"+id).append(" <div class=\"row\"><div class=\"col-12 border p-1  mt-1\" style=\"border-radius: 50px\"><img src=\"<?php echo e($Usuario->imagem); ?>\" width=\"50px\" class=\"rounded-circle\"><a class='ml-1'><b><?php echo e($Usuario->nome); ?></b>: "+conteudo+" </div></div>");
                $('#conteudo'+id).val("");

            }
        ).fail(
            function () {
                alert("erro ao comentar");
            }
        );
    }
</script>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('/layouts/padraohome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\pogramas\latinder\resources\views/home.blade.php ENDPATH**/ ?>
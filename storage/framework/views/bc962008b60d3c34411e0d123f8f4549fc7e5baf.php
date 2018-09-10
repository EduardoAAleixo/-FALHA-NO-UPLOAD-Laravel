<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <!--BUTTON BACK-->
    <a href="<?php echo e(URL::route('aviso.index')); ?>" class="btn btn-default">Voltar atrás</a>

    <hr>

    <!--TITULO-->
    <h1 class="text-primary text-center"><b>Aviso "<?php echo e($aviso->assunto); ?>"</b></h1>
    <h4 class="text-center">Lista de informações do aviso com o assunto <b>"<?php echo e($aviso->assunto); ?>"</b> registados na base de dados.</h4>
    
    <hr>

    <!--TABELA-->
    <div class="table-responsive">
        <table class="table table-striped">
            <!--HEADER TABELA-->   
            <thead>
                <tr>
                    <th>Assunto do aviso</th>
                    <th>Pertence aos anos</th>
                    <th>Pertence às disciplina</th>
                </tr>
            </thead>
            <!--BODY TABELA-->
            <tbody>
                <tr>
                    <!--ASSUNTO-->
                    <td><?php echo $aviso->assunto; ?></td>
                    <!--ANO-->
                    <td><?php foreach ($aviso->anos as $ano) {
                        echo $ano->nome."<br>" ; 
                    }?></td>
                    <!--DISCIPLINA-->
                    <td><?php foreach ($aviso->disciplinas as $disciplina) {
                        echo $disciplina->nome."<br>" ; 
                    }?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
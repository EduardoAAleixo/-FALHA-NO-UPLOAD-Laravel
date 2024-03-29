<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <!--BUTTON BACK-->
    <a href="<?php echo e(URL::route('disciplina.index')); ?>" class="btn btn-default">Voltar atrás</a>

    <hr> 
    <!--TITULO-->
    <h1 class="text-primary text-center"><b>Disciplina "<?php echo e($disciplina->nome); ?>"</b></h1>
    <h4 class="text-center">Lista de informações da disciplina <b>"<?php echo e($disciplina->nome); ?>"</b> registados na BD.</h4>

    <hr>

    <!--TABELA-->
    <div class="table-responsive">
        <table class="table table-striped">
            <!--HEADER TABELA-->
            <thead>
                <tr>
                    <th>Nome da disciplina</th>
                    <th>Pertence ao ano</th>
                    <th>Lista de alunos inscritos</th>
                    <th>Professores da disciplina</th>
                </tr>
            </thead>
            <!--BODY TABELA-->
            <tbody>
                <tr>
                    <!--NOME-->
                    <td><?php echo $disciplina->nome; ?></td>
                    <!--ANO-->
                    <td><?php foreach ($disciplina->anos as $ano) {
                        echo $ano->nome."<br>" ; 
                    }?></td>
                    <!--ALUNOS-->
                    <td><?php foreach ($disciplina->alunos as $aluno) {
                        echo $aluno->nome."<br>" ; 
                    }?></td>
                    <!--PROFESSOR-->
                    <td><?php foreach ($disciplina->professores as $professor) {
                        echo $professor->nome."<br>" ; 
                    }?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
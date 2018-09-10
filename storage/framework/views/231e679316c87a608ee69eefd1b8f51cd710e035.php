<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <!--BUTTON BACK-->
    <a href="<?php echo e(URL::route('disciplina.index')); ?>" class="btn btn-default">Voltar atrás</a>

    <hr>
    <!--TITULO-->
    <h1 class="text-primary text-center"><b>Adicionar uma nova Disciplina</b></h1>
    <h4 class="text-center">Preencha toda a informação.</h4>

    <hr>

    <!--FORMULÁRIO-->
    <form action="<?php echo e(URL::route('disciplina.store')); ?>" method="POST">

        <!-- NOME -->
        <div class="form-group">
            <label for="nome" class="control-label">Nome:</label>
            
            <input type="text" id="nome" name="nome" class="form-control" required>
        </div>
    
        <!-- ETCS -->
        <div class="form-group">
            <label for="ects" class="control-label">Ects:</label>
            
            <input type="number" id="ects" name="ects" class="form-control" required>
        </div>

        <!-- ANO -->
        <div class="form-group">
            <label for="ano" class="control-label">Anos:</label>
            <select id="ano" name="ano[]" class="form-control" multiple required>
                <?php $__currentLoopData = $anos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ano): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo $ano->id; ?>"><?php echo $ano->nome; ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!--BUTTON SUBMIT -->
        <input type="submit" class="btn btn-primary" value="Inserir">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
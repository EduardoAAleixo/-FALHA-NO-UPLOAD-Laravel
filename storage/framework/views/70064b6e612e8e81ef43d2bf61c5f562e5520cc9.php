<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <!--BUTTON BACK-->
    <a href="<?php echo e(URL::route('horario.index')); ?>" class="btn btn-default">Voltar atrás</a>

    <hr>
    <!--TITULO-->
    <h1 class="text-primary text-center"><b>Editar Horário "<?php echo e($horario->id); ?>"</b></h1>
    <h4 class="text-center">Edite a informação pretendida e carregue no botão guardar.</h4>

    <hr>
    
    <!--FORMULÁRIO-->
    <form action="<?php echo e(route('horario.update', $horario->id)); ?>" method="POST">
        <input type="hidden" name="_method" value="PUT">
        
        <!--Nº HORARIO-->
        <div class="form-group">
            <label for="id" class="control-label">Nº Horario:</label>
            
            <input type="number" id="id" name="id" class="form-control" value="<?php echo e($horario->id); ?>" readonly>
        </div>

        <!--DIA-->
        <div class="form-group">
            <label for="dia" class="control-label">Dia:</label>
            <select id="dia" name="dia" class="form-control" required>
                <option value="<?php echo $horario->dia; ?>" selected><?php echo $horario->dia; ?></option>
                <option value="Segunda-feira">2ª feira</option>
                <option value="Terça-feira">3ª feira</option>
                <option value="Quarta-feira">4ª feira</option>
                <option value="Quinta-feira">5ª feira</option>
                <option value="Sexta-feira">6ª feira</option>
            </select>
        </div>

        <!--INICIO-->
        <div class="form-group">
            <label for="inicio" class="control-label">Hora de Inicio:</label>
            
            <input type="time" id="inicio" name="inicio" class="form-control" value="<?php echo $horario->inicio; ?>" required>
        </div>

        <!--FIM-->
        <div class="form-group">
            <label for="fim" class="control-label">Hora de Fim:</label>
            
            <input type="time" id="fim" name="fim" class="form-control" value="<?php echo $horario->fim; ?>" required>
        </div>

        <!--SALA-->
        <div class="form-group">
            <label for="sala" class="control-label">Sala:</label>
            <input type="text" id="sala" name="sala" class="form-control" value="<?php echo $horario->sala; ?>" required>
        </div>

        <!--DISCIPLINA-->
        <div class="form-group">
            <label for="disciplina" class="control-label">Disciplinas:</label>
            <select id="disciplina" name="disciplina" class="form-control" multiple>
                <?php $var = 1; ?>
                
                <?php echo e($var); ?>

                
                <?php $__currentLoopData = $disciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disciplina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $horario->disciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $horariodisciplina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($disciplina->id == $horariodisciplina->id): ?>
                            <option value="<?php echo $horariodisciplina->id; ?>" selected><?php echo $horariodisciplina->nome; ?></option> 
                            <?php echo e($var = 0); ?>

                            <?php break; ?>;
                        <?php else: ?>
                            <?php echo e($var = 1); ?>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if($var==1 ): ?>
                        <option value="<?php echo $disciplina->id; ?>"><?php echo $disciplina->nome; ?></option>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <!--BUTTON SUBMIT -->
        <input type="submit" class="btn btn-primary">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <!--BUTTON BACK-->
    <a href="<?php echo e(URL::route('horario.index')); ?>" class="btn btn-default">Voltar atrás</a>

    <hr>
    <!--TITULO-->
    <h1 class="text-primary text-center"><b>Adicionar um novo Horário</b></h1>
    <h4 class="text-center">Preencha toda a informação.</h4>

    <hr>

    <!--FORMULÁRIO-->
    <form action="<?php echo e(URL::route('horario.store')); ?>" method="POST">
        
        <!--DISCIPLINA-->
        <div class="form-group">
            <label for="disciplina" class="control-label">Disciplinas:</label>
            
            <select id="disciplina" name="disciplina[]" class="form-control" multiple required>
                
                <?php $__currentLoopData = $disciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disciplina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo $disciplina->id; ?>"><?php echo $disciplina->nome; ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>
        </div>

        <!--DIA-->
        <div class="form-group">
            <label for="dia" class="control-label">Dia:</label>
            <select id="dia" name="dia" class="form-control" required>
                <option value="Segunda-feira">2ª feira</option>
                <option value="Terça-feira">3ª feira</option>
                <option value="Quarta-feira">4ª feira</option>
                <option value="Quinta-feira">5ª feira</option>
                <option value="Sexta-feira">6ª feira</option>
            </select>
        </div>

        <!--INICIO-->
        <div class="form-group">
            <label for="inicio" class="control-label">Hora de Início:</label>
            <input type="time" id="inicio" name="inicio" class="form-control" required>
        </div>

        <!--FIM-->
        <div class="form-group">
            <label for="fim" class="control-label">Hora de Fim:</label>
            <input type="time" id="fim" name="fim" class="form-control" required>
        </div>

        <!--SALA-->
        <div class="form-group">
            <label for="sala" class="control-label">Sala:</label>
            <input type="text" id="sala" name="sala" class="form-control" rows="5" required>
        </div>
        
        <!--BUTTON SUBMIT -->
        <input type="submit" class="btn btn-primary" value="Inserir">
        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
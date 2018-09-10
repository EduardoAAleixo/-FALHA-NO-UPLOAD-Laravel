<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <!--BUTTON BACK-->
    <a href="<?php echo e(URL::route('estagio.index')); ?>" class="btn btn-default">Voltar atrás</a>

    <hr>    
    <!--TITULO-->
    <h1 class="text-primary text-center"><b>Editar Estágio</b> "<?php echo e($estagio->area); ?>"</h1>
    <h4 class="text-center">Edite a informação e guarde.</h4>

    <hr>

    <!--FORMULÁRIO-->
    <form action="<?php echo e(route('estagio.update', $estagio->id)); ?>" method="POST">

        <input type="hidden" name="_method" value="PUT">

        <!--Nº ESTAGIO-->
        <div class="form-group">
            <label for="id" class="control-label">Nº Estágio:</label>
            <input type="number" id="id" name="id" class="form-control" value="<?php echo e($estagio->id); ?>" readonly>
        </div>

        <!--AREA-->
        <div class="form-group">
            <label for="area" class="control-label">Area:</label>
            <input type="text" id="area" name="area" class="form-control" value="<?php echo $estagio->area; ?>" required>
        </div>

        <!--EMPRESA-->
        <div class="form-group">
            <label for="empresa" class="control-label">Empresa:</label>
            <input type="text" id="empresa" name="empresa" class="form-control" value="<?php echo $estagio->empresa; ?>">
        </div>

        <!--HORAS-->
        <div class="form-group">
            <label for="horas" class="control-label">Nº Horas:</label>
            <input type="number" id="horas" name="horas" class="form-control" value="<?php echo $estagio->horas; ?>" required>
        </div>
            
        <!--CONTACTO-->
        <div class="form-group">
            <label for="contacto" class="control-label">Contacto:</label>
            <input type="number" id="contacto" name="contacto" class="form-control" value="<?php echo $estagio->contacto; ?>" required>
        </div>

        <!--ANO-->
        <div class="form-group">
            <label for="ano" class="control-label">Ano:</label>
            <select id="ano" name="ano[]" class="form-control" multiple>
                <?php $var = 1; ?>

                <?php echo e($var); ?>

                
                <?php $__currentLoopData = $anos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ano): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $estagio->anos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estagioano): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($ano->id == $estagioano->id): ?>
                            <option value="<?php echo $estagioano->id; ?>" selected><?php echo $estagioano->nome; ?></option> 
                            <?php echo e($var = 0); ?>

                            <?php break; ?>;
                        <?php else: ?>
                            <?php echo e($var = 1); ?>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if($var==1 ): ?>
                        <option value="<?php echo $ano->id; ?>"><?php echo $ano->nome; ?></option>
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
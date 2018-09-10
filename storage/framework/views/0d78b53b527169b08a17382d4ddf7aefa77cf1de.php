<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    
    <!--BUTTON BACK-->
    <a href="<?php echo e(URL::route('professor.index')); ?>" class="btn btn-default">Voltar atrás</a>

    <hr>    
    <!--TITULO-->

    <h1 class="text-primary text-center"><b>Editar</b> professor "<?php echo e($professor->nome); ?>"</h1>
    <h4 class="text-center">Edite a informação e guarde.</h4>
    
    
   
    <hr>
    
    <!--FORMULÁRIO-->
    <form action="<?php echo e(route('professor.update', $professor->id)); ?>" method="POST">
        <input type="hidden" name="_method" value="PUT">
        
        <!--Nº DISCIPLINA-->
        <div class="form-group">
            <label for="id" class="control-label">Nº Disciplina:</label>
            <input type="text" id="id" name="id" class="form-control" value="<?php echo e($professor->id); ?>" readonly>
        </div>

        <!--NOME-->
        <div class="form-group">
            <label for="nome" class="control-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" value="<?php echo e($professor->nome); ?>">
        </div>
        
        <!--EMAIL-->  
        <div class="form-group">
            <label for="email" class="control-label">Email:</label>
            <input type="email" id="email" name="email" class="form-control" value="<?php echo e($professor->email); ?>">
        </div>
        
        <!--DISCIPLINA-->
        <div class="form-group">
            <label for="disciplina" class="control-label">Disciplina:</label>
            <select id="disciplina" name="disciplina[]" class="form-control" multiple required>
                <?php $var = 1; ?>
                
                <?php echo e($var); ?>

               
                <!--CHAMATA TABELA DISCIPLINAS-->
                <?php $__currentLoopData = $disciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disciplina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!--CHAMATA TABELA DE RELAÇÃO-->
                    <?php $__currentLoopData = $professor->disciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $professordisciplina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($disciplina->id == $professordisciplina->id): ?>
                            <option value="<?php echo $professordisciplina->id; ?>" selected><?php echo $professordisciplina->nome; ?></option> 
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
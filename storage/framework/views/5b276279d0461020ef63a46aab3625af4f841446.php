<?php $__env->startSection('content'); ?>

<div class="container-fluid">
	
	<!--BUTTON BACK-->
	<a href="<?php echo e(URL::route('aviso.index')); ?>" class="btn btn-default">Voltar atrás</a>

	<hr>
	<!--TITULO-->
	<h1 class="text-primary text-center"><b>Editar Aviso</b> "<?php echo e($aviso->id); ?>"</h1>
	<h4 class="text-center">Edite a informação e guarde</h4>

	<hr>

	<!--FORMULÁRIO-->
	<form action="<?php echo e(route('aviso.update', $aviso->id)); ?>" method="POST">
		
		<input type="hidden" name="_method" value="PUT">

		<!--Nº AVISO-->	
		<div class="form-group">
			<label for="id" class="control-label">Nº Aviso</label>
			
			<input type="number" id="id" name="id" class="form-control" value="<?php echo e($aviso->id); ?>" readonly>
		</div>

		<!--DESCRIÇÃO-->
		<div class="form-group">
			<label for="descricao" class="control-label">Descrição:</label>
			
			<textarea id="descricao" name="descricao" class="form-control" required><?php echo $aviso->descricao; ?></textarea>
		</div>

		<!--ANO-->
		<div class="form-group">
			<label for="ano" class="control-label">Ano:</label>
			<select id="ano" name="ano[]" class="form-control" multiple>
				
				<?php $var = 1; ?>

				<?php echo e($var); ?>


				<?php $__currentLoopData = $anos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ano): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<?php $__currentLoopData = $aviso->anos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $avisoano): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($ano->id == $avisoano->id): ?>
							<option value="<?php echo $avisoano->id; ?>" selected><?php echo $avisoano->nome; ?></option>

							<?php echo e($var = 0); ?>

							break;
						<?php else: ?>
							<?php echo e($var = 1); ?>

						<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php if($var==1): ?>
						<option value="<?php echo $ano->id; ?>"><?php echo $ano->nome; ?>
						</option>
					<?php endif; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>

		<!--DISCIPLINA-->		
		<div class="form-group">
            <label for="disciplina" class="control-label">Disciplina:</label>
            <select id="disciplina" name="disciplina[]" class="form-control" multiple>
                
                <?php $vdisciplina = 1; ?>
                
                <?php echo e($vdisciplina); ?>

                
                <?php $__currentLoopData = $disciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disciplina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $aviso->disciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $avisodisciplina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($disciplina->id == $avisodisciplina->id): ?>
                            
                            <option value="<?php echo $avisodisciplina->id; ?>" selected><?php echo $avisodisciplina->nome; ?></option> 
                            
                            <?php echo e($disciplina = 0); ?>

                           
                            <?php break; ?>;
                        <?php else: ?>
                            <?php echo e($vdisciplina = 1); ?>

                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if($vdisciplina==1 ): ?>
                        <option value="<?php echo $disciplina->id; ?>">
                        			   <?php echo $disciplina->nome; ?>	
                        </option>
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
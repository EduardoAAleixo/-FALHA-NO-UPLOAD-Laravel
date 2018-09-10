<?php $__env->startSection('content'); ?>

<div class="container-fluid">

	<!--BUTTON BACK-->
	<a href="<?php echo e(URL::route('ano.index')); ?>" class="btn btn-default">Voltar atrás</a>

	<hr>  

    <!--TITULO-->
    <h1 class="text-primary text-center"><b>Editar</b> "<?php echo e($ano->nome); ?>"</h1>
	<h4 class="text-center">Edite a informação pretendida e guarde</h4>

	<hr>

	<!--FORMULÁRIO-->
	<form action="<?php echo e(route('ano.update', $ano->id)); ?>" method="POST">

		<input type="hidden" name="_method" value="PUT">

		<!-- Nº ANO-->
		<div class="form-group">
			<label for="id" class="control-label">Nº Ano:</label>

			<input type="text" id="id" name="id" class="form-control" value="<?php echo e($ano->id); ?>" readonly>
		</div>

		<!-- DISCIPLINAS -->
		<div class="form-group">
			<label for="disciplina" class="control-label">Modelo?</label>
			<select id="disciplina" name="disciplina[]" class="form-control" multiple>
				
				<?php $var = 1; ?>
                
                <?php echo e($var); ?>

               
                <?php $__currentLoopData = $disciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disciplina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $ano->disciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $anodisciplina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($disciplina->id == $anodisciplina->id): ?>
                        	<option value="<?php echo $anodisciplina->id; ?>" selected><?php echo $anodisciplina->nome; ?></option> 
							<?php echo e($var = 0); ?>

							<?php break; ?>;
						<?php else: ?>
							<?php echo e($var = 1); ?>

						<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<?php if($var==1): ?>
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
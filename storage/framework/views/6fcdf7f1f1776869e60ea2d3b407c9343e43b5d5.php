<?php $__env->startSection('content'); ?>

<div class="container-fluid">
	
	<!--BUTTON BACK-->
	<a href="<?php echo e(URL::route('aviso.index')); ?>" class="btn btn-default">Voltar Atrás</a>

	<hr>
	<!--TITULO-->
	<h1 class="text-primary text-center"><b>Adicionar um novo Aviso</b></h1>
	<h3 class="text-center">Preencha toda a informação.</h3>

	<hr>

	<!--FORMULÁRIO-->
	<form action="<?php echo e(URL::route('aviso.store')); ?>" method="POST">


<!--NOME -->

		<div class="form-group">
			<label for="titulo" class="control-label">Titulo</label>

			<input type="text" id="titulo" name="titulo" class="form-control" required>
		</div>

<!--DESCRIÇÃO-->

		<div class="form-group">
			<label for="assunto" class="control-label">Assunto</label>
			<textarea id="assunto" name="assunto" class="form-control" rows="5" required></textarea>
		</div>

<!--ANO-->

		<div class="form-group">
            <label for="ano" class="control-label">Anos:</label>
            <select id="ano" name="ano[]" class="form-control" multiple required>
                <?php $__currentLoopData = $anos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ano): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo $ano->id; ?>"><?php echo $ano->nome; ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>


<!--DISCIPLINA-->


		<div class="form-group">
			<label for="´disciplina" class="control-label">Disciplinas:</label>
			<select id="disciplina" name="disciplina[]" class="form-control" multiple required>
				
				  <?php $__currentLoopData = $disciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disciplina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  	<option value="<?php echo $disciplina->id; ?>"><?php echo $disciplina->nome; ?>
				  	</option>
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
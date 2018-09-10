<?php $__env->startSection('content'); ?>

<div class="container-fluid">

	<!--BUTTON BACK-->
	<a href="<?php echo e(URL::route('ano.index')); ?>" class="btn btn-default">Voltar atrás</a>

	<hr>
    <!--TITULO-->
	<h1 class="text-primary text-center"><b>Adicionar novo Ano</b></h1>
	<h3 class="text-center">Preencha toda a informação</h3>

	<hr>

	<!--FORMULÁRIO-->
	<form action="<?php echo e(URL::route('ano.store')); ?>" method="POST">

		<!-- NOME -->
		<div class="form-group">
			<label for="nome" class="control-label">Nome:</label>
			<input type="text" id="nome" name="nome" class="form-control" required>
		</div>

		<!-- DISCIPLINAS -->
		<div class="form-group">
			<label for="disciplina" class="control-label">Disciplinas:</label>
			<select id="disciplina" name="disciplina[]" class="form-control" multiple required>
				
				<?php $__currentLoopData = $disciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disciplina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo $disciplina->id; ?><?php echo $disciplina->nome; ?>"></option>
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
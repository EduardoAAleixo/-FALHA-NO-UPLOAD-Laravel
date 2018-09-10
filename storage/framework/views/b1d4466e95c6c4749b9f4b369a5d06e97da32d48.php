<?php $__env->startSection('content'); ?>

<div class="container-fluid">
	
	<h1>Aluno "<?php echo e($aluno->nome); ?>"</h1>
	<h3>Lista de inscrições de <?php echo e($aluno->nome); ?> registados na bd</h3>

	<a href="<?php echo e(URL::route('aluno.index')); ?>" class="btn btn-default">Voltar atrás</a>

	<hr>

	<div class="table-responsive">
		<table class="table table-striped">
			<tr>
				<th>Nome do aluno</th>
				<th>Ano que frequenta</th>
				<th>Discipinas inscrito</th>
			</tr>

			<tr>
				<td><?php echo $aluno->nome; ?></td>
				<td><?php foreach ($aluno->anos as $ano) {
					echo $ano->nome; }?></td>
				<td><?php foreach ($aluno->disciplinas as $disciplina) {
					echo $disciplina->nome; }?></td>
			</tr> 
		</table>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
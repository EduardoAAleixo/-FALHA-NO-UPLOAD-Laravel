<?php $__env->startSection('content'); ?>

<div class="container-fluid">
	
	<!--BUTTON BACK-->
	<a href="<?php echo e(URL::route('ano.index')); ?>" class="btn btn-default">Voltar atrás</a>

	<hr> 
    <!--TITULO-->
	<h1 class="text-primary text-center"><b>Ano "<?php echo e($ano->nome); ?>"</b></h1>
	<h4 class="text-center">Lista de informações do ano <b>"<?php echo e($ano->nome); ?>"</b> registados na BD.</h4>


	<hr>

	 <!--TABELA-->
	<div class="table-responsive">
		<table class="table table-striped">
			<!--HEADER TABELA-->
			<thead>
				<tr>
					<th>Nome do Ano</th>
					<th>Lista de alunos inscritos</th>
					<th>Lista de disciplinas do ano</th>
				</tr>
			</thead>

			<!--BODY TABELA-->
			<tbody>
				<tr>
					<td><?php echo $ano->nome; ?></td>
					<td><?php foreach ($ano->alunos as $aluno){
						echo $aluno->nome."<br>" ;
					} ?></td>
					<td><?php foreach ($ano->disciplinas as $disciplina){
						echo $disciplina->nome."<br>" ;
					} ?></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
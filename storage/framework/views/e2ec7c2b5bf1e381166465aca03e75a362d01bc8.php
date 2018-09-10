<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <!--BUTTON BACK-->
    <a href="<?php echo e(URL::route('aluno.index')); ?>" class="btn btn-default">Voltar atrás</a>

	<hr>    
    <!--TITULO-->
    <h1 class="text-primary text-center"><b>Editar Aluno</b> "<?php echo e($aluno->nome); ?>"</h1>
	<<h4 class="text-center">Edite e Guarde a informação</h4>

	<hr>

    <!--FORMULÁRIO-->
	<form action="<?php echo e(URL::route('aluno.update', $aluno->id)); ?>" method="POST">
		<input type="hidden" name="_method" value="PUT">

        <!-- NUMERO ALUNO -->
        <div class="form-group">
			<label for="id" class="control-label">Nº Aluno:</label>

			<input type="number" id="id" name="id" class="form-control" value="<?php echo e($aluno->id); ?>" readonly>
        </div>

        <!-- NOME -->
        <div class="form-group">
			<label for="nome" class="control-label">Nome:</label>

			<input type="text" id="nome" name="nome" class="form-control" value="<?php echo $aluno->nome; ?>">
        </div>

        <!-- CARTAO CIDADAO -->
        <div class="form-group">
			<label for="cartao_cidadao" class="control-label">Cartão Cidadão:</label>

			<input type="text" id="cartao_cidadao" name="cartao_cidadao" class="form-control" value="<?php echo $aluno->cartao_cidadao; ?>">
        </div>

        <!-- SEXO -->
        <div class="form-group">
			<label for="sexo" class="control-label">Sexo:</label>

			<select id="sexo" name="sexo" class="form-control" required>
				<option value="Masculino">Maculino</option>
				<option value="Feminino">Feminino</option>
			</select>
        </div>

        <!-- MORADA -->
        <div class="form-group">
			<label for="morada" class="control-label">Morada:</label>

			<input type="text" id="morada" name="morada" class="form-control" value="<?php echo $aluno->morada; ?>" required>
        </div>

        <!-- NACIONALIDADE -->
        <div class="form-group">
			<label for="Nacionalidade" class="control-label">Nacionalidade:</label>

			<input type="text" id="nacionalidade" name="nacionalidade" class="form-control" value="<?php echo $aluno->nacionalidade; ?>" required>
        </div>

        <!-- E-MAIL -->
        <div class="form-group">
			<label for="email" class="control-label">E-Mail:</label>

			<input type="email" id="email" name="email" class="form-control" value="<?php echo $aluno->email; ?>" required>
        </div>

        <!-- TELEMOVEL -->
        <div class="form-group">
			<label for="telemovel" class="control-label">Telemóvel:</label>

			<input type="text" id="telemovel" name="telemovel" class="form-control" value="<?php echo $aluno->telemovel; ?>">
        </div>

        <!-- ANO -->
        <div class="form-group">
            <label for="ano" class="control-label">Ano:</label>
            <select id="ano" name="ano[]" class="form-control" multiple>
                
                <?php $var = 1; ?>

                <?php echo e($var); ?>


                <?php $__currentLoopData = $anos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ano): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php $__currentLoopData = $aluno->anos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alunoano): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($ano->id == $alunoano->id): ?>
                            <option value="<?php echo $alunoano->id; ?>" selected><?php echo $alunoano->nome; ?></option>

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

        <!-- DISCIPLINA -->
        <div class="form-group">
            <label for="" class="control-label">Disicplina:</label>
            <select id="disciplina" name="disciplina[]" class="form-control" multiple>
                
                <?php $var = 1; ?>
                
                <?php echo e($var); ?>

               
                <!--CHAMATA TABELA DISCIPLINAS-->
                <?php $__currentLoopData = $disciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disciplina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!--CHAMATA TABELA DE RELAÇÃO-->
                    <?php $__currentLoopData = $aluno->disciplinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $alunodisciplina): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!--COMPARA OS ID'S DAS TABELAS-->
                        <?php if($disciplina->id == $alunodisciplina->id): ?>
                            
                            <option value="<?php echo $alunodisciplina->id; ?>" selected><?php echo $alunodisciplina->nome; ?></option> 
                            
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
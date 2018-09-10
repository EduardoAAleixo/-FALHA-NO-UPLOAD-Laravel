<?php $__env->startSection('content'); ?> 

<!--HOME-->

<div class="container-fluid">
	<h4 class="text-center">Instituto Superior Miguel Torga</h4>


	<hr>

	<h1 class="text-center  text-primary"><b>MultiApp - Sistema de Gestão</b></h1>
	<hr>

	<div class="placeholders ">
            <img src="<?php echo e(asset('imagens/home.jpg')); ?>" class="img-rounded" width="100%;" >
    </div>

    
    <hr>

    <h4 class="text-center">Atenção a todas as acções que efectua!</h4>
    
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
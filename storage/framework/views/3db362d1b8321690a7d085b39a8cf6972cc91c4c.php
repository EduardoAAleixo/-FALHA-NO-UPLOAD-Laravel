<nav class="navbar navbar-inverse navbar-fixed-top bg-primary" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="<?php echo e(route('index')); ?>"><span class="navbar-brand">Painel Multiapp</span></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        
    </div>
    <div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        
        <!--HOME-->

        <li class="<?php echo e(Request::is('web') ? 'active' : ''); ?>"><a href="<?php echo e(route('index')); ?>">Home</a></li>
        
        <!--ALUNO-->
            
        <li class="<?php echo e(Request::is('web/aluno') ? 'active' : ''); ?>"><a href="<?php echo e(route('aluno.index')); ?>">Alunos</a></li>
        
        <!--ANO-->
        
        <li class="<?php echo e(Request::is('web/curso') ? 'active' : ''); ?>"><a href="<?php echo e(route('ano.index')); ?>">Ano</a></li>
        
        <!--AVISO-->
            
        <li class="<?php echo e(Request::is('web/aviso') ? 'active' : ''); ?>"><a href="<?php echo e(route('aviso.index')); ?>">Avisos</a></li>
        
        <!--DISCIPLINA-->
        
        <li class="<?php echo e(Request::is('web/disciplina') ? 'active' : ''); ?>"><a href="<?php echo e(route('disciplina.index')); ?>">Disciplinas</a></li>
        
        <!--PROFESSORES-->

        <li class="<?php echo e(Request::is('web/professor') ? 'active' : ''); ?>"><a href="<?php echo e(route('professor.index')); ?>">Professores</a></li>

        <!--HORARIOS-->
        
        <li class="<?php echo e(Request::is('web/horario') ? 'active' : ''); ?>"><a href="<?php echo e(route('horario.index')); ?>">Horarios</a></li>
        
        <!--ESTÁGIOS-->

        <li class="<?php echo e(Request::is('web/estagio') ? 'active' : ''); ?>"><a href="<?php echo e(route('estagio.index')); ?>">Estágios</a></li>
    </ul>
</div>
</nav>
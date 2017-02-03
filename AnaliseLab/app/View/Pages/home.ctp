<!DOCTYPE html>
<html>
<head>
<title> HOME </title>
</head>

<body>
	<h1 class="titulo"> Análises Laboratoriais </h1>

	<div class="row"> <!-- linha para menu -->

				<div class="col-sm-8">
          <ul class="nav nav-tabs">
            <li class="active"> <a href="#"> Principal </a></li>
            <li><?= $this->Html->link("Área Geral", array('controller'=>'procedimentos',
						'action'=>'index')); ?></li>
            <li><?= $this->Html->link("Área Usuarios", array('controller'=>'usuarios',
						'action'=>'index')); ?></li>
            <li><?= $this->Html->link("Área Pacientes", array('controller'=>'pacientes',
						'action'=>'index')); ?></li>
          </ul>
				</div>
    </div>
		<p class="texto"> Navegue entre os menus para acessar as funcionalidades do sistema!</p>

</body>

</html>

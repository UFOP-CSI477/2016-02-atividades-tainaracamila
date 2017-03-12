
<h1 class="titulo"> AREA DO CLIENTE </h1>
<div class="row"> <!-- linha para menu -->

      <div class="col-sm-8">
        <ul class="nav nav-tabs">
          <li> <?= $this->Html->link("Comprar Produto",
          array('controller'=>'compras',
          'action' => 'add')); ?> </li>
          <li> <?= $this->Html->link("Listar Compras",
          array('controller'=>'compras',
          'action' => 'listar')); ?> </li>
          <li> <?php
          $c=$this->Session->read('Cliente');
          $id=$c[0]['Cliente']['id'];
          ?>
          <?=
          $this->Html->link("Editar Dados",
          array('controller'=>'clientes',
          'action' => 'edit', $c[0]['Cliente']['id'])); ?> </li>
          <li> <?= $this->Html->link("Voltar",
          array('controller'=>'pages',
          'action' => 'home')); ?> </li>
          <li> <?php echo $this->Html->link("Sair",
            array('controller' => 'clientes',
                  'action' => 'logout'));
             ?>
          </li>
        </ul>
      </div>
    </div>


<h1 class="titulo"><?= $procedimento['Procedimento']['nome']; ?></h1>

<p>Código: <?= $procedimento['Procedimento']['id']; ?></p>
<p>Nome: <?= $procedimento['Procedimento']['nome']; ?></p>
<p>Preço: <?= $procedimento['Procedimento']['preco']; ?></p>
<p>Responsavel: <?= $procedimento['Procedimento']['usuario_id']; ?> </p>

<?=
  $this->Html->link("Voltar",
    array('controller' => 'procedimentos',
          'action' => 'index'));
?>

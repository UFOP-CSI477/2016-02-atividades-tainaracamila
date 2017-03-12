<html>

<h1> <?= $produto['Produto']['nome']; ?> </h1>

<p> Preço: <?= $produto['Produto']['preco']; ?> </p>
<p> Imagem: <?= $produto['Produto']['imagem']; ?> </p>


<?=
  $this->Html->link("Voltar",
    array('controller' => 'produtos',
          'action' => 'index'));
?>

</html>

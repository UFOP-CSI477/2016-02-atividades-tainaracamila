<html>
<h1 class="titulo"> Lista de Produtos </h1>

<table>
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Imagem</th>
    </tr>

     <?php foreach ($produtos as $p): ?>
     <tr>
         <td> <?php echo $this->Html->link($p['Produto']['nome'],
           array('controller' => 'produtos',
                 'action' => 'view', $p['Produto']['id']));
          ?>
         </td>
         <td><?php echo $p['Produto']['preco']; ?> </td>
         <td><?php echo $p['Produto']['imagem']; ?></td>

     </tr>
     <?php endforeach; ?>
</table>

<?=
  $this->Html->link("Comprar",
  array('controller'=>'compras','action'=>'add'));

?>

<?=
  $this->Html->link("Voltar",
  array('controller'=>'pages','action'=>'home'));

?>

</html>

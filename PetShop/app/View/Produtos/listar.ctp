<h1 class=titulo> PRODUTOS </h1>

<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Preço</th>
        <th>Imagem</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>

     <?php foreach ($produtos as $p): ?>
     <tr>
         <td><?php echo $p['Produto']['id']; ?></td>
         <td><?php echo $p['Produto']['nome']; ?></td>
         <td><?php echo $p['Produto']['preco']; ?></td>
         <td><?php echo $p['Produto']['imagem']; ?></td>
         <td><?php echo $this->Html->link("Editar",
           array('controller' => 'produtos',
                 'action' => 'edit', $p['Produto']['id']));
                 ?>
         </td>
         <td><?php echo $this->Html->link("Excluir",
           array('controller' => 'produtos',
                 'action' => 'delete', $p['Produto']['id']));
                 ?>
         </td>
     </tr>
     <?php endforeach; ?>
</table>

<?=
  $this->Html->link("Voltar",
   array('controller'=>'users',
   'action' => 'index')); ?>

<h1 class=titulo> LISTA DE COMPRAS REALIZADAS </h1>

<table>
    <tr>
        <th>Produto</th>
        <th>Preço Un.</th>
        <th>Quantidade </th>
        <th>Data</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $procedimentos, imprimindo
         as informações dos procedimentos -->

     <?php foreach ($compras as $c): ?>
     <tr>
         <td><?php echo $c['Produto']['nome']; ?></td>
         <td><?php echo $c['Produto']['preco']; ?></td>
         <td><?php echo $c['Compra']['quantidade']; ?></td>
         <td><?php echo $c['Compra']['data']; ?></td>
     </tr>
     <?php endforeach; ?>
</table>

<?=
  $this->Html->link("Voltar",
   array('controller'=>'clientes',
   'action' => 'index')); ?>

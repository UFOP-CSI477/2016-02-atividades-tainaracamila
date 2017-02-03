<h1 class="titulo"> LISTA DE PROCEDIMENTOS </h1>

<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Preço</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $procedimentos, imprimindo
         as informações dos procedimentos -->

     <?php foreach ($procedimentos as $p): ?>
     <tr>
         <td><?php echo $p['Procedimento']['id']; ?></td>
         <td> <?php echo $this->Html->link($p['Procedimento']['nome'],
           array('controller' => 'procedimentos',
                 'action' => 'view', $p['Procedimento']['id']));
          ?>
         </td>
         <td><?php echo $p['Procedimento']['preco']; ?></td>
     </tr>
     <?php endforeach; ?>

</table>

<?= $this->Html->link("Voltar",
 array('controller'=>'pages',
 'action' => 'home')); ?>

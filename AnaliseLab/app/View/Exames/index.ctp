<h1 class=titulo> LISTA DE EXAMES SOLICITADOS </h1>

<table>
    <tr>
        <th>Id</th>
        <th>Procedimento</th>
        <th>Data</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $procedimentos, imprimindo
         as informações dos procedimentos -->

     <?php foreach ($exames as $e): ?>
     <tr>
         <td><?php echo $e['Exame']['id']; ?></td>
         <td><?php echo $e['Procedimento']['nome']; ?></td>
         <td><?php echo $e['Exame']['data']; ?></td>
         <td><?php echo $this->Html->link("Editar",
           array('controller' => 'exames',
                 'action' => 'edit', $e['Exame']['id']));
                 ?>
         </td>
         <td><?php echo $this->Html->link("Excluir",
           array('controller' => 'exames',
                 'action' => 'delete', $e['Exame']['id']));
                 ?>
         </td>
     </tr>
     <?php endforeach; ?>
</table>

<?=
  $this->Html->link("Voltar",
   array('controller'=>'pacientes',
   'action' => 'index')); ?>

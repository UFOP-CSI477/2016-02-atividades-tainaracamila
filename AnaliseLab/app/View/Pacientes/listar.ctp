<h1 class="titulo"> LISTA DE PACIENTES </h1>

<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $procedimentos, imprimindo
         as informações dos procedimentos -->

     <?php foreach ($pacientes as $p): ?>
     <tr>
         <td><?php echo $p['Paciente']['id']; ?></td>
         <td><?php echo $p['Paciente']['nome']; ?></td>

     </tr>
     <?php endforeach; ?>
</table>

<?=
  $this->Html->link("Voltar",
  array('controller'=>'usuarios','action'=>'index'));

?>

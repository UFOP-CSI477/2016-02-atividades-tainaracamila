<h1 class="titulo"> LISTA DE EXAMES </h1>

<table>
    <tr>
        <th>Id</th>
        <th>Procedimento</th>
        <th>Paciente</th>
        <th>Data</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $procedimentos, imprimindo
         as informações dos procedimentos -->

     <?php foreach ($exames as $e): ?>
     <tr>
         <td><?php echo $e['Exame']['id']; ?></td>
         <td><?php echo $e['Procedimento']['nome']; ?></td>
         <td><?php echo $e['Paciente']['nome']; ?> </td>
         <td><?php echo $e['Exame']['data']; ?></td>


     </tr>
     <?php endforeach; ?>
</table>

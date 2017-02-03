<h1 class="titulo"> Exames Solicitados Por Procedimentos </h1>

<table>
    <tr>
        <th>Procedimento</th>
        <th>Preco Unitario </th>
        <th>Pacientes</th>
        <th>Preco Total </th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $procedimentos, imprimindo
         as informações dos procedimentos -->

     <?php

     $qtdPacientes=0;
     $somaTotal=0;

     foreach ($exames as $e): ?>
       <?php// Debugger::dump($e);?>
     <tr>
         <td><?php echo $e['procedimentos']['nome']; ?></td>
         <td><?php echo $e['procedimentos']['preco']; ?> </td>
         <td><?php echo $e['0']['numPac']; ?></td>
         <td><?php echo $e['0']['precoTotal']; ?></td>
         <?php $qtdPacientes+=$e['0']['numPac'];
               $somaTotal+=$e['0']['precoTotal'];
         ?>
     </tr>
     <?php endforeach; ?>
</table>

<p> Quantidade de pacientes: <?php echo $qtdPacientes; ?> </p>
<p> Valor total: <?php echo $somaTotal; ?> </p>

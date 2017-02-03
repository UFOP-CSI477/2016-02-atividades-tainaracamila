<h1> <?= $paciente['Paciente']['nome']; ?> </h1>

<p> Id:<?= $paciente['Paciente']['id']; ?> </p>
<p> Nome:<?= $paciente['Paciente']['nome']; ?> </p>

<?=
  $this->Html->link("Voltar",
    array('controller' => 'pacientes',
          'action' => 'index'));
?>

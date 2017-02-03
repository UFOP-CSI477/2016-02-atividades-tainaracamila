<?php

class Exame extends AppModel{

    public $belongsTo = array('Procedimento','Paciente');
    //public $belongsTo = 'Paciente';
}

?>

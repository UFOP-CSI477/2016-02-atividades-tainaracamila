<?php

class PacientesController extends AppController {

  public $helpers = array('Html', 'Form');
  public $components = array('Flash');

  public function index_login(){

  }

  public function validar () {

    $paciente= $this->Paciente->findAllByLoginAndSenha($this->data['Paciente']['login'],
    $this->data['Paciente']['senha']);

    if(!empty($paciente))
      return $paciente;
    else
      return false;
  }

  public function login () {
      Debugger::dump($this->data);
      if(!empty($this->data['Paciente']['login'])) {
        // validar
        $paciente=$this->validar();
        if($paciente!=false){
          $this->Flash->set('Acesso realizado com sucesso!');
          $this->Session->write('Paciente', $paciente);
          $this->redirect(array('action'=>'index'));
          //$this->redirect(array('/'));
          exit();
        } else {
          $this->Flash->set('Login e/ou senha invalidos');
          $this->redirect(array('action'=>'index_login'));
          exit();
      }
    } else {
      $this->redirect(array('action'=>'index_login'));
      exit();
    }
  }

  public function logout() {

    $this->Flash->set('Atividades encerradas com sucesso!');
    $this->Session->destroy();

    $this->redirect('/');
    exit();

  }

  public function afterFilter(){
    parent::afterFilter();
    if($this->action!='index_login' && $this->action!='login' && $this->action!='add' && $this->action!='listar') {
      $this->autenticar();
    }
  }


  public function autenticar() {
    if(!$this->Session->check('Paciente')) {
      $this->redirect(array('controller'=>'pacientes','action'=>'index_login'));
      exit();
    } else {
      $paciente=$this->Session->read('Paciente');
      //$this->Flash->set('Bem vinda' . $paciente['0']['Paciente']['nome']);
    }

  }

  public function index() {
    //exibir lista de pacientes
    //TAREFAS DO USUARIO
  }

  public function listar() {
    $this->set('pacientes', $this->Paciente->find('all'));
  }

  public function view($id = null) {

    if(!$id) {
      throw new NotFoundException ("Código do paciente inválido!");
    }

    $paciente = $this->Paciente->findById($id);
    $this->set('paciente', $paciente);

  }

  public function add(){

    if(empty($this->request->data)) {
    } else {

      if($this->Paciente->save($this->request->data)) {
        $this->Flash->set('Paciente criado com sucesso!');
        $this->redirect(array('action'=>'index'));
      }

    }

  }

  public function edit($id = null) {
    if(!$id) {
      throw new NotFoundException ("Código do paciente inválido!");
    }
    if(empty($this->request->data)) {
      $this->request->data=$this->Paciente->findById($id);
    } else {

      if($this->Paciente->save($this->request->data)) {
        $this->Flash->set('Paciente atualizado com sucesso!');
        $this->redirect(array('action'=>'index'));
      }

    }

  }




}

?>

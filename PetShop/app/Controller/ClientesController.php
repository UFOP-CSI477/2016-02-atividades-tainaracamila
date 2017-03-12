<?php

class ClientesController extends AppController {

  public $helpers = array('Html', 'Form');
  public $components = array('Flash');

  public function index_login(){

  }

  public function validar () {

    $cliente= $this->Cliente->findAllByEmailAndSenha($this->data['Cliente']['email'],
    $this->data['Cliente']['senha']);

    if(!empty($cliente))
      return $cliente;
    else
      return false;
  }

  public function login () {
      if(!empty($this->data['Cliente']['email'])) {
        // validar
        $cliente=$this->validar();
        if($cliente!=false){
          $this->Session->write('Cliente', $cliente);
          $this->Flash->set('Bem-vindo(a)' . $cliente['0']['Cliente']['nome']);
          $this->redirect(array('action'=>'index'));
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

  // AQUI É ONDE EDITA O QUE PODE E O QUE NÃO PODE APARECER SEM O LOGIN REALIZADO
  public function afterFilter(){
    parent::afterFilter();
    if($this->action!='index_login' && $this->action!='display' && $this->action!='add') {
      $this->autenticar();
    }
  }


  public function autenticar () {
    if(!$this->Session->check('Cliente')) {
      $this->redirect(array('controller'=>'clientes','action'=>'index_login'));
      exit();
    } else {
      $cliente=$this->Session->read('Cliente');
      //Debugger::dump($usuario);
    }

  }

  public function add(){

    if(empty($this->request->data)) {
    } else {

      if($this->Cliente->save($this->request->data)) {
        $this->Flash->set('Cliente criado com sucesso!');
        $this->redirect(array('action'=>'index'));
      }

    }

  }

  public function edit($id = null) {

    if(!$id) {
      throw new NotFoundException("Codigo de cliente invalido");
    }

    if(empty($this->request->data)) {
      // popular aqui algum item
      $this->request->data=$this->Cliente->findById($id);
    } else {
    // persistir dados
      if($this->Cliente->save($this->request->data)) { // salva novo usuario
        $this->Flash->set("Cliente atualizado com sucesso!");
        $this->redirect(array('action'=>'index'));
      }
    }
  }

  public function index() {
  }

}

?>

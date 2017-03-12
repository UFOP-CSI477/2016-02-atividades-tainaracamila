<?php

class UsersController extends AppController {

  public $helpers = array('Html', 'Form');
  public $components = array('Flash');

  public function index_login(){

  }

  public function validar () {

    $user= $this->User->findAllByEmailAndSenha($this->data['User']['email'],
    $this->data['User']['senha']);

    if(!empty($user))
      return $user;
    else
      return false;
  }

  public function login () {
      if(!empty($this->data['User']['email'])) {
        // validar
        $user=$this->validar();
        if($user!=false){
          $this->Flash->set('Acesso realizado com sucesso!');
          $this->Session->write('User', $user);
          $this->redirect(array('action'=>'index'));
          exit();
        } else {
          $this->Flash->set('Email e/ou senha invalidos');
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
    if($this->action!='index_login' && $this->action!='display') {
      $this->autenticar();
    }
  }


  public function autenticar () {
    if(!$this->Session->check('User')) {
      $this->redirect(array('controller'=>'users','action'=>'index_login'));
      exit();
    } else {
      $user=$this->Session->read('User');
      //Debugger::dump($usuario);
    }

  }

  public function index() {
    $this->set('users', $this->User->find('all'));
  }

  public function add() {

    if(!$this->Session->check('User')) {
      $this->Flash->set('Necessário login');
      $this->redirect(array('controller'=>'users','action'=>'index_login'));
      exit();
    }

    $user=$this->Session->read('User');
    //$this->Flash->set('' . $usuario[0]['Usuario']['nome']);
    //Debugger::dump($user);

    if($user[0]['User']['tipo']!=1) { //MUDAR AQUI PARA TIPO
        $this->Flash->set('Apenas administrador pode realizar o cadastro!'); // exibe mensagem
        $this->redirect(array('controller'=>'users','action'=>'index'));
    } else {
      if(empty($this->request->data)) {
      } else {

    if($this->User->save($this->request->data)){ // salva
      $this->Flash->set('Usuario inserido com sucesso!'); // exibe mensagem
      $this->redirect(array('controller'=>'users','action'=>'index')); // retorna pra pagina index
    }
      }
    }
  }

  public function view($id = null) {

    if(!$id){
      throw new NotFoundException("Codigo de usuario inválido!");
    }

    $user = $this->User->findById($id);
    $this->set('user', $user);

  }

  public function edit($id = null) {

    if(!$id) {
      throw new NotFoundException("Codigo de usuário invalido");
    }

    if(empty($this->request->data)) {
      // popular aqui algum item
      $this->request->data=$this->User->findById($id);
    } else {
    // persistir dados
      if($this->User->save($this->request->data)) { // salva novo usuario
        $this->Flash->set("Usuario atualizado com sucesso!");
        $this->redirect(array('action'=>'index'));
      }
    }
  }

  public function delete($id = null) {

    if(!$id) {
      throw new NotFoundException("Codigo de usuário inválido!");
    }

    $this->User->delete($id);
    $this->Flash->set("Usuario excluido com sucesso!");
    $this->redirect(array('action'=>'index'));
  }

}

?>

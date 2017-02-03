<?php

  class UsuariosController extends AppController {

    public $helpers = array('Html', 'Form');
    public $components = array('Flash');

    public function index_login(){

    }

    public function validar () {

      $usuario= $this->Usuario->findAllByLoginAndSenha($this->data['Usuario']['login'],
      $this->data['Usuario']['senha']);

      if(!empty($usuario))
        return $usuario;
      else
        return false;
    }

    public function login () {
        if(!empty($this->data['Usuario']['login'])) {
          // validar
          $usuario=$this->validar();
          if($usuario!=false){
            $this->Flash->set('Acesso realizado com sucesso!');
            $this->Session->write('Usuario', $usuario);
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

    public function afterFilter(){
      parent::afterFilter();
      if($this->action!='index_login' && $this->action!='display') {
        $this->autenticar();
      }
    }


    public function autenticar () {
      if(!$this->Session->check('Usuario')) {
        $this->redirect(array('controller'=>'usuarios','action'=>'index_login'));
        exit();
      } else {
        $usuario=$this->Session->read('Usuario');
        //Debugger::dump($usuario);
      }

    }

    public function index() {
      $this->set('usuarios', $this->Usuario->find('all'));
    }

    public function add() {

      if(!$this->Session->check('Usuario')) {
        $this->Flash->set('Necessário login');
        $this->redirect(array('controller'=>'usuarios','action'=>'index_login'));
        exit();
      }

      $usuario=$this->Session->read('Usuario');
      $this->Flash->set('' . $usuario[0]['Usuario']['nome']);
      Debugger::dump($usuario);

      if($usuario[0]['Usuario']['tipo']) { //MUDAR AQUI PARA TIPO
          $this->Flash->set('Apenas administrador pode realizar o cadastro!'); // exibe mensagem
          $this->redirect(array('controller'=>'usuarios','action'=>'index'));
      } else {
        if(empty($this->request->data)) {
        } else {

      if($this->Usuario->save($this->request->data)){ // salva
        $this->Flash->set('Usuario inserido com sucesso!'); // exibe mensagem
        $this->redirect(array('controller'=>'usuarios','action'=>'index')); // retorna pra pagina index
      }
        }
      }
    }

    public function view($id = null) {

      if(!$id){
        throw new NotFoundException("Codigo de usuario inválido!");
      }

      $usuario = $this->Usuario->findById($id);
      $this->set('usuario', $usuario);

    }

    public function edit($id = null) {

      if(!$id) {
        throw new NotFoundException("Codigo de usuário invalido");
      }

      if(empty($this->request->data)) {
        // popular aqui algum item
        $this->request->data=$this->Usuario->findById($id);
      } else {
      // persistir dados
        if($this->Usuario->save($this->request->data)) { // salva novo usuario
          $this->Flash->set("Usuario atualizado com sucesso!");
          $this->redirect(array('action'=>'index'));
        }
      }
    }

    public function delete($id = null) {

      if(!$id) {
        throw new NotFoundException("Codigo de usuário inválido!");
      }

      $this->Usuario->delete($id);
      $this->Flash->set("Usuario excluido com sucesso!");
      $this->redirect(array('action'=>'index'));
    }

  }

?>

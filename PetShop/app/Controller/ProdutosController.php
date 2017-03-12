<?php

class ProdutosController extends AppController {

  public $helpers = array('Html', 'Form');
  public $components = array('Flash');

  public function index() {
    $this->set('produtos', $this->Produto->find('all'));
  }

  public function view($id = null) {

    if(!$id){
      throw new NotFoundException("Codigo do Produto inválido!");
    }

    $produto = $this->Produto->findById($id);
    $this->set('produto', $produto);

  }

  public function add(){

    if(!$this->Session->check('User')) {
      $this->Flash->set('Necessário login');
      $this->redirect(array('controller'=>'users','action'=>'index_login'));
      exit();
    }

    $user=$this->Session->read('User');

    if($user[0]['User']['tipo']!=1) {
        $this->Flash->set('Apenas administrador pode realizar o cadastro!'); // exibe mensagem
        $this->redirect(array('controller'=>'users','action'=>'index'));
    } else {
      if(empty($this->request->data)) {
      } else {

    if($this->Produto->save($this->request->data)){ // salva
      $this->Flash->set('Produto inserido com sucesso!'); // exibe mensagem
      $this->redirect(array('controller'=>'users','action'=>'index')); // retorna pra pagina index
    }
      }
    }

  }

  public function listar() {
    $this->set('produtos', $this->Produto->find('all'));
  }

  public function edit($id = null){
    if(!$id) {
      throw new NotFoundException("Codigo do Produto inválido");
    }

    if(empty($this->request->data)) {
      // popular aqui algum item
      $this->request->data=$this->Produto->findById($id);
    } else {
    // persistir dados
      if($this->Produto->save($this->request->data)) { // salva novo usuario
        $this->Flash->set("Produto atualizado com sucesso!");
        $this->redirect(array('controller'=>'produtos', 'action' =>'listar'));
      }
    }
  }

    public function delete($id = null){
      //função pra deletar um procedimento
      if(!$id) {
        throw new NotFoundException ("Código do procedimento inválido!");
      }

      if(!$this->Session->check('User')) {
        $this->Flash->set('Necessário login');
        $this->redirect(array('controller'=>'users','action'=>'index_login'));
        exit();
      }

      $user=$this->Session->read('User');
      //$this->Flash->set('' . $usuario[0]['Usuario']['nome']);

      if($user[0]['User']['tipo']!=1) { //MUDAR AQUI PARA TIPO
          $this->Flash->set('Apenas administrador pode realizar a exclusão!'); // exibe mensagem
          $this->redirect(array('controller'=>'users','action'=>'index'));
      } else {
          $this->Produto->delete($id);
          $this->Flash->set("Produto excluído com sucesso!");
          $this->redirect(array('action'=>'index'));
      }
    }





}

?>

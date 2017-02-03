<?php

class ProcedimentosController extends AppController {

  public $helpers = array('Html', 'Form');
  public $components = array('Flash');

  public function index() {
    $this->set('procedimentos', $this->Procedimento->find('all',array('order'=>'Procedimento.nome')));
  }


  public function add(){

    if(!$this->Session->check('Usuario')) {
      $this->Flash->set('Necessário login');
      $this->redirect(array('controller'=>'usuarios','action'=>'index_login'));
      exit();
    }

    $usuario=$this->Session->read('Usuario');
    //$this->Flash->set('' . $usuario[0]['Usuario']['nome']);

    if($usuario[0]['Usuario']['nome']!="Administrador") { //MUDAR AQUI PARA TIPO
        $this->Flash->set('Apenas administrador pode realizar o cadastro!'); // exibe mensagem
        $this->redirect(array('controller'=>'usuarios','action'=>'index'));
    } else {
      if(empty($this->request->data)) {
      } else {

    $this->request->data['Procedimento']['usuario_id']=$usuario[0]['Usuario']['id'];
    if($this->Procedimento->save($this->request->data)){ // salva
      $this->Flash->set('Procedimento inserido com sucesso!'); // exibe mensagem
      $this->redirect(array('controller'=>'usuarios','action'=>'index')); // retorna pra pagina index
    }
      }
    }

  }

  public function view($id = null){
    //funcao para visualizar um procedimento
    if(!$id) {
      throw new NotFoundException ("Código do procedimento inválido!");
    }

      $procedimento = $this->Procedimento->findById($id);
      $this->set('procedimento', $procedimento);
  }

  public function edit($id = null){

    if(empty($this->request->data)) {
        $this->request->data = $this->Procedimento->findById($id);
      } else {
      //persistir os dados
        if($this->Procedimento->save($this->request->data)){ // salva
          $this->Flash->set('Procedimento atualizado com sucesso!'); // exibe mensagem
          $this->redirect(array('action'=>'index')); // retorna pra pagina index
        }

      }
    }

  public function delete($id = null){
    //função pra deletar um procedimento
    if(!$id) {
      throw new NotFoundException ("Código do procedimento inválido!");
    }

    if(!$this->Session->check('Usuario')) {
      $this->Flash->set('Necessário login');
      $this->redirect(array('controller'=>'usuarios','action'=>'index_login'));
      exit();
    }

    $usuario=$this->Session->read('Usuario');
    $this->Flash->set('' . $usuario[0]['Usuario']['nome']);

    if($usuario[0]['Usuario']['nome']!="Administrador") { //MUDAR AQUI PARA TIPO
        $this->Flash->set('Apenas administrador pode realizar o cadastro!'); // exibe mensagem
        $this->redirect(array('controller'=>'usuarios','action'=>'index'));
    } else {
        $this->Procedimento->delete($id);
        $this->Flash->set("Procedimento excluído com sucesso!");
        $this->redirect(array('action'=>'index'));
    }
  }

}

?>

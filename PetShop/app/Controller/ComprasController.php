<?php

class ComprasController extends AppController {

  public $helpers = array('Html', 'Form');
  public $components = array('Flash');


  public function listar() {
    $cliente=$this->Session->read('Cliente');
    $id=$cliente[0]['Cliente']['id'];
    $this->set('compras', $this->Compra->findAllByClienteId($id));
  }


  public function add(){

    if(!$this->Session->check('Cliente')) {
      $this->redirect(array('controller'=>'clientes','action'=>'index_login'));
      exit();
    }

    if(empty($this->request->data)) {

      $produtos = $this->Compra->Produto->find('list',
        array('fields'=> array('id','nome'))
        );
      $this->set('produtos', $produtos);

    } else {
    //persistir os dados
      $cliente=$this->Session->read('Cliente');
      $this->request->data['Compra']['cliente_id']=$cliente[0]['Cliente']['id'];
      if($this->Compra->save($this->request->data)){ // salva
        $this->Flash->set('Compra realizada com sucesso!'); // exibe mensagem
        $this->redirect(array('controller'=>'clientes', 'action'=>'index')); // retorna pra pagina index
      }

    }
  }


}
?>

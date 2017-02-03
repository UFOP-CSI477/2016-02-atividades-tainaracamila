<?php

  class ExamesController extends AppController {

    public $helpers = array('Html', 'Form');
    public $components = array('Flash');

    public function index() {
      $paciente=$this->Session->read('Paciente');
      $id=$paciente[0]['Paciente']['id'];
      $this->set('exames', $this->Exame->findAllByPacienteId($id, array(), array('Exame.data' => 'desc', 'Procedimento.nome'=>'asc')));

    }

    public function listar() {
      $this->set('exames', $this->Exame->find('all'));
    }


    public function add(){

      if(!$this->Session->check('Paciente')) {
        $this->redirect(array('controller'=>'pacientes','action'=>'index_login'));
        exit();
      }

      if(empty($this->request->data)) {

        $procedimentos = $this->Exame->Procedimento->find('list',
          array('fields'=> array('id','nome'))
          );
        $this->set('procedimentos', $procedimentos);

      } else {
      //persistir os dados
        $paciente=$this->Session->read('Paciente');
        $this->request->data['Exame']['paciente_id']=$paciente[0]['Paciente']['id'];
        if($this->Exame->save($this->request->data)){ // salva
          $this->Flash->set('Exame inserido com sucesso!'); // exibe mensagem
          $this->redirect(array('action'=>'index')); // retorna pra pagina index
        }

      }
    }

    public function view($id = null){
      //funcao para visualizar um procedimento
      if(!$id) {
        throw new NotFoundException ("Código do exame inválido!");
      }

        $exame = $this->Exame->findById($id);
        $this->set('exame', $exame);
    }

    public function edit($id = null){
      if(!$this->Session->check('Paciente')) {
        $this->redirect(array('controller'=>'pacientes','action'=>'index_login'));
        exit();
      }

      if(empty($this->request->data)) {

        $procedimentos = $this->Exame->Procedimento->find('list',
          array('fields'=> array('id','nome'))
          );
        $this->set('procedimentos', $procedimentos);
        $this->request->data=$this->Exame->findById($id);
      } else {
      //persistir os dados
        $paciente=$this->Session->read('Paciente');
        $this->request->data['Exame']['paciente_id']=$paciente[0]['Paciente']['id'];
        if($this->Exame->save($this->request->data)){ // salva
          $this->Flash->set('Exame atualizado com sucesso!'); // exibe mensagem
          $this->redirect(array('action'=>'index')); // retorna pra pagina index
        }

      }
    }

    public function delete($id = null){
      //função pra deletar um procedimento
      if(!$id) {
        throw new NotFoundException ("Código do procedimento inválido!");
      }

      $this->Exame->delete($id);
      $this->Flash->set("Exame excluído com sucesso!");
      $this->redirect(array('action'=>'index'));

    }

    public function relatoriop() {
        $exames=$this->Exame->query("SELECT procedimentos.nome, count(exames.paciente_id) as numPac,
                            procedimentos.preco,
                            count(exames.paciente_id) * procedimentos.preco as precoTotal
                            from procedimentos, exames
                            where exames.procedimento_id = procedimentos.id
                            GROUP by procedimentos.nome, procedimentos.preco
                            ");
                            $this->set('exames',$exames);
    }


  }

?>

<?php

class DirecoesController extends AppController {

	public $helpers = array ('Html', 'Form');
	public $name = 'Direcoes';
	public $uses = array('Direcao');

	function index() {
		$this->set('direcoes', $this->Direcao->find('all'));
	}

	public function view($id = null) {
		$this->Direcao->id = $id;
		$this->set('direcao', $this->Direcao->read());
	}

	public function add() {
		if ($this->request->data) {
			if ($this->Direcao->save($this->request->data)) {
				$this->Session->setFlash('O membro da direção foi salvo com sucesso.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function edit($id = null) {

		$this->Direcao->id = $id;

		if(empty($this->request->data)) {
			$this->request->data = $this->Direcao->read();
		} else {
			if ($this->Direcao->save($this->request->data)) {
				$this->Session->setFlash('O membro da direção foi salvo com sucesso.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function remove($id = null) {

		if($this->Direcao->delete($id)) {
			$this->Session->setFlash('Este membro da direção foi excluído com sucesso.');
			$this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash('Erro ao excluir membro da direção.');
			$this->redirect(array('action' => 'index'));
		}
	}


}

?>


<?php

class ProfessoresController extends AppController {

	public $helpers = array ('Html', 'Form');
	public $name = 'Professores';
	public $uses = array('Professor');

	function index() {
		$this->set('professores', $this->Professor->find('all'));
	}

	public function view($id = null) {
		$this->Professor->id = $id;
		$this->set('professor', $this->Professor->read());
	}

	public function add() {
		if ($this->request->data) {
			if ($this->Professor->save($this->request->data)) {
				$this->Session->setFlash('Seu professor foi salvo com sucesso.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function edit($id = null) {

		$this->Professor->id = $id;

		if(empty($this->request->data)) {
			$this->request->data = $this->Professor->read();
		} else {
			if ($this->Professor->save($this->request->data)) {
				$this->Session->setFlash('Seu professor foi salvo com sucesso.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function remove($id = null) {

		if($this->Professor->delete($id)) {
			$this->Session->setFlash('Seu professor foi excluído com sucesso.');
			$this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash('Erro ao excluir professor.');
			$this->redirect(array('action' => 'index'));
		}
	}


}

?>


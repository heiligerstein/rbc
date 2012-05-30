<?php

class AlunosController extends AppController {

	public $helpers = array ('Html', 'Form');
	public $name = 'Alunos';

	function index() {
		$this->set('alunos', $this->Aluno->find('all'));
	}

	public function view($id = null) {
		$this->Aluno->id = $id;
		$this->set('aluno', $this->Aluno->read());
	}

	public function add() {
		if ($this->request->data) {
			if ($this->Aluno->save($this->request->data)) {
				$this->Session->setFlash('Seu aluno foi salvo com sucesso.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function edit($id = null) {

		$this->Aluno->id = $id;

		if(empty($this->request->data)) {
			$this->request->data = $this->Aluno->read();
		} else {
			if ($this->Aluno->save($this->request->data)) {
				$this->Session->setFlash('Seu aluno foi salvo com sucesso.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function remove($id = null) {

		if($this->Aluno->delete($id)) {
			$this->Session->setFlash('Seu aluno foi excluído com sucesso.');
			$this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash('Erro ao excluir aluno.');
			$this->redirect(array('action' => 'index'));
		}
	}


}

?>


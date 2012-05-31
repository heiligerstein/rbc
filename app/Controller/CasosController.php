<?php

class CasosController extends AppController {

	public $helpers = array ('Html', 'Form');
	public $name = 'Casos';

	function index() {
		$this->set('casos', $this->Caso->find('all'));
	}

	private function array_corrigido($caso = null) {

		// quebra string
		$array_desc_soluc = explode(" ", $caso['Caso']['descricao_solucao']);

		// inicializa array com a descricao da solucao corrigido
		$array_desc_soluc_corrig = array();
			
		// corrige array e adiciona ao array corrigido
		foreach ($array_desc_soluc as $palav_desc_soluc) {
			$palav_desc_soluc = str_ireplace(array('.', ',', '-', '"', "'"), '', $palav_desc_soluc);
			if(strlen($palav_desc_soluc) > 3) // considera ate 3 caracteres
			array_push($array_desc_soluc_corrig, $palav_desc_soluc);
		}
		
		return $array_desc_soluc_corrig;

	}

	public function view($id = null) {
		
		// caso atual
		$this->Caso->id = $id;
		$caso_atual = $this->Caso->read();
		$this->set('caso', $caso_atual);
		$caso_atual_c = $this->array_corrigido($caso_atual); // caso atual corrigido
		$qnt_pal_atual = count($caso_atual_c);

		// inicializa array de casos atualizados com as porcentagens
		$casos_atualiz = array();
		
		// varre e processa todos os outros casos
		$casos = $this->Caso->find('all', array('conditions' => array('Caso.id !=' => $id))); 
		foreach ($casos as $caso_l) {

			// varrendo array corrigido
			$caso_c = $this->array_corrigido($caso_l); // caso corrigido
			$qnt_pal_caso = count($caso_c);
			$i = 0;
			foreach ($caso_atual_c as $pal_desc_sol_atual) {
				if(in_array($pal_desc_sol_atual, $caso_c)) // se a palavra existe adiciona 1
					$i++;
			}

			// calcula porcentagem e adiciona ao caso completo
			$caso_l['Caso']['porcentagem'] = ($i / $qnt_pal_atual) * 100;
			
			// adiciona tudo aa lista de casos atualizada 
			array_push($casos_atualiz, $caso_l);
			
		}
		
		$this->set('casos', Set::sort($casos_atualiz, '{n}.Caso.porcentagem', 'desc'));
		
	}

	public function add() {
		if ($this->request->data) {
			if ($this->Caso->save($this->request->data)) {
				$this->Session->setFlash('Seu caso foi salvo com sucesso.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function edit($id = null) {
		$this->Caso->id = $id;
		if(empty($this->request->data)) {
			$this->request->data = $this->Caso->read();
		} else {
			if ($this->Caso->save($this->request->data)) {
				$this->Session->setFlash('Seu caso foi salvo com sucesso.');
				$this->redirect(array('action' => 'index'));
			}
		}
	}

	public function remove($id = null) {
		if($this->Caso->delete($id)) {
			$this->Session->setFlash('Seu caso foi excluído com sucesso.');
			$this->redirect(array('action' => 'index'));
		} else {
			$this->Session->setFlash('Erro ao excluir caso.');
			$this->redirect(array('action' => 'index'));
		}
	}


}

?>


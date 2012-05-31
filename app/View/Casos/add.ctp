<!-- File: /app/View/Alunos/add.ctp -->

<h3>Adicionar Caso...</h3>
<?php
	echo $this->Form->create('Caso');
	echo $this->Form->input('descricao_problema', array('rows' => 1));
	echo $this->Form->input('descricao_solucao', array('rows' => 5));
	echo $this->Form->input('conclusao', array('rows' => 5));
	echo $this->Form->end('Salvar Caso');
?>
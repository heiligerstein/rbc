<!-- File: /app/View/Alunos/add.ctp -->

<h1>Add Post</h1>
<?php
echo $this->Form->create('Aluno');
echo $this->Form->input('matricula', array('title' => 'Matrícula'));
echo $this->Form->input('nome');
echo $this->Form->input('telefone');
echo $this->Form->input('curso');
echo $this->Form->input('periodo');
# echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Salvar Aluno');


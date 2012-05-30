<!-- File: /app/View/Alunos/add.ctp -->

<h1>Adicionar Membro da Direção</h1>
<?php

echo $this->Form->create('Direcao');
echo $this->Form->input('nome');
echo $this->Form->input('cargo');
echo $this->Form->end('Salvar membro da direção');

?>


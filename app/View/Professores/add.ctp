<!-- File: /app/View/Alunos/add.ctp -->

<h1>Adicionar Professor</h1>
<?php
echo $this->Form->create('Professor');
echo $this->Form->input('nome');
echo $this->Form->input('formacao');
echo $this->Form->input('maior_titulacao');
echo $this->Form->input('departamento');
echo $this->Form->end('Salvar Professor');


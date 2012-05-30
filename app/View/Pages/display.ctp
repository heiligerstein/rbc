<h1>Página Principal</h1>

<table>
	<tr>
		<td><?= $this->Html->link('Alunos', array('controller' => 'alunos', 'action' => 'index')); ?></td>
		<td>Lista todos alunos.</td>
	</tr>
	<tr>
		<td><?= $this->Html->link('Professores', array('controller' => 'professores', 'action' => 'index')); ?></td>
		<td>Lista todos professores.</td>
	</tr>
	<tr>
		<td><?= $this->Html->link('Membros da Direção', array('controller' => 'direcoes', 'action' => 'index')); ?></td>
		<td>Membros da direção.</td>
	</tr>
</table>

<h1>Alunos da Faculdade</h1>
<table>
    <tr>
        <th>Matricula</th>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Curso</th>
        <th>Período</th>
        <th>Ações</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $alunos, imprimindo
         as informações dos alunos -->

    <?php foreach ($alunos as $aluno): ?>
    <tr>
    	<td><?= $aluno['Aluno']['id'] ?></td>
        <td>
            <?= $this->Html->link($aluno['Aluno']['nome'], array('controller' => 'alunos', 'action' => 'view', $aluno['Aluno']['id'])); ?>
        </td>
        <td><?php echo $aluno['Aluno']['telefone']; ?></td>
        <td><?php echo $aluno['Aluno']['curso']; ?></td>
        <td><?php echo $aluno['Aluno']['periodo']; ?></td>
        <td>
        	<?= $this->Html->link('Excluir', array('controller' => 'alunos', 'action' => 'remove', $aluno['Aluno']['id'])); ?>
        	<?= $this->Html->link('Editar', array('controller' => 'alunos', 'action' => 'edit', $aluno['Aluno']['id'])); ?>        	
        </td>
    </tr>
    
    <?php endforeach; ?>
    
</table>

<?= $this->Html->link('Adicionar Aluno', array('controller' => 'alunos', 'action' => 'add'), array('class' => 'submit')); ?>


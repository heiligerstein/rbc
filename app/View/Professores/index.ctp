<h1>Professores da Faculdade</h1>
<table>
    <tr>
        <th>Matricula</th>
        <th>Nome</th>
        <th>Formação</th>
        <th>Maior titulação</th>
        <th>Departamento</th>
        <th>Ações</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $professores, imprimindo
         as informações dos professores -->

    <?php foreach ($professores as $professor): ?>
    <tr>
    	<td><?= $professor['Professor']['id'] ?></td>
        <td>
            <?= $this->Html->link($professor['Professor']['nome'], array('controller' => 'professores', 'action' => 'view', $professor['Professor']['id'])); ?>
        </td>
        <td><?= $professor['Professor']['formacao']; ?></td>
        <td><?= $professor['Professor']['maior_titulacao']; ?></td>
        <td><?= $professor['Professor']['departamento']; ?></td>
        <td>
        	<?= $this->Html->link('Excluir', array('controller' => 'professores', 'action' => 'remove', $professor['Professor']['id'])); ?>
        	<?= $this->Html->link('Editar', array('controller' => 'professores', 'action' => 'edit', $professor['Professor']['id'])); ?>        	
        </td>
    </tr>
    
    <?php endforeach; ?>
    
</table>

<?= $this->Html->link('Adicionar Professor', array('controller' => 'professores', 'action' => 'add'), array('class' => 'submit')); ?>


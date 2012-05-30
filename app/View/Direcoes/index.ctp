<h1>Membros da Direção da Faculdade</h1>
<table>
    <tr>
        <th>Matricula</th>
        <th>Nome</th>
        <th>Cargo</th>
        <th>Ações</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $direcoes, imprimindo
         as informações dos direcoes -->

    <?php foreach ($direcoes as $direcao): ?>
    
    <tr>
    	<td><?= $direcao['Direcao']['id'] ?></td>
        <td>
            <?= $this->Html->link($direcao['Direcao']['nome'], array('controller' => 'direcoes', 'action' => 'view', $direcao['Direcao']['id'])); ?>
        </td>
        <td><?= $direcao['Direcao']['cargo']; ?></td>
        <td>
        	<?= $this->Html->link('Excluir', array('controller' => 'direcoes', 'action' => 'remove', $direcao['Direcao']['id'])); ?>
        	<?= $this->Html->link('Editar', array('controller' => 'direcoes', 'action' => 'edit', $direcao['Direcao']['id'])); ?>        	
        </td>
    </tr>
    
    <?php endforeach; ?>
    
</table>

<?= $this->Html->link('Adicionar membro da direção', array('controller' => 'direcoes', 'action' => 'add'), array('class' => 'submit')); ?>
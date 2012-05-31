<h3>Casos da Faculdade</h3>
<table>
    <tr>
        <th>Id</th>
        <th width="15%">Descrição do Problema</th>
        <th>Descrição da Solução</th>
        <th>Conclusão</th>
        <th width="10%">Ações</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $casos, imprimindo
         as informações dos casos -->

    <?php foreach ($casos as $caso): ?>
    <tr>
    	<td><?= $caso['Caso']['id'] ?></td>
        <td>
            <?= $this->Html->link($caso['Caso']['descricao_problema'], array('controller' => 'casos', 'action' => 'view', $caso['Caso']['id'])); ?>
        </td>
        <td><?php echo $caso['Caso']['descricao_solucao']; ?></td>
        <td><?php echo $caso['Caso']['conclusao']; ?></td>
        <td>
        	<?= $this->Html->link('Excluir', array('controller' => 'casos', 'action' => 'remove', $caso['Caso']['id'])); ?>
        	<?= $this->Html->link('Editar', array('controller' => 'casos', 'action' => 'edit', $caso['Caso']['id'])); ?>        	
        </td>
    </tr>
    
    <?php endforeach; ?>
    
</table>

<?= $this->Html->link('Adicionar Caso', array('controller' => 'casos', 'action' => 'add'), array('class' => 'submit')); ?>
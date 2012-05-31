<!-- File: /app/View/Casos/view.ctp -->

<h3>Descrição do Caso</h3>

<h3><b>Id: </b><?= $caso['Caso']['id']?></h3>
<h3><b>Descrição do problema: </b><?= $caso['Caso']['descricao_problema']?></h3>
<h3><b>Descrição da solução: </b><?= $caso['Caso']['descricao_solucao']?></h3>
<h3><b>Conclusão: </b><?= $caso['Caso']['conclusao']?></h3>
<h2><small>Criado em: <?= $caso['Caso']['created']?></small></h2>
<h2><small>Atualizado em: <?= $caso['Caso']['created']?></small></h2>

<br/>
<h3>Tabela de afinidade com outros casos</h3>

<table>
    <tr>
        <th>Id</th>
        <th width="15%">Descrição do Problema</th>
        <th>Descrição da Solução</th>
        <th>Conclusão</th>
        <th align="center" width="5%">Afinidade</th>
    </tr>

    <?php foreach ($casos as $caso): ?>
    <tr>
    	<td><?= $caso['Caso']['id'] ?></td>
        <td>
            <?= $this->Html->link($caso['Caso']['descricao_problema'], array('controller' => 'casos', 'action' => 'view', $caso['Caso']['id'])); ?>
        </td>
        <td><?= $caso['Caso']['descricao_solucao']; ?></td>
        <td><?= $caso['Caso']['conclusao']; ?></td>
        <td><?= number_format($caso['Caso']['porcentagem'], 2) . ' %' ?></td>
    </tr>
    
    <?php endforeach; ?>
    
</table>





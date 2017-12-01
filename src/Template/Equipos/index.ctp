<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipo[]|\Cake\Collection\CollectionInterface $equipos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ligas'), ['controller' => 'Ligas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Liga'), ['controller' => 'Ligas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jugadors'), ['controller' => 'Jugadors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Jugador'), ['controller' => 'Jugadors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipos index large-9 medium-8 columns content">
    <h3><?= __('Equipos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
               
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ciudad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('provincia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('liga_id') ?></th>
               
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipos as $equipo): ?>
            <tr>
               
                <td><?= h($equipo->nombre) ?></td>
                <td><?= h($equipo->ciudad) ?></td>
                <td><?= h($equipo->provincia) ?></td>
                <td><?= $equipo->has('liga') ? $this->Html->link($equipo->liga->nombre, ['controller' => 'Ligas', 'action' => 'view', $equipo->liga->id]) : '' ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $equipo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

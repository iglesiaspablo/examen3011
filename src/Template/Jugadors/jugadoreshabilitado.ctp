<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jugador[]|\Cake\Collection\CollectionInterface $jugadors
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Jugador'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jugadors index large-9 medium-8 columns content">
    <h3><?= __('Jugadores que estan habilitados') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido') ?></th>
                <th scope="col"><?= $this->Paginator->sort('posicion') ?></th>
                
                <th scope="col"><?= $this->Paginator->sort('equipo_id') ?></th>
               
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jugadors as $jugador): ?>
            <tr>
                
                <td><?= h($jugador->nombre) ?></td>
                <td><?= h($jugador->apellido) ?></td>
                <td><?= h($jugador->posicion) ?></td>
                
                <td><?= $jugador->has('equipo') ? $this->Html->link($jugador->equipo->nombre, ['controller' => 'Equipos', 'action' => 'view', $jugador->equipo->id]) : '' ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $jugador->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $jugador->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $jugador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jugador->id)]) ?>
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


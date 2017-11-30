<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Liga $liga
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Liga'), ['action' => 'edit', $liga->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Liga'), ['action' => 'delete', $liga->id], ['confirm' => __('Are you sure you want to delete # {0}?', $liga->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ligas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Liga'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ligas view large-9 medium-8 columns content">
    <h3><?= h($liga->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($liga->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($liga->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deporte') ?></th>
            <td><?= h($liga->deporte) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicio') ?></th>
            <td><?= h($liga->fecha_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Fin') ?></th>
            <td><?= h($liga->fecha_fin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($liga->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($liga->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Equipos') ?></h4>
        <?php if (!empty($liga->equipos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Ciudad') ?></th>
                <th scope="col"><?= __('Provincia') ?></th>
                <th scope="col"><?= __('Liga Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($liga->equipos as $equipos): ?>
            <tr>
                <td><?= h($equipos->id) ?></td>
                <td><?= h($equipos->nombre) ?></td>
                <td><?= h($equipos->ciudad) ?></td>
                <td><?= h($equipos->provincia) ?></td>
                <td><?= h($equipos->liga_id) ?></td>
                <td><?= h($equipos->created) ?></td>
                <td><?= h($equipos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Equipos', 'action' => 'view', $equipos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Equipos', 'action' => 'edit', $equipos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Equipos', 'action' => 'delete', $equipos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

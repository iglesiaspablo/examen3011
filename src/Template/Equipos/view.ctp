<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipo $equipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Equipo'), ['action' => 'edit', $equipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equipo'), ['action' => 'delete', $equipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Equipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ligas'), ['controller' => 'Ligas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Liga'), ['controller' => 'Ligas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Jugadors'), ['controller' => 'Jugadors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jugador'), ['controller' => 'Jugadors', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="equipos view large-9 medium-8 columns content">
    <h3><?= h($equipo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($equipo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($equipo->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ciudad') ?></th>
            <td><?= h($equipo->ciudad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Provincia') ?></th>
            <td><?= h($equipo->provincia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Liga') ?></th>
            <td><?= $equipo->has('liga') ? $this->Html->link($equipo->liga->id, ['controller' => 'Ligas', 'action' => 'view', $equipo->liga->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($equipo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($equipo->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Jugadors') ?></h4>
        <?php if (!empty($equipo->jugadors)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Apellido') ?></th>
                <th scope="col"><?= __('Posicion') ?></th>
                <th scope="col"><?= __('Fecha Nacimiento') ?></th>
                <th scope="col"><?= __('Rating') ?></th>
                <th scope="col"><?= __('Esta Sancionado') ?></th>
                <th scope="col"><?= __('Equipo Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($equipo->jugadors as $jugadors): ?>
            <tr>
                <td><?= h($jugadors->id) ?></td>
                <td><?= h($jugadors->nombre) ?></td>
                <td><?= h($jugadors->apellido) ?></td>
                <td><?= h($jugadors->posicion) ?></td>
                <td><?= h($jugadors->fecha_nacimiento) ?></td>
                <td><?= h($jugadors->rating) ?></td>
                <td><?= h($jugadors->esta_sancionado) ?></td>
                <td><?= h($jugadors->equipo_id) ?></td>
                <td><?= h($jugadors->created) ?></td>
                <td><?= h($jugadors->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Jugadors', 'action' => 'view', $jugadors->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Jugadors', 'action' => 'edit', $jugadors->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Jugadors', 'action' => 'delete', $jugadors->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jugadors->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>

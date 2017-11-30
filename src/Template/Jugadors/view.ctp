<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jugador $jugador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Jugador'), ['action' => 'edit', $jugador->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Jugador'), ['action' => 'delete', $jugador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $jugador->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Jugadors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Jugador'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="jugadors view large-9 medium-8 columns content">
    <h3><?= h($jugador->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($jugador->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($jugador->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido') ?></th>
            <td><?= h($jugador->apellido) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Posicion') ?></th>
            <td><?= h($jugador->posicion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Equipo') ?></th>
            <td><?= $jugador->has('equipo') ? $this->Html->link($jugador->equipo->id, ['controller' => 'Equipos', 'action' => 'view', $jugador->equipo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rating') ?></th>
            <td><?= $this->Number->format($jugador->rating) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Esta Sancionado') ?></th>
            <td><?= $this->Number->format($jugador->esta_sancionado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Nacimiento') ?></th>
            <td><?= h($jugador->fecha_nacimiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($jugador->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($jugador->modified) ?></td>
        </tr>
    </table>
</div>

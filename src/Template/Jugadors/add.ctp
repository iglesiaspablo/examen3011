<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Jugador $jugador
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Jugadors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="jugadors form large-9 medium-8 columns content">
    <?= $this->Form->create($jugador) ?>
    <fieldset>
        <legend><?= __('Add Jugador') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellido');
            echo $this->Form->control('posicion');
            echo $this->Form->control('fecha_nacimiento', ['empty' => true]);
            echo $this->Form->control('rating');
            echo $this->Form->control('esta_sancionado');
            echo $this->Form->control('equipo_id', ['options' => $equipos, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipo $equipo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Equipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ligas'), ['controller' => 'Ligas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Liga'), ['controller' => 'Ligas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Jugadors'), ['controller' => 'Jugadors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Jugador'), ['controller' => 'Jugadors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="equipos form large-9 medium-8 columns content">
    <?= $this->Form->create($equipo) ?>
    <fieldset>
        <legend><?= __('Add Equipo') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('ciudad');
            echo $this->Form->control('provincia');
            echo $this->Form->control('liga_id', ['options' => $ligas, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Liga $liga
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $liga->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $liga->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ligas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Equipos'), ['controller' => 'Equipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Equipo'), ['controller' => 'Equipos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ligas form large-9 medium-8 columns content">
    <?= $this->Form->create($liga) ?>
    <fieldset>
        <legend><?= __('Edit Liga') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('deporte');
            echo $this->Form->control('fecha_inicio', ['empty' => true]);
            echo $this->Form->control('fecha_fin', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

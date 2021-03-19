<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Angiosperma $angiosperma
 */
?>
<?php
$this->extend('../Layout/TwitterBootstrap/default');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Angiospermas'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Plantas'), ['controller' => 'Plantas', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Planta'), ['controller' => 'Plantas', 'action' => 'add']) ?> </li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Angiospermas'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Plantas'), ['controller' => 'Plantas', 'action' => 'index']) ?> </li>
    <li><?= $this->Html->link(__('New Planta'), ['controller' => 'Plantas', 'action' => 'add']) ?> </li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($angiosperma); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Angiosperma']) ?></legend>
    <?php
    echo $this->Form->control('nome');
    echo $this->Form->control('imagem');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>

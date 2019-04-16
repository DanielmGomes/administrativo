<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Office $office
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Office'), ['action' => 'edit', $office->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Office'), ['action' => 'delete', $office->id], ['confirm' => __('Are you sure you want to delete # {0}?', $office->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Offices'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Office'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="offices view large-9 medium-8 columns content">
    <h3><?= h($office->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Function') ?></th>
            <td><?= h($office->function) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $office->has('user') ? $this->Html->link($office->user->id, ['controller' => 'Users', 'action' => 'view', $office->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($office->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($office->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($office->modified) ?></td>
        </tr>
    </table>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Centercost $centercost
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Centercost'), ['action' => 'edit', $centercost->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Centercost'), ['action' => 'delete', $centercost->id], ['confirm' => __('Are you sure you want to delete # {0}?', $centercost->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Centercosts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Centercost'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="centercosts view large-9 medium-8 columns content">
    <h3><?= h($centercost->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('CenterCost') ?></th>
            <td><?= h($centercost->centerCost) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $centercost->has('user') ? $this->Html->link($centercost->user->id, ['controller' => 'Users', 'action' => 'view', $centercost->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($centercost->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($centercost->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($centercost->modified) ?></td>
        </tr>
    </table>
</div>

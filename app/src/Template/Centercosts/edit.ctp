<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Centercost $centercost
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $centercost->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $centercost->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Centercosts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="centercosts form large-9 medium-8 columns content">
    <?= $this->Form->create($centercost) ?>
    <fieldset>
        <legend><?= __('Edit Centercost') ?></legend>
        <?php
            echo $this->Form->control('centerCost');
            echo $this->Form->control('users_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

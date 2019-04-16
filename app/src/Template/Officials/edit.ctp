<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Official $official
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $official->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $official->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Officials'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Offices'), ['controller' => 'Offices', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Office'), ['controller' => 'Offices', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sectors'), ['controller' => 'Sectors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sector'), ['controller' => 'Sectors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Center Costs'), ['controller' => 'Centercosts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Center Cost'), ['controller' => 'Centercosts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="officials form large-9 medium-8 columns content">
    <?= $this->Form->create($official) ?>
    <fieldset>
        <legend><?= __('Edit Official') ?></legend>
        <?php
            echo $this->Form->control('badge');
            echo $this->Form->control('name');
            echo $this->Form->control('pis');
            echo $this->Form->control('register');
            echo $this->Form->control('ctps');
            echo $this->Form->control('serie');
            echo $this->Form->control('admission');
            echo $this->Form->control('cpf');
            echo $this->Form->control('voter');
            echo $this->Form->control('reservist');
            echo $this->Form->control('maritalStatus');
            echo $this->Form->control('birth');
            echo $this->Form->control('sex');
            echo $this->Form->control('rg');
            echo $this->Form->control('emitter');
            echo $this->Form->control('cnh');
            echo $this->Form->control('homeExperience');
            echo $this->Form->control('endExperience');
            echo $this->Form->control('adress');
            echo $this->Form->control('neighborhood');
            echo $this->Form->control('city');
            echo $this->Form->control('state');
            echo $this->Form->control('cep');
            echo $this->Form->control('phone');
            echo $this->Form->control('cellPhone');
            echo $this->Form->control('email');
            echo $this->Form->control('scholling');
            echo $this->Form->control('salary');
            echo $this->Form->control('users_id', ['options' => $users]);
            echo $this->Form->control('companies_id', ['options' => $companies]);
            echo $this->Form->control('offices_id', ['options' => $offices]);
            echo $this->Form->control('departments_id', ['options' => $departments]);
            echo $this->Form->control('sectors_id', ['options' => $sectors]);
            echo $this->Form->control('centerCosts_id', ['options' => $centerCosts]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

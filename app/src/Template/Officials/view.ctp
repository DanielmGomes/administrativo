<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Official $official
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Official'), ['action' => 'edit', $official->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Official'), ['action' => 'delete', $official->id], ['confirm' => __('Are you sure you want to delete # {0}?', $official->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Officials'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Official'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Companies'), ['controller' => 'Companies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Offices'), ['controller' => 'Offices', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Office'), ['controller' => 'Offices', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sectors'), ['controller' => 'Sectors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sector'), ['controller' => 'Sectors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Center Costs'), ['controller' => 'Centercosts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Center Cost'), ['controller' => 'Centercosts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="officials view large-9 medium-8 columns content">
    <h3><?= h($official->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Badge') ?></th>
            <td><?= h($official->badge) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($official->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pis') ?></th>
            <td><?= h($official->pis) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Register') ?></th>
            <td><?= h($official->register) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ctps') ?></th>
            <td><?= h($official->ctps) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Serie') ?></th>
            <td><?= h($official->serie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Admission') ?></th>
            <td><?= h($official->admission) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cpf') ?></th>
            <td><?= h($official->cpf) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Voter') ?></th>
            <td><?= h($official->voter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reservist') ?></th>
            <td><?= h($official->reservist) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('MaritalStatus') ?></th>
            <td><?= h($official->maritalStatus) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth') ?></th>
            <td><?= h($official->birth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sex') ?></th>
            <td><?= h($official->sex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rg') ?></th>
            <td><?= h($official->rg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emitter') ?></th>
            <td><?= h($official->emitter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cnh') ?></th>
            <td><?= h($official->cnh) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Adress') ?></th>
            <td><?= h($official->adress) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Neighborhood') ?></th>
            <td><?= h($official->neighborhood) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($official->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($official->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($official->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($official->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('CellPhone') ?></th>
            <td><?= h($official->cellPhone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($official->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Scholling') ?></th>
            <td><?= h($official->scholling) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salary') ?></th>
            <td><?= h($official->salary) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $official->has('user') ? $this->Html->link($official->user->id, ['controller' => 'Users', 'action' => 'view', $official->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $official->has('company') ? $this->Html->link($official->company->id, ['controller' => 'Companies', 'action' => 'view', $official->company->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Office') ?></th>
            <td><?= $official->has('office') ? $this->Html->link($official->office->id, ['controller' => 'Offices', 'action' => 'view', $official->office->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= $official->has('department') ? $this->Html->link($official->department->id, ['controller' => 'Departments', 'action' => 'view', $official->department->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sector') ?></th>
            <td><?= $official->has('sector') ? $this->Html->link($official->sector->id, ['controller' => 'Sectors', 'action' => 'view', $official->sector->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Center Cost') ?></th>
            <td><?= $official->has('center_cost') ? $this->Html->link($official->center_cost->id, ['controller' => 'Centercosts', 'action' => 'view', $official->center_cost->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($official->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('HomeExperience') ?></th>
            <td><?= h($official->homeExperience) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('EndExperience') ?></th>
            <td><?= h($official->endExperience) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($official->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($official->modified) ?></td>
        </tr>
    </table>
</div>

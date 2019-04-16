<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Official[]|\Cake\Collection\CollectionInterface $officials
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Official'), ['action' => 'add']) ?></li>
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
<div class="officials index large-9 medium-8 columns content">
    <h3><?= __('Officials') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('badge') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pis') ?></th>
                <th scope="col"><?= $this->Paginator->sort('register') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ctps') ?></th>
                <th scope="col"><?= $this->Paginator->sort('serie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('admission') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cpf') ?></th>
                <th scope="col"><?= $this->Paginator->sort('voter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reservist') ?></th>
                <th scope="col"><?= $this->Paginator->sort('maritalStatus') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rg') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emitter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cnh') ?></th>
                <th scope="col"><?= $this->Paginator->sort('homeExperience') ?></th>
                <th scope="col"><?= $this->Paginator->sort('endExperience') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adress') ?></th>
                <th scope="col"><?= $this->Paginator->sort('neighborhood') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cep') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cellPhone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('scholling') ?></th>
                <th scope="col"><?= $this->Paginator->sort('salary') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('users_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('companies_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('offices_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('departments_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sectors_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('centerCosts_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($officials as $official): ?>
            <tr>
                <td><?= $this->Number->format($official->id) ?></td>
                <td><?= h($official->badge) ?></td>
                <td><?= h($official->name) ?></td>
                <td><?= h($official->pis) ?></td>
                <td><?= h($official->register) ?></td>
                <td><?= h($official->ctps) ?></td>
                <td><?= h($official->serie) ?></td>
                <td><?= h($official->admission) ?></td>
                <td><?= h($official->cpf) ?></td>
                <td><?= h($official->voter) ?></td>
                <td><?= h($official->reservist) ?></td>
                <td><?= h($official->maritalStatus) ?></td>
                <td><?= h($official->birth) ?></td>
                <td><?= h($official->sex) ?></td>
                <td><?= h($official->rg) ?></td>
                <td><?= h($official->emitter) ?></td>
                <td><?= h($official->cnh) ?></td>
                <td><?= h($official->homeExperience) ?></td>
                <td><?= h($official->endExperience) ?></td>
                <td><?= h($official->adress) ?></td>
                <td><?= h($official->neighborhood) ?></td>
                <td><?= h($official->city) ?></td>
                <td><?= h($official->state) ?></td>
                <td><?= h($official->cep) ?></td>
                <td><?= h($official->phone) ?></td>
                <td><?= h($official->cellPhone) ?></td>
                <td><?= h($official->email) ?></td>
                <td><?= h($official->scholling) ?></td>
                <td><?= h($official->salary) ?></td>
                <td><?= h($official->created) ?></td>
                <td><?= h($official->modified) ?></td>
                <td><?= $official->has('user') ? $this->Html->link($official->user->id, ['controller' => 'Users', 'action' => 'view', $official->user->id]) : '' ?></td>
                <td><?= $official->has('company') ? $this->Html->link($official->company->id, ['controller' => 'Companies', 'action' => 'view', $official->company->id]) : '' ?></td>
                <td><?= $official->has('office') ? $this->Html->link($official->office->id, ['controller' => 'Offices', 'action' => 'view', $official->office->id]) : '' ?></td>
                <td><?= $official->has('department') ? $this->Html->link($official->department->id, ['controller' => 'Departments', 'action' => 'view', $official->department->id]) : '' ?></td>
                <td><?= $official->has('sector') ? $this->Html->link($official->sector->id, ['controller' => 'Sectors', 'action' => 'view', $official->sector->id]) : '' ?></td>
                <td><?= $official->has('center_cost') ? $this->Html->link($official->center_cost->id, ['controller' => 'Centercosts', 'action' => 'view', $official->center_cost->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $official->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $official->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $official->id], ['confirm' => __('Are you sure you want to delete # {0}?', $official->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>

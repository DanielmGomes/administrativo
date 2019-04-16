<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Officials Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\CompaniesTable|\Cake\ORM\Association\BelongsTo $Companies
 * @property \App\Model\Table\OfficesTable|\Cake\ORM\Association\BelongsTo $Offices
 * @property \App\Model\Table\DepartmentsTable|\Cake\ORM\Association\BelongsTo $Departments
 * @property \App\Model\Table\SectorsTable|\Cake\ORM\Association\BelongsTo $Sectors
 * @property \App\Model\Table\CentercostsTable|\Cake\ORM\Association\BelongsTo $CenterCosts
 *
 * @method \App\Model\Entity\Official get($primaryKey, $options = [])
 * @method \App\Model\Entity\Official newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Official[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Official|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Official|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Official patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Official[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Official findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OfficialsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('officials');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'users_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Companies', [
            'foreignKey' => 'companies_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Offices', [
            'foreignKey' => 'offices_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Departments', [
            'foreignKey' => 'departments_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Sectors', [
            'foreignKey' => 'sectors_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('CenterCosts', [
            'foreignKey' => 'centerCosts_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', 'create');

        $validator
            ->scalar('badge')
            ->maxLength('badge', 45)
            ->requirePresence('badge', 'create')
            ->allowEmptyString('badge', false);

        $validator
            ->scalar('name')
            ->maxLength('name', 45)
            ->requirePresence('name', 'create')
            ->allowEmptyString('name', false);

        $validator
            ->scalar('pis')
            ->maxLength('pis', 45)
            ->requirePresence('pis', 'create')
            ->allowEmptyString('pis', false);

        $validator
            ->scalar('register')
            ->maxLength('register', 45)
            ->requirePresence('register', 'create')
            ->allowEmptyString('register', false);

        $validator
            ->scalar('ctps')
            ->maxLength('ctps', 45)
            ->requirePresence('ctps', 'create')
            ->allowEmptyString('ctps', false);

        $validator
            ->scalar('serie')
            ->maxLength('serie', 45)
            ->requirePresence('serie', 'create')
            ->allowEmptyString('serie', false);

        $validator
            ->scalar('admission')
            ->maxLength('admission', 45)
            ->requirePresence('admission', 'create')
            ->allowEmptyString('admission', false);

        $validator
            ->scalar('cpf')
            ->maxLength('cpf', 45)
            ->requirePresence('cpf', 'create')
            ->allowEmptyString('cpf', false);

        $validator
            ->scalar('voter')
            ->maxLength('voter', 45)
            ->requirePresence('voter', 'create')
            ->allowEmptyString('voter', false);

        $validator
            ->scalar('reservist')
            ->maxLength('reservist', 45)
            ->requirePresence('reservist', 'create')
            ->allowEmptyString('reservist', false);

        $validator
            ->scalar('maritalStatus')
            ->maxLength('maritalStatus', 45)
            ->requirePresence('maritalStatus', 'create')
            ->allowEmptyString('maritalStatus', false);

        $validator
            ->scalar('birth')
            ->maxLength('birth', 45)
            ->requirePresence('birth', 'create')
            ->allowEmptyString('birth', false);

        $validator
            ->scalar('sex')
            ->maxLength('sex', 45)
            ->requirePresence('sex', 'create')
            ->allowEmptyString('sex', false);

        $validator
            ->scalar('rg')
            ->maxLength('rg', 45)
            ->requirePresence('rg', 'create')
            ->allowEmptyString('rg', false);

        $validator
            ->scalar('emitter')
            ->maxLength('emitter', 45)
            ->requirePresence('emitter', 'create')
            ->allowEmptyString('emitter', false);

        $validator
            ->scalar('cnh')
            ->maxLength('cnh', 45)
            ->requirePresence('cnh', 'create')
            ->allowEmptyString('cnh', false);

        $validator
            ->date('homeExperience')
            ->requirePresence('homeExperience', 'create')
            ->allowEmptyDate('homeExperience', false);

        $validator
            ->date('endExperience')
            ->requirePresence('endExperience', 'create')
            ->allowEmptyDate('endExperience', false);

        $validator
            ->scalar('adress')
            ->maxLength('adress', 45)
            ->requirePresence('adress', 'create')
            ->allowEmptyString('adress', false);

        $validator
            ->scalar('neighborhood')
            ->maxLength('neighborhood', 45)
            ->requirePresence('neighborhood', 'create')
            ->allowEmptyString('neighborhood', false);

        $validator
            ->scalar('city')
            ->maxLength('city', 45)
            ->requirePresence('city', 'create')
            ->allowEmptyString('city', false);

        $validator
            ->scalar('state')
            ->maxLength('state', 45)
            ->requirePresence('state', 'create')
            ->allowEmptyString('state', false);

        $validator
            ->scalar('cep')
            ->maxLength('cep', 45)
            ->requirePresence('cep', 'create')
            ->allowEmptyString('cep', false);

        $validator
            ->scalar('phone')
            ->maxLength('phone', 45)
            ->requirePresence('phone', 'create')
            ->allowEmptyString('phone', false);

        $validator
            ->scalar('cellPhone')
            ->maxLength('cellPhone', 45)
            ->requirePresence('cellPhone', 'create')
            ->allowEmptyString('cellPhone', false);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->allowEmptyString('email', false);

        $validator
            ->scalar('scholling')
            ->maxLength('scholling', 45)
            ->requirePresence('scholling', 'create')
            ->allowEmptyString('scholling', false);

        $validator
            ->scalar('salary')
            ->maxLength('salary', 45)
            ->requirePresence('salary', 'create')
            ->allowEmptyString('salary', false);

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['users_id'], 'Users'));
        $rules->add($rules->existsIn(['companies_id'], 'Companies'));
        $rules->add($rules->existsIn(['offices_id'], 'Offices'));
        $rules->add($rules->existsIn(['departments_id'], 'Departments'));
        $rules->add($rules->existsIn(['sectors_id'], 'Sectors'));
        $rules->add($rules->existsIn(['centerCosts_id'], 'CenterCosts'));

        return $rules;
    }
}

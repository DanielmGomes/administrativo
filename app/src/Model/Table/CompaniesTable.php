<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Companies Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Company get($primaryKey, $options = [])
 * @method \App\Model\Entity\Company newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Company[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Company|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Company|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Company patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Company[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Company findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CompaniesTable extends Table
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

        $this->setTable('companies');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'users_id',
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
            ->scalar('company')
            ->maxLength('company', 45)
            ->requirePresence('company', 'create')
            ->allowEmptyString('company', false);

        $validator
            ->scalar('trade')
            ->maxLength('trade', 45)
            ->requirePresence('trade', 'create')
            ->allowEmptyString('trade', false);

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
            ->scalar('companiescol')
            ->maxLength('companiescol', 45)
            ->requirePresence('companiescol', 'create')
            ->allowEmptyString('companiescol', false);

        $validator
            ->scalar('activity')
            ->maxLength('activity', 45)
            ->requirePresence('activity', 'create')
            ->allowEmptyString('activity', false);

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
        $rules->add($rules->existsIn(['users_id'], 'Users'));

        return $rules;
    }
}

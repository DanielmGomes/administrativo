<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Provider Entity
 *
 * @property int $id
 * @property string|null $company
 * @property string|null $trade
 * @property string|null $adress
 * @property string|null $neighborhood
 * @property string|null $city
 * @property string|null $state
 * @property string|null $cep
 * @property string|null $phone
 * @property string|null $cellPhone
 * @property string|null $email
 * @property string|null $cnpj
 * @property string|null $contact
 * @property int|null $user_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 */
class Provider extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'company' => true,
        'trade' => true,
        'adress' => true,
        'neighborhood' => true,
        'city' => true,
        'state' => true,
        'cep' => true,
        'phone' => true,
        'cellPhone' => true,
        'email' => true,
        'cnpj' => true,
        'contact' => true,
        'user_id' => true,
        'created' => true,
        'modified' => true,
        'user' => true
    ];
}

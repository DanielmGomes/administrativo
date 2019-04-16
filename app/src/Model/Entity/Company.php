<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Company Entity
 *
 * @property int $id
 * @property string $company
 * @property string $trade
 * @property string $adress
 * @property string $neighborhood
 * @property string $city
 * @property string $state
 * @property string $cep
 * @property string $companiescol
 * @property string $activity
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $users_id
 *
 * @property \App\Model\Entity\User $user
 */
class Company extends Entity
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
        'companiescol' => true,
        'activity' => true,
        'created' => true,
        'modified' => true,
        'users_id' => true,
        'user' => true
    ];
}

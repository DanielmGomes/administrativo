<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Official Entity
 *
 * @property int $id
 * @property string $badge
 * @property string $name
 * @property string $pis
 * @property string $register
 * @property string $ctps
 * @property string $serie
 * @property string $admission
 * @property string $cpf
 * @property string $voter
 * @property string $reservist
 * @property string $maritalStatus
 * @property string $birth
 * @property string $sex
 * @property string $rg
 * @property string $emitter
 * @property string $cnh
 * @property \Cake\I18n\FrozenDate $homeExperience
 * @property \Cake\I18n\FrozenDate $endExperience
 * @property string $adress
 * @property string $neighborhood
 * @property string $city
 * @property string $state
 * @property string $cep
 * @property string $phone
 * @property string $cellPhone
 * @property string $email
 * @property string $scholling
 * @property string $salary
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $users_id
 * @property int $companies_id
 * @property int $offices_id
 * @property int $departments_id
 * @property int $sectors_id
 * @property int $centerCosts_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\Office $office
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\Sector $sector
 * @property \App\Model\Entity\Centercost $center_cost
 */
class Official extends Entity
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
        'badge' => true,
        'name' => true,
        'pis' => true,
        'register' => true,
        'ctps' => true,
        'serie' => true,
        'admission' => true,
        'cpf' => true,
        'voter' => true,
        'reservist' => true,
        'maritalStatus' => true,
        'birth' => true,
        'sex' => true,
        'rg' => true,
        'emitter' => true,
        'cnh' => true,
        'homeExperience' => true,
        'endExperience' => true,
        'adress' => true,
        'neighborhood' => true,
        'city' => true,
        'state' => true,
        'cep' => true,
        'phone' => true,
        'cellPhone' => true,
        'email' => true,
        'scholling' => true,
        'salary' => true,
        'created' => true,
        'modified' => true,
        'users_id' => true,
        'companies_id' => true,
        'offices_id' => true,
        'departments_id' => true,
        'sectors_id' => true,
        'centerCosts_id' => true,
        'user' => true,
        'company' => true,
        'office' => true,
        'department' => true,
        'sector' => true,
        'center_cost' => true
    ];
}

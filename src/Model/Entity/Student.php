<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property string $student_name
 * @property string $subject_name
 * @property string $class_name
 * @property string $email
 * @property string $phone_number
 * @property \Cake\I18n\Date $birth_date
 * @property string $street_1
 * @property string $street_2
 * @property int $postcode
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 * @property string $city
 * @property string $state
 * @property int $status
 */
class Student extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'student_name' => true,
        'subject_name' => true,
        'class_name' => true,
        'email' => true,
        'phone_number' => true,
        'birth_date' => true,
        'street_1' => true,
        'street_2' => true,
        'postcode' => true,
        'created' => true,
        'modified' => true,
        'city' => true,
        'state' => true,
        'status' => true,
    ];
}

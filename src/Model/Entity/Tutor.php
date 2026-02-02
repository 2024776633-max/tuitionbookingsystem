<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tutor Entity
 *
 * @property int $id
 * @property string $tutor_name
 * @property string $email
 * @property string $phone
 * @property string $subject_name
 * @property string $availability
 * @property int $status
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 */
class Tutor extends Entity
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
        'tutor_name' => true,
        'email' => true,
        'phone' => true,
        'subject_name' => true,
        'availability' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
    ];
}

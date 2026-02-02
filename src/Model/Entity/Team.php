<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Team Entity
 *
 * @property int $id
 * @property string $subject_name
 * @property string $tutor_name
 * @property string $class_name
 * @property string $level
 * @property \Cake\I18n\DateTime $start_time
 * @property \Cake\I18n\DateTime $end_time
 * @property int $total_student
 * @property int $status
 * @property \Cake\I18n\DateTime $created
 * @property \Cake\I18n\DateTime $modified
 */
class Team extends Entity
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
        'subject_name' => true,
        'tutor_name' => true,
        'class_name' => true,
        'level' => true,
        'start_time' => true,
        'end_time' => true,
        'total_student' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
    ];
}

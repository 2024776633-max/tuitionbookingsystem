<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StudentsFixture
 */
class StudentsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'student_name' => 'Lorem ipsum dolor sit amet',
                'subject_name' => 'Lorem ipsum dolor sit amet',
                'class_name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'phone_number' => 'Lorem ipsum dolor ',
                'birth_date' => '2026-02-02',
                'street_1' => 'Lorem ipsum dolor sit amet',
                'street_2' => 'Lorem ipsum dolor sit amet',
                'postcode' => 1,
                'created' => '2026-02-02 11:50:39',
                'modified' => '2026-02-02 11:50:39',
                'city' => 'Lorem ipsum dolor sit amet',
                'state' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
            ],
        ];
        parent::init();
    }
}

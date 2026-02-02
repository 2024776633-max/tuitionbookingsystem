<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BookingsFixture
 */
class BookingsFixture extends TestFixture
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
                'class_name' => 'Lorem ipsum dolor sit amet',
                'subject_name' => 'Lorem ipsum dolor sit amet',
                'tutor_name' => 'Lorem ipsum dolor sit amet',
                'level' => 'Lorem ipsum dolor sit amet',
                'session' => 'Lorem ipsum dolor sit amet',
                'date' => '2026-02-02 16:17:09',
                'status' => 1,
                'created' => '2026-02-02 16:17:09',
                'modified' => '2026-02-02 16:17:09',
            ],
        ];
        parent::init();
    }
}

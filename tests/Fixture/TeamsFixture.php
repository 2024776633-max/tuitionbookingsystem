<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TeamsFixture
 */
class TeamsFixture extends TestFixture
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
                'subject_name' => 'Lorem ipsum dolor sit amet',
                'tutor_name' => 'Lorem ipsum dolor sit amet',
                'class_name' => 'Lorem ipsum dolor sit amet',
                'level' => 'Lorem ipsum dolor sit amet',
                'start_time' => '2026-02-02 04:45:54',
                'end_time' => '2026-02-02 04:45:54',
                'total_student' => 1,
                'status' => 1,
                'created' => '2026-02-02 04:45:54',
                'modified' => '2026-02-02 04:45:54',
            ],
        ];
        parent::init();
    }
}

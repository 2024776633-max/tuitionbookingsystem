<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * SubjectsFixture
 */
class SubjectsFixture extends TestFixture
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
                'level' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2026-02-02 04:42:26',
                'modified' => '2026-02-02 04:42:26',
            ],
        ];
        parent::init();
    }
}

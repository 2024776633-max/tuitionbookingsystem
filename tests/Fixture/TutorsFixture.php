<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TutorsFixture
 */
class TutorsFixture extends TestFixture
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
                'tutor_name' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'phone' => 'Lorem ipsum dolor ',
                'subject_name' => 'Lorem ipsum dolor sit amet',
                'availability' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'created' => '2026-02-02 08:05:08',
                'modified' => '2026-02-02 08:05:08',
            ],
        ];
        parent::init();
    }
}

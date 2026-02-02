<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tutor $tutor
 */
?>
<!--Header-->
<div class="row text-body-secondary">
    <div class="col-10">
        <h1 class="my-0 page_title"><?= $title ?></h1>
        <h6 class="sub_title text-body-secondary"><?= $system_name ?></h6>
    </div>
    <div class="col-2 text-end">
        <div class="dropdown mx-3 mt-2">
            <button class="btn p-0 border-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa-solid fa-bars text-primary"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
                <?= $this->Html->link(__('List Tutors'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?>
            </div>
        </div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="row">
    <!-- Left column: Instructions -->
    <div class="col-md-4">
        <div class="card bg-body-tertiary shadow border-0 rounded-0">
            <div class="card-body" style="text-align: justify;">
                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-header bg-primary text-white fw-bold">
                        Instructions
                    </div>
                    <div class="tricolor_line mb-3"></div>
                    <div class="card-body text-secondary">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                ✅ Please ensure all required fields <strong>Name</strong>, <strong>Email</strong>, <strong>Phone Number</strong>, <strong>Subject</strong>, <strong>Availability</strong>, and <strong>Status</strong> are filled in accurately.
                            </li>
                            <li class="list-group-item">
                                🔐 All submitted tutor information will be securely stored and managed within the Tuition Booking System.
                            </li>
                            <li class="list-group-item">
                                🛠️ The system administrator reserves the right to review and update tutor details when necessary to maintain data integrity.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Right column: Form -->
    <div class="col-md-8">
        <div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
            <div class="card-body text-body-secondary">
                <?= $this->Form->create($tutor) ?>
                <fieldset>
                    <legend class="fw-bold text-primary mb-4"><?= __('Add Tutor') ?></legend>

                    <div class="mb-3">
                        <?= $this->Form->control('name', ['label' => 'Name', 'class' => 'form-control shadow-sm rounded']) ?>
                    </div>
                    <div class="mb-3">
                        <?= $this->Form->control('email', ['label' => 'Email', 'class' => 'form-control shadow-sm rounded']) ?>
                    </div>
                    <div class="mb-3">
                        <?= $this->Form->control('phone', ['label' => 'Phone Number', 'class' => 'form-control shadow-sm rounded']) ?>
                    </div>

                    <!-- Subject dropdown -->
                    <div class="mb-3">
                        <?= $this->Form->control('subject', [
                            'type' => 'select',
                            'label' => 'Subject',
                            'class' => 'form-select shadow-sm rounded',
                            'options' => [
                                'Bahasa Melayu' => 'Bahasa Melayu',
                                'English' => 'English',
                                'Mathematics' => 'Mathematics',
                                'Science' => 'Science',
                                'History' => 'History',
                                'Geography' => 'Geography',
                                'Islamic Studies' => 'Islamic Studies',
                                'Moral Studies' => 'Moral Studies',
                                'Additional Mathematics' => 'Additional Mathematics',
                                'Physics' => 'Physics',
                                'Chemistry' => 'Chemistry',
                                'Biology' => 'Biology',
                                'Principles of Accounting' => 'Principles of Accounting',
                                'Economics' => 'Economics',
                                'Business Studies' => 'Business Studies',
                                'Computer Science' => 'Computer Science',
                                'Literature in English' => 'Literature in English',
                                'Visual Arts' => 'Visual Arts',
                                'Music' => 'Music',
                                'Physical Education' => 'Physical Education',
                                'Bahasa Arab' => 'Bahasa Arab',
                                'Bahasa Cina' => 'Bahasa Cina',
                                'Bahasa Tamil' => 'Bahasa Tamil',
                                'Design & Technology' => 'Design & Technology',
                                'Information & Communication Technology (ICT)' => 'Information & Communication Technology (ICT)',
                                'Culinary Arts' => 'Culinary Arts',
                                'Hospitality' => 'Hospitality',
                                'Automotive Technology' => 'Automotive Technology',
                                'Electrical & Electronics' => 'Electrical & Electronics',
                                'Fashion Design' => 'Fashion Design',
                                'Agriculture' => 'Agriculture',
                                'Multimedia & Animation' => 'Multimedia & Animation',
                                'Performing Arts' => 'Performing Arts',
                                'Health Education' => 'Health Education'
                            ],
                            'empty' => 'Select Subject'
                        ]) ?>
                    </div>

                    <div class="mb-3">
                        <?= $this->Form->control('availability', ['label' => 'Availability', 'class' => 'form-control shadow-sm rounded']) ?>
                    </div>

                    <!-- Status dropdown -->
                    <div class="mb-3">
                        <?= $this->Form->control('status', [
                            'type' => 'select',
                            'label' => 'Status',
                            'class' => 'form-select shadow-sm rounded',
                            'options' => [
                                '0' => 'Inactive',
                                '1' => 'Active',
                                '2' => 'Archived'
                            ],
                            'empty' => 'Select Status'
                        ]) ?>
                    </div>
                </fieldset>

                <div class="text-end mt-4">
                    <?= $this->Form->button('Reset', ['type' => 'reset', 'class' => 'btn btn-outline-warning me-2']) ?>
                    <?= $this->Form->button(__('Submit'), ['type' => 'submit', 'class' => 'btn btn-outline-primary']) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

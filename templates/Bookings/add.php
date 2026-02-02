<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
 */
?>

<!-- Header -->
<div class="row text-body-secondary">
    <div class="col-10">
        <h1 class="my-0 page_title"><?= __('Add Booking') ?></h1>
        <h6 class="sub_title text-body-secondary"><?= $system_name ?></h6>
    </div>
    <div class="col-2 text-end">
        <div class="dropdown mx-3 mt-2">
            <button class="btn p-0 border-0" type="button" id="orederStatistics"
                data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-bars text-primary"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <?= $this->Html->link(__('List Bookings'), ['action' => 'index'], [
                    'class' => 'dropdown-item'
                ]) ?>
            </div>
        </div>
    </div>
</div>
<div class="line mb-4"></div>
<!-- /Header -->

<div class="row">

    <!-- Instructions -->
    <div class="col-md-3">
        <div class="card bg-body-tertiary shadow border-0 rounded-0">
            <div class="card-body" style="text-align: justify;">
                <div class="card-title">Instructions</div>
                <div class="tricolor_line mb-3"></div>
                User must complete all required fields.
                <ol class="mt-3">
                    <li>
                        Ensure all required fields such as
                        <strong>Student Name</strong>,
                        <strong>Class</strong>,
                        <strong>Subject</strong>,
                        <strong>Tutor</strong>,
                        <strong>Level</strong>,
                        <strong>Date</strong>,
                        and <strong>Session</strong> are filled accurately.
                    </li>
                    <li>
                        All booking information will be securely stored and managed within the Tuition Booking System.
                    </li>
                    <li>
                        The system administrator may review and update booking details if necessary.
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <!-- Form -->
    <div class="col-md-9">
        <div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
            <div class="card-body text-body-secondary">

                <?= $this->Form->create($booking) ?>
                <fieldset>

                    <!-- Student Name -->
                    <div class="row">
                        <div class="col-md-6">
                            <?= $this->Form->control('student_name', [
                                'label' => 'Student Name'
                            ]) ?>
                        </div>
                    </div>

                    <!-- Class & Subject -->
                    <div class="row">
                        <div class="col-md-6">
                            <?= $this->Form->control('class_name', [
                                'type' => 'select',
                                'label' => 'Class',
                                'class' => 'form-select shadow-sm rounded',
                                'empty' => 'Select Class',
                                'options' => [
                                    'Class A1' => 'Class A1',
                                    'Class A2' => 'Class A2',
                                    'Class A3' => 'Class A3',
                                    'Class A4' => 'Class A4',
                                    'Class A5' => 'Class A5',
                                ]
                            ]) ?>
                        </div>

                        <div class="col-md-6">
                            <?= $this->Form->control('subject_name', [
                                'type' => 'select',
                                'label' => 'Subject',
                                'class' => 'form-select shadow-sm rounded',
                                'empty' => 'Select Subject',
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
                                    'Computer Science' => 'Computer Science',
                                ]
                            ]) ?>
                        </div>
                    </div>

                    <!-- Tutor & Level -->
                    <div class="row">
                        <div class="col-md-6">
                            <?= $this->Form->control('tutor_name', [
                                'label' => 'Tutor Name'
                            ]) ?>
                        </div>

                        <div class="col-md-6">
                            <?= $this->Form->control('level', [
                                'type' => 'select',
                                'label' => 'Level',
                                'class' => 'form-select shadow-sm rounded',
                                'empty' => 'Select Level',
                                'options' => [
                                    'Primary 1',
                                    'Primary 2',
                                    'Primary 3',
                                    'Primary 4',
                                    'Primary 5',
                                    'Primary 6',
                                    'Form 1',
                                    'Form 2',
                                    'Form 3',
                                    'Form 4',
                                    'Form 5',
                                    'STPM / A-Level',
                                    'Diploma / Foundation',
                                ]
                            ]) ?>
                        </div>
                    </div>

                    <!-- Date & Session -->
                    <div class="row">
                        <div class="col-md-6">
                            <?= $this->Form->control('date', [
                                'type' => 'datetime',
                                'label' => 'Booking Date',
                                'class' => 'form-control'
                            ]) ?>
                        </div>

                        <div class="col-md-6">
                            <?= $this->Form->control('session', [
                                'type' => 'select',
                                'label' => 'Session',
                                'class' => 'form-select shadow-sm rounded',
                                'empty' => 'Select Session',
                                'options' => [
                                    'Feb 2026' => 'Feb 2026',
                                    'Jul 2026' => 'Jul 2026',
                                    'Oct 2026' => 'Oct 2026'
                                ]
                            ]) ?>
                        </div>
                    </div>

                    <?= $this->Form->hidden('status', ['value' => 1]) ?>

                </fieldset>

                <!-- Buttons -->
                <div class="text-end mt-3">
                    <?= $this->Form->button('Reset', [
                        'type' => 'reset',
                        'class' => 'btn btn-outline-warning'
                    ]) ?>
                    <?= $this->Form->button(__('Submit'), [
                        'type' => 'submit',
                        'class' => 'btn btn-outline-primary'
                    ]) ?>
                </div>

                <?= $this->Form->end() ?>

            </div>
        </div>
    </div>
</div>

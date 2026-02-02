<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Team $team
 */
?>

<!-- Header -->
<div class="row text-body-secondary">
    <div class="col-10">
        <h1 class="my-0 page_title"><?= __('Add Team') ?></h1>
        <h6 class="sub_title text-body-secondary"><?= $system_name ?></h6>
    </div>
    <div class="col-2 text-end">
        <div class="dropdown mx-3 mt-2">
            <button class="btn p-0 border-0" type="button" data-bs-toggle="dropdown">
                <i class="fa-solid fa-bars text-primary"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <?= $this->Html->link(__('List Teams'), ['action' => 'index'], [
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
                        Ensure <strong>Subject</strong>, <strong>Level</strong>, <strong>Class</strong>,
                        <strong>Tutor</strong>, <strong>Start Time</strong>, <strong>End Time</strong>,
                        <strong>Total Students</strong> are filled correctly.
                    </li>
                    <li>
                        All team information will be securely stored in the Tuition Booking System.
                    </li>
                    <li>
                        Administrators may review or update team details if necessary.
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <!-- Form -->
    <div class="col-md-9">
        <div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
            <div class="card-body text-body-secondary">

                <?= $this->Form->create($team) ?>
                <fieldset>

                    <!-- Subject & Level -->
                    <div class="row mb-3">
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

                        <div class="col-md-6">
                            <?= $this->Form->control('level', [
                                'type' => 'select',
                                'label' => 'Level',
                                'class' => 'form-select shadow-sm rounded',
                                'empty' => 'Select Level',
                                'options' => [
                                    'Primary 1' => 'Primary 1',
                                    'Primary 2' => 'Primary 2',
                                    'Primary 3' => 'Primary 3',
                                    'Primary 4' => 'Primary 4',
                                    'Primary 5' => 'Primary 5',
                                    'Primary 6' => 'Primary 6',
                                    'Form 1' => 'Form 1',
                                    'Form 2' => 'Form 2',
                                    'Form 3' => 'Form 3',
                                    'Form 4' => 'Form 4',
                                    'Form 5' => 'Form 5',
                                    'STPM / A-Level' => 'STPM / A-Level',
                                    'Diploma / Foundation' => 'Diploma / Foundation',
                                ]
                            ]) ?>
                        </div>
                    </div>

                    <!-- Class -->
                    <div class="row mb-3">
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
                    </div>

                    <!-- Tutor Name & Total Students side by side -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <?= $this->Form->control('tutor_name', [
                                'label' => 'Tutor Name',
                                'class' => 'form-control shadow-sm rounded'
                            ]) ?>
                        </div>

                        <div class="col-md-6">
                            <?= $this->Form->control('total_student', [
                                'type' => 'number',
                                'label' => 'Total Students',
                                'class' => 'form-control shadow-sm rounded'
                            ]) ?>
                        </div>
                    </div>

                    <!-- Time -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <?= $this->Form->control('start_time', [
                                'label' => 'Start Time'
                            ]) ?>
                        </div>
                        <div class="col-md-6">
                            <?= $this->Form->control('end_time', [
                                'label' => 'End Time'
                            ]) ?>
                        </div>
                    </div>

                    <?= $this->Form->hidden('status') ?>

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

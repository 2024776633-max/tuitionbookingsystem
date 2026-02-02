<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Student $student
 */
?>

<!-- Header -->
<div class="row text-body-secondary">
    <div class="col-10">
        <h1 class="my-0 page_title"><?= $title ?></h1>
        <h6 class="sub_title text-body-secondary"><?= $system_name ?></h6>
    </div>
    <div class="col-2 text-end">
        <div class="dropdown mx-3 mt-2">
            <button class="btn p-0 border-0" type="button" data-bs-toggle="dropdown">
                <i class="fa-solid fa-bars text-primary"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <li><?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id], ['class' => 'dropdown-item']) ?></li>
                <li><?= $this->Form->postLink(
                    __('Delete Student'),
                    ['action' => 'delete', $student->id],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $student->id), 'class' => 'dropdown-item']
                ) ?></li>
                <li><hr class="dropdown-divider"></li>
                <li><?= $this->Html->link(__('List Students'), ['action' => 'index'], ['class' => 'dropdown-item']) ?></li>
                <li><?= $this->Html->link(__('New Student'), ['action' => 'add'], ['class' => 'dropdown-item']) ?></li>
            </div>
        </div>
    </div>
</div>
<div class="line mb-4"></div>
<!-- /Header -->

<div class="row">

    <!-- Left Main Column -->
    <div class="col-md-9">
        <div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
            <div class="card-body text-body-secondary">

                <div class="text-end my-1 me-1">
                    <?= $this->Html->image('logo.png', ['style' => 'width:100%;']) ?>
                </div>

                <style>
                    .one { width:50%; height:25px; background:#74aec4; float:left; }
                    .two { height:25px; background:#f59416; }
                </style>

                <section class="mb-3">
                    <div class="one"></div>
                    <div class="two"></div>
                </section>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><?= __('Student Name') ?></th>
                            <td><?= h($student->student_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject Name') ?></th>
                            <td><?= h($student->subject_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Class Name') ?></th>
                            <td><?= h($student->class_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Email') ?></th>
                            <td><?= h($student->email) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Phone Number') ?></th>
                            <td><?= h($student->phone_number) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Birth Date') ?></th>
                            <td><?= date('d M Y', strtotime($student->birth_date)) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Street 1') ?></th>
                            <td><?= h($student->street_1) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Street 2') ?></th>
                            <td><?= h($student->street_2) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('City') ?></th>
                            <td><?= h($student->city) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('State') ?></th>
                            <td><?= h($student->state) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Postcode') ?></th>
                            <td><?= h($student->postcode) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Created') ?></th>
                            <td><?= date('d M Y - h:i:sa', strtotime($student->created)) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Modified') ?></th>
                            <td><?= date('d M Y - h:i:sa', strtotime($student->modified)) ?></td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <!-- Right Sidebar Column -->
    <div class="col-md-3">
        <div class="card bg-body-tertiary border-0 shadow rounded-0">
            <div class="card-body">
                <div class="card-title mb-0">Student Data</div>
                <div class="tricolor_line mb-3"></div>

                <table class="table table-sm table-hover">
                    <tr>
                        <td>Email</td>
                        <td><?= h($student->email) ?></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td><?= h($student->phone_number) ?></td>
                    </tr>
                    <tr>
                        <td>Created</td>
                        <td><?= date('d M Y', strtotime($student->created)) ?></td>
                    </tr>
                    <tr>
                        <td>Modified</td>
                        <td><?= date('d M Y', strtotime($student->modified)) ?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <?php if ($student->status == 1): ?>
                                <span class="badge bg-success">Active</span>
                            <?php elseif ($student->status == 0): ?>
                                <span class="badge bg-warning">Inactive</span>
                            <?php else: ?>
                                <span class="badge bg-danger">Archived</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    </div>

</div>

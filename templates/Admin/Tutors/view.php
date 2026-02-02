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
            <button class="btn p-0 border-0" type="button" id="orederStatistics" data-bs-toggle="dropdown">
                <i class="fa-solid fa-bars text-primary"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <li><?= $this->Html->link(__('Edit Tutor'), ['action' => 'edit', $tutor->id], ['class' => 'dropdown-item']) ?></li>
                <li><?= $this->Form->postLink(__('Delete Tutor'), ['action' => 'delete', $tutor->id], [
                    'confirm' => __('Are you sure you want to delete # {0}?', $tutor->id),
                    'class' => 'dropdown-item'
                ]) ?></li>
                <li><hr class="dropdown-divider"></li>
                <li><?= $this->Html->link(__('List Tutors'), ['action' => 'index'], ['class' => 'dropdown-item']) ?></li>
                <li><?= $this->Html->link(__('New Tutor'), ['action' => 'add'], ['class' => 'dropdown-item']) ?></li>
            </div>
        </div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="row">
    <!-- MAIN CONTENT -->
    <div class="col-md-9">
        <div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
            <div class="card-body text-body-secondary">

                <!-- Logo -->
                <div class="text-end my-1 me-1">
                    <?= $this->Html->image('logo.png', ['style' => 'width:100%;']) ?>
                </div>

                <!-- Color bar -->
                <style>
                    .one { width: 50%; height: 25px; background-color: #74aec4; float: left; }
                    .two { height: 25px; background-color: #f59416; margin-left: 50%; }
                </style>

                <section class="mb-4">
                    <div class="one"></div>
                    <div class="two"></div>
                </section>

                <!-- Tutor Name -->

                <!-- Tutor Info -->
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th><?= __('Tutor Name') ?></th>
                            <td><?= h($tutor->tutor_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Email') ?></th>
                            <td><?= h($tutor->email) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Phone') ?></th>
                            <td><?= h($tutor->phone) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Subject') ?></th>
                            <td><?= h($tutor->subject_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Availability') ?></th>
                            <td>
                                <?= $tutor->availability == 1
                                    ? '<span class="badge bg-success">Available</span>'
                                    : '<span class="badge bg-warning">Unavailable</span>' ?>
                            </td>
                        </tr>
                        <tr>
                            <th><?= __('ID') ?></th>
                            <td><?= $this->Number->format($tutor->id) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Status') ?></th>
                            <td>
                                <?php
                                if ($tutor->status == 1) {
                                    echo '<span class="badge bg-success">Active</span>';
                                } elseif ($tutor->status == 0) {
                                    echo '<span class="badge bg-warning">Inactive</span>';
                                } else {
                                    echo '<span class="badge bg-danger">Archived</span>';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th><?= __('Created') ?></th>
                             <td><?= date('d M Y - h:i:sa', strtotime($tutor->created)) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Modified') ?></th>
                             <td><?= date('d M Y - h:i:sa', strtotime($tutor->modified)) ?></td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <!-- SIDEBAR -->
    <div class="col-md-3">
        <div class="card bg-body-tertiary border-0 shadow rounded-0">
            <div class="card-body">
                <div class="card-title mb-0">Tutor Data</div>
                <div class="tricolor_line mb-3"></div>

                <table class="table table-sm table-hover">
                    <tr>
                        <td>Created Date</td>
                         <td><?= date('d M Y - h:i:sa', strtotime($tutor->created)) ?></td>
                    </tr>
                    <tr>
                        <td>Modified Date</td>
                         <td><?= date('d M Y - h:i:sa', strtotime($tutor->modified)) ?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <?php
                            if ($tutor->status == 1) {
                                echo '<span class="badge bg-success">Active</span>';
                            } elseif ($tutor->status == 0) {
                                echo '<span class="badge bg-warning">Inactive</span>';
                            } else {
                                echo '<span class="badge bg-danger">Archived</span>';
                            }
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Team $team
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
                <li><?= $this->Html->link(__('Edit Team'), ['action' => 'edit', $team->id], ['class' => 'dropdown-item']) ?></li>
                <li><?= $this->Form->postLink(
                    __('Delete Team'),
                    ['action' => 'delete', $team->id],
                    [
                        'confirm' => __('Are you sure you want to delete # {0}?', $team->id),
                        'class' => 'dropdown-item'
                    ]
                ) ?></li>
                <li><hr class="dropdown-divider"></li>
                <li><?= $this->Html->link(__('List Teams'), ['action' => 'index'], ['class' => 'dropdown-item']) ?></li>
                <li><?= $this->Html->link(__('New Team'), ['action' => 'add'], ['class' => 'dropdown-item']) ?></li>
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
                            <th><?= __('Subject Name') ?></th>
                            <td><?= h($team->subject_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Tutor Name') ?></th>
                            <td><?= h($team->tutor_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Class Name') ?></th>
                            <td><?= h($team->class_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Level') ?></th>
                            <td><?= h($team->level) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Start Time') ?></th>
                            <td><?= date('d M Y - h:i:sa', strtotime($team->start_time)) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('End Time') ?></th>
                            <td><?= date('d M Y - h:i:sa', strtotime($team->end_time)) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Total Students') ?></th>
                            <td><?= h($team->total_student) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Created') ?></th>
                            <td><?= date('d M Y - h:i:sa', strtotime($team->created)) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Modified') ?></th>
                            <td><?= date('d M Y - h:i:sa', strtotime($team->modified)) ?></td>
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
                <div class="card-title mb-0">Team Data</div>
                <div class="tricolor_line mb-3"></div>

                <table class="table table-sm table-hover">
                    <tr>
                        <td>ID</td>
                        <td><?= h($team->id) ?></td>
                    </tr>
                    <tr>
                        <td>Total Students</td>
                        <td><?= h($team->total_student) ?></td>
                    </tr>
                    <tr>
                        <td>Created</td>
                        <td><?= date('d M Y', strtotime($team->created)) ?></td>
                    </tr>
                    <tr>
                        <td>Modified</td>
                        <td><?= date('d M Y', strtotime($team->modified)) ?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <?php if ($team->status == 1): ?>
                                <span class="badge bg-success">Active</span>
                            <?php elseif ($team->status == 0): ?>
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

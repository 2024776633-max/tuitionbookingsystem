<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Subject $subject
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
                <li><?= $this->Html->link(__('Edit Subject'), ['action' => 'edit', $subject->id], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
                <li><?= $this->Form->postLink(__('Delete Subject'), ['action' => 'delete', $subject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subject->id), 'class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
                <li><hr class="dropdown-divider"></li>
                <li><?= $this->Html->link(__('List Subjects'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
                <li><?= $this->Html->link(__('New Subject'), ['action' => 'add'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
            </div>
        </div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="row">
    <!-- Left Main Column -->
    <div class="col-md-9">
        <div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
            <div class="card-body text-body-secondary">

                <div class="text-end my-1 me-1">
                    <?= $this->Html->image('logo.png', ['style' => 'width:100%;']) ?>
                </div>

                <style>
                    .top { width: 100%; margin: auto; }
                    .one { width: 50%; height: 25px; background-color: #74aec4; float: left; }
                    .two { margin-left: 1px; height: 25px; background-color: #f59416; }
                </style>

                <section>
                    <div class="one"></div>
                    <div class="two"></div>
                </section>

                <div class="table-responsive mt-3">
                    <table class="table">
                        <tr>
                            <th><?= __('Subject Name') ?></th>
                            <td><?= h($subject->subject_name) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Level') ?></th>
                            <td><?= h($subject->level) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('ID') ?></th>
                            <td><?= $this->Number->format($subject->id) ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Status') ?></th>
                            <td>
                                <?php
                                if ($subject->status == 1) {
                                    echo '<span class="badge bg-success">Available</span>';
                                } elseif ($subject->status == 2) {
                                    echo '<span class="badge bg-warning">Inavailable</span>';
                                } else {
                                    echo '<span class="badge bg-secondary">Archived</span>';
                                }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th><?= __('Created') ?></th>
                          <td><?= date('d M Y - h:i:sa', strtotime($subject->modified)); ?></td>
                        </tr>
                        <tr>
                            <th><?= __('Modified') ?></th>
                            <td><?= date('d M Y - h:i:sa', strtotime($subject->modified)); ?></td>
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
                <div class="card-title mb-0">Subject Data</div>
                <div class="tricolor_line mb-3"></div>

                <table class="table table-sm table-hover">
                    <tr>
                        <td>Level</td>
                        <td><?= h($subject->level) ?></td>
                    </tr>
                    <tr>
                        <td>Status</td>
                        <td>
                            <?php
                            if ($subject->status == 1) {
                                echo '<span class="badge bg-success">Available</span>';
                            } elseif ($subject->status == 2) {
                                echo '<span class="badge bg-warning">Inavailable</span>';
                            } else {
                                echo '<span class="badge bg-secondary">Archived</span>';
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Created Date</td>
                        <td><?= date('d M Y - h:i:sa', strtotime($subject->modified)); ?></td>
                    </tr>
                    <tr>
                        <td>Modified Date</td>
                        <td><?= date('d M Y - h:i:sa', strtotime($subject->modified)); ?></td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
</div>

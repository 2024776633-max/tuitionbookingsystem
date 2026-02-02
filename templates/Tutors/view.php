<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Tutor $tutor
 */
?>
<!--Header-->
<div class="row text-body-secondary">
	<div class="col-10">
		<h1 class="my-0 page_title"><?php echo $title; ?></h1>
		<h6 class="sub_title text-body-secondary"><?php echo $system_name; ?></h6>
	</div>
	<div class="col-2 text-end">
		<div class="dropdown mx-3 mt-2">
			<button class="btn p-0 border-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa-solid fa-bars text-primary"></i>
			</button>
				<div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
							<li><?= $this->Html->link(__('Edit Tutor'), ['action' => 'edit', $tutor->id], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Form->postLink(__('Delete Tutor'), ['action' => 'delete', $tutor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tutor->id), 'class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><hr class="dropdown-divider"></li>
				<li><?= $this->Html->link(__('List Tutors'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Html->link(__('New Tutor'), ['action' => 'add'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
							</div>
		</div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="row">
	<div class="col-md-9">
		<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
			<div class="card-body text-body-secondary">
            <h3><?= h($tutor->name) ?></h3>
    <div class="table-responsive">
        <table class="table">
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($tutor->name) ?></td>
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
                    <td><?= h($tutor->subject) ?></td>
                </tr>
                <tr>
                    <th><?= __('Availability') ?></th>
                    <td><?= h($tutor->availability) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($tutor->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($tutor->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($tutor->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($tutor->modified) ?></td>
                </tr>
            </table>
            </div>

			</div>
		</div>
		

            
            


		
	</div>
	<div class="col-md-3">
	  Column
	</div>
</div>





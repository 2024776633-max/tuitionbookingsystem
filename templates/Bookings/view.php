<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Booking $booking
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
				<li><?= $this->Html->link(__('Edit Booking'), ['action' => 'edit', $booking->id], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Form->postLink(__('Delete Booking'), ['action' => 'delete', $booking->id], ['confirm' => __('Are you sure you want to delete # {0}?', $booking->id), 'class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><hr class="dropdown-divider"></li>
				<li><?= $this->Html->link(__('List Bookings'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
				<li><?= $this->Html->link(__('New Booking'), ['action' => 'add'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?></li>
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

				<div class="text-end my-1 me-1">
					<?= $this->Html->image('logo.png', ['style' => 'width:100%;']) ?>
				</div>

				<style>
					.top {
						width: 100%;
						margin: auto;
					}
					.one {
						width: 50%;
						height: 25px;
						background-color: #74aec4;
						float: left;
					}
					.two {
						margin: 1px;
						height: 25px;
						background-color: #f59416;
					}
					.justify {
						text-align: justify;
					}
				</style>

				<section>
					<div class="one"></div>
					<div class="two"></div>
				</section>

				<br>
				<h5 style="text-align:center;">TUITION AGREEMENT</h5>

				<table class="table table-bordered table-sm">
					<tr>
						<td>Student Name</td>
						<td>:</td>
						<td><?= h($booking->student_name) ?></td>
					</tr>
					<tr>
						<td>Class Name</td>
						<td>:</td>
						<td><?= h($booking->class_name) ?></td>
					</tr>
                    <tr>
						<td>Subject Name</td>
						<td>:</td>
						<td><?= h($booking->subject_name) ?></td>
					</tr>
                    <tr>
						<td>Tutor Name</td>
						<td>:</td>
						<td><?= h($booking->tutor_name) ?></td>
					</tr>
                    <tr>
						<td>Session</td>
						<td>:</td>
						<td><?= h($booking->session) ?></td>
					</tr>
				</table>

				<br>
				<h5 style="text-align:center;">TERMS AND CONDITION</h5>

				<div class="content">
    <h6>1. Parties</h6>
    <p class="justify">
        <b>This Tuition Agreement</b> (“Agreement”) is entered into by and between 
        <b>VBEST Tuition Centre</b> (“Centre”) and 
        <b><?= h($booking->student_name) ?></b> (“Student”), 
        in connection with the Student’s enrollment in 
        <b><?= h($booking->class_name) ?></b> (“Class”) 
        for the academic term beginning on <strong><?php echo date('d F Y', strtotime($booking->session))?></strong>.
    </p>
    <br>
    <h6>2. Tuition Fees</h6>
    <p class="justify">
        Tuition fees are quoted in Malaysian Ringgit and determined on a per‑class basis. 
        The standard tuition fee for one class is <b>RM65 per session</b>, payable in advance prior 
        to the commencement of each scheduled class. Students may elect to pay for individual 
        sessions or purchase multiple sessions as a package, subject to the Centre’s prevailing 
        policies and any promotional offers in effect at the time of booking.
    </p>
    <p class="justify">
        All tuition fees must be settled through approved payment methods, including cash, 
        bank transfer, or online payment via the Centre’s designated portal. The Centre reserves 
        the right to revise tuition fees periodically in accordance with operational requirements, 
        and any adjustments shall be communicated to students and parents at least thirty (30) 
        days prior to implementation.
    </p>
    <p class="justify">
        Failure to remit payment in full by the stipulated deadline may result in suspension of 
        the Student’s booking, denial of access to scheduled classes, or termination of the Agreement.
    </p>
    <br>
    <h6>3. Payment Time</h6>
    <p class="justify">
        The Student agrees to pay tuition fees on or before the deadline stated in the academic calendar. 
        Newly enrolled students are required to settle tuition fees prior to the commencement of their first session.
    </p>
<br>
    <h6>4. Cancellation and Refund Policy</h6>
    <p class="justify">
        In principle, tuition fees are non‑refundable once the Programme has commenced. 
        If the Student withdraws before <strong><?php echo date('d F Y', strtotime($booking->session))?></strong>, all tuition fees paid shall be refunded. 
        After this date, no refunds will be made, including in cases of absence, suspension, or voluntary withdrawal.
    </p>

			</div>
		</div>
	</div>
                </div>

	<div class="col-md-3">
		<div class="card bg-body-tertiary border-0 shadow rounded-0">
			<div class="card-body">
				<div class="card-title mb-0">Booking Data</div>
				<div class="tricolor_line mb-3"></div>

				<table class="table table-sm table-hover">
					<tr>
						<td>Booking Date</td>
						<td><?= date('M d, Y (h:i A)', strtotime($booking->created)) ?></td>
					</tr>
					<tr>
						<td>Approval Date</td>
						<td><?= date('M d, Y (h:i A)', strtotime($booking->modified)) ?></td>
					</tr>
					<tr>
						<td>Booking Status</td>
						<td>
							<?php
							if ($booking->status == 0) {
								echo '<span class="badge bg-warning">Inactive</span>';
							} elseif ($booking->status == 1) {
								echo '<span class="badge bg-success">Active</span>';
							} elseif ($booking->status == 2) {
								echo '<span class="badge bg-danger">Archived</span>';
							}
							?>
						</td>
					</tr>
				</table>

				<?= $this->Html->link(
					'Download PDF',
					['action' => 'pdf', $booking->id],
					['class' => 'btn btn-sm btn-outline-primary', 'escapeTitle' => false]
				) ?>
			</div>
		</div>
	</div>
</div>
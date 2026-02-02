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
			<button class="btn p-0 border-0" type="button" id="orederStatistics"
				data-bs-toggle="dropdown" aria-expanded="false">
				<i class="fa-solid fa-bars text-primary"></i>
			</button>
			<div class="dropdown-menu dropdown-menu-end">
				<?= $this->Html->link(__('List Students'), ['action' => 'index'], [
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
                             <li>Ensure all required fields <strong>Full Name</strong>, <strong>Email</strong>, <strong>Phone Number</strong>, <strong>Birth Date</strong>, <strong>Address</strong>, and <strong>Status</strong> are filled accurately.
                            </li>
                            <li>All submitted student information will be securely stored and managed within the Tuition Booking System.
                            </li>
                            <li>The system administrator may review and update student details if necessary.
                            </li>
				</ol>
			</div>
		</div>
	</div>

	<!-- Form -->
	<div class="col-md-9">
		<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
			<div class="card-body text-body-secondary">

				<?= $this->Form->create($student) ?>
				<fieldset>

					<!-- Student Name & Email -->
					<div class="row">
						<div class="col-md-6">
							<?= $this->Form->control('student_name', [
								'label' => 'Student Name'
							]) ?>
						</div>
						<div class="col-md-6">
							<?= $this->Form->control('email') ?>
						</div>
					</div>

					<!-- Phone & Birth Date -->
					<div class="row">
						<div class="col-md-6">
							<?= $this->Form->control('phone_number', [
								'type' => 'text'
							]) ?>
						</div>
						<div class="col-md-6">
							<?= $this->Form->control('birth_date') ?>
						</div>
					</div>

					<!-- Subject & Class -->
					<div class="row">
						<div class="col-md-6">
							<?= $this->Form->control('subject_name', [
								'type' => 'select',
								'label' => 'Subject Name',
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
									'Information & Communication Technology (ICT)' => 'ICT',
									'Culinary Arts' => 'Culinary Arts',
									'Hospitality' => 'Hospitality',
									'Automotive Technology' => 'Automotive Technology',
									'Electrical & Electronics' => 'Electrical & Electronics',
									'Fashion Design' => 'Fashion Design',
									'Agriculture' => 'Agriculture',
									'Multimedia & Animation' => 'Multimedia & Animation',
									'Performing Arts' => 'Performing Arts',
									'Health Education' => 'Health Education',
								]
							]) ?>
						</div>

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

					<!-- Address -->
					<div class="row">
						<div class="col-md-6">
							<?= $this->Form->control('street_1') ?>
						</div>
						<div class="col-md-6">
							<?= $this->Form->control('street_2') ?>
						</div>
					</div>

					<!-- Postcode / City / State -->
					<div class="row">
						<div class="col-md-3">
							<?= $this->Form->control('postcode', ['type' => 'text']) ?>
						</div>
						<div class="col-md-3">
							<?= $this->Form->control('city') ?>
						</div>
						<div class="col-md-6">
							<?= $this->Form->control('state', [
								'type' => 'select',
								'class' => 'form-select form-control',
								'empty' => 'Select State',
								'options' => [
									'Perlis' => 'Perlis',
									'Kedah' => 'Kedah',
									'Pulau Pinang' => 'Pulau Pinang',
									'Selangor' => 'Selangor',
									'Negeri Sembilan' => 'Negeri Sembilan',
									'Melaka' => 'Melaka',
									'Johor' => 'Johor',
									'Pahang' => 'Pahang',
									'Terengganu' => 'Terengganu',
									'Kelantan' => 'Kelantan',
									'Sabah' => 'Sabah',
									'Sarawak' => 'Sarawak',
									'Wilayah Persekutuan Kuala Lumpur' => 'Wilayah Persekutuan Kuala Lumpur',
								]
							]) ?>
						</div>
					</div>

					<?= $this->Form->hidden('status') ?>

				</fieldset>

				<!-- Buttons -->
				<div class="text-end">
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

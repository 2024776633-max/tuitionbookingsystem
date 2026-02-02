<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tuition Agreement</title>
    <style>
        @page {
            margin: 0px !important;
            padding: 0px !important;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
        
        }

        .right{
            text-align: right;
            padding-right: 50px;
        }

        .logo {
            width: 100%; 
            height: auto;
            display: block;
        }

    
        h5 {
            text-align: center;
            margin-top: 40px;
            margin-bottom: 10px;
        }

        .content {
            margin-left: 40px;
            margin-right: 40px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        table td {
            border: 1px solid #000;
            padding: 6px;
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

        h6 {
            margin-top: 5px;
            margin-bottom: 5px;
        }
        h2 {
            margin-top: 1px;
            margin-bottom: 5px;
        }

        .all{
            margin: 40px;
        }
    </style>
</head>

<div class="logo img">
    <?php echo $this->Html->image('../img/logo.png', ['width' => '100%', 'fullBase' => true]) ?>
</div>
<section>
    <div class="one"></div>
    <div class="two"></div>
</section>
<body>

<div class="all">

<h2 style="text-align:center;">TUITION AGREEMENT</h2>

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

			
				<h2 style="text-align:center;">TERMS AND CONDITION</h2>
             

				<div class="content">
    <h4>1. Parties</h4>
    <p class="justify">
        <b>This Tuition Agreement</b> (“Agreement”) is entered into by and between 
        <b>VBEST Tuition Centre</b> (“Centre”) and 
        <b><?= h($booking->student_name) ?></b> (“Student”), 
        in connection with the Student’s enrollment in 
        <b><?= h($booking->class_name) ?></b> (“Class”) 
        for the academic term beginning on <strong><?php echo date('d F Y', strtotime($booking->session))?></strong>.
    </p>
   
    <h4>2. Tuition Fees</h4>
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
    
    <h4>3. Payment Time</h4>
    
    <p class="justify">
        The Student agrees to pay tuition fees on or before the deadline stated in the academic calendar. 
        Newly enrolled students are required to settle tuition fees prior to the commencement of their first session.
    </p>

    <h4>4. Cancellation and Refund Policy</h4>
    <p class="justify">
        In principle, tuition fees are non‑refundable once the Programme has commenced. 
        If the Student withdraws before <strong><?php echo date('d F Y', strtotime($booking->session))?></strong>, all tuition fees paid shall be refunded. 
        After this date, no refunds will be made, including in cases of absence, suspension, or voluntary withdrawal.
    </p>
</div>
</div>
</body>
</html>
<?php
include "headertwo.php";
?>


<section class="page_breadcrumbs ds parallax section_padding_75">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h1 class="weight-black">Book Our Services</h1>
				<ol class="breadcrumb darklinks grey">
					<li>
						<a href="./">
							HomePage
						</a>
					</li>
					<li class="active">Registration</li>
				</ol>
			</div>
		</div>
	</div>
</section>


<section class="booking-bg ls section_padding_top_100 section_padding_bottom_100">
	<div class="container">

		<div class="row">

			<form class="shop-register" role="form" action="" method="POST">

				<?php

			$error ="";  


			if (isset($_POST['submit']) && !empty($_POST['submit'])){


									// Pick up the form data and assign it to variables
				$name = $_POST['contact_person'];
				$company = $_POST['billing_company'];
				$phone = $_POST['phone'];
				$email = $_POST['email'];
				$address = $_POST['physical_address'];
				$service = $_POST['service'];
				$message = $_POST['message'];
				$employers = $_POST['no_of_employers'];
				$age = $_POST['avg_age'];

				for ($i=0; $i<count($service); $i++)
					$query .= "('" . $service[$i] . "'),";

				$reciever = 'booking@effortlessinsightafrica.com';


									// Build the email (replace the address in the $to section with your own)
				$to      = 'booking@effortlessinsightafrica.com';
				$subject = 'Message from Effortless Insight Booking';


				$main = '
				<html>
				<head>
				<title>Effortless Insight</title>
				</head>
				<body>
				<h3>Submission from Effortless Insight Booking</h3>
				<table cellspacing="0" cellpadding="10" style="width: 400px; height: auto;">
				<tr>
				<th style="width: 200px; vertical-align: top; text-align: left">Name of contact person:</th><td> '.$name.'</td>
				</tr>
				<tr style="width: 200px vertical-align: top; text-align: left; background-color: #e0e0e0;">
				<th style="width: 200px; vertical-align: top; text-align: left">Company:</th><td> '.$company.'</td>
				</tr>
				<tr style="width: 200px vertical-align: top; text-align: left; background-color: #e0e0e0;">
				<th style="width: 200px; vertical-align: top; text-align: left">Phone number:</th><td> '.$phone.'</td>
				</tr>
				<tr style="width: 200px vertical-align: top; text-align: left; background-color: #e0e0e0;">
				<th style="width: 200px; vertical-align: top; text-align: left">Email address:</th><td> '.$email.'</td>
				</tr>
				<tr style="width: 200px vertical-align: top; text-align: left; background-color: #e0e0e0;">
				<th style="width: 200px; vertical-align: top; text-align: left">Physical Address:</th><td> '.$address.'</td>
				</tr>
				<tr>
				<th style="width: 200px; vertical-align: top; text-align: left">Services:</th><td> '.$query.' </td>
				</tr>
				<tr style="width: 200px vertical-align: top; text-align: left; background-color: #e0e0e0;">
				<th style="width: 200px; vertical-align: top; text-align: left">Three Essential things you’d like participants to leave with:</th><td> '.$message.'</td>
				</tr>
				<tr>
				<th style="width: 200px; vertical-align: top; text-align: left">No. of Employers:</th><td> '.$employers.' </td>
				</tr
				<tr>
				<th style="width: 200px; vertical-align: top; text-align: left">Employers average age:</th><td> '.$age.' </td>
				</tr>
				</table>
				</body>
				</html>';

				$headers = "MIME-Version: 1.0" . "\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\n";
				$headers .= 'From: Bookings' . "\n" .
				'Reply-To: booking@effortlessinsightafrica.com' . "\n" .
				'X-Mailer: PHP/' . phpversion();

				mail($to, $subject, $main, $headers);

				echo '<h4 class="feedback-msg">Hello <span style="color:#f5eb25;">'.$name.'</span>, we have received your submission. We will get back to you soon!!!</h4>';




			}
			?>

				<div class="col-sm-6">
					<div class="form-group validate-required" id="billing_first_name_field">
						<label for="billing_first_name" class="control-label">
							<span class="b-white">Name of Contact person</span>
							<span class="required">*</span>
						</label>

						<input type="text" class="form-control " name="contact_person" id="billing_first_name" placeholder="" value="">
					</div>

					<div class="form-group" id="billing_company_field">
						<label for="billing_company" class="control-label">
							<span class="b-white">Name of Organization/Institution/Business/Company</span>
						</label>

						<input type="text" class="form-control " name="billing_company" id="billing_company" required placeholder="" value="">

					</div>


				</div>

				<div class="col-sm-6">
					<div class="form-group validate-required" id="billing_last_name_field">
						<label for="billing_last_name" class="control-label">
							<span class="b-white">Phone Number </span>
							<span class="required">*</span>
						</label>

						<input type="phone" class="form-control " name="phone" id="billing_last_name" required placeholder="" value="">

					</div>

					<div class="form-group validate-required validate-email" id="billing_email_field">
						<label for="billing_email" class="control-label">
							<span class="b-white">Email Address </span>
							<span class="required">*</span>
						</label>

						<input type="email" class="form-control " name="email" id="billing_email" required placeholder="email" value="">

					</div>

				</div>

				<div class="col-sm-12">
					<div class="form-group address-field validate-required" id="billing_address_fields">
						<label for="physical_address" class="control-label">
							<span class="b-white">Physical Address </span>
							<span class="required">*</span>
						</label>

						<input type="text" class="form-control " name="physical_address" id="physical_address" required placeholder="Street address" value="">

					</div>

				</div>

				<div class="col-sm-12 padding_top_50"> <hr></div>

				<div class="form-group">
					<div class="col-sm-12">

						<label for="billing_address_1" class="control-label">
							<span class="b-white">Select Services </span>
							<span class="required">*</span>
						</label>
						<div class="row padding_top_20 padding_bottom_50">
							<div class="col-sm-6 col-xs-12 checkbox">
								<label class="b-white">
									<input type="checkbox" name="service[]" value="Corporate Traning"> Corporate Training / Team-Building
								</label>
							</div>
							<div class="col-sm-6 col-xs-12 checkbox">
								<label class="b-white">
									<input type="checkbox" name="service[]" value="Speaking/Keynote addresss"> Speaking/Keynote address
								</label>
							</div>
							<div class="col-sm-6 col-xs-12 checkbox">
								<label class="b-white">
									<input type="checkbox" name="service[]" value="Customized Mentorship/Coaching Program"> Customized Mentorship/Coaching Program
								</label>
							</div>
							<div class="col-sm-6 col-xs-12 checkbox">
								<label class="b-white">
									<input type="checkbox" name="service[]" value="Consultancy/Adisory (Emotional Inteligence)"> Consultancy/Advisory (Emotional Intelligence)
								</label>
							</div>
							<div class="col-sm-6 col-xs-12 checkbox">
								<label class="b-white">
									<input type="checkbox" name="service[]" value="Board Appointemt (Appoint TNT to your Board)"> Board Appointment (Appoint TNT to your Board)
								</label>
							</div>
							<div class="col-sm-6 col-xs-12 checkbox">
								<label class="b-white">
									<input type="checkbox" name="service[]" value="Media or Press Booking"> Media or Press Booking
								</label>
							</div>
						</div>
					</div>
				</div>


				<div class="col-sm-12">
					<div class="form-group address-field validate-required" id="billing_address_fields">
						<label for="message" class="control-label">
							<span class="b-white">Three Essential things you’d like participants to leave with: </span>
							<span class="required">*</span>
						</label>

						<textarea name="message" id="message" required class="form-control"></textarea>

					</div>

				</div>
				
				<div class="col-sm-6 col-xs-12 form-group validate-required validate-fax" id="billing_fax_field">
					<label for="no_of_employers" class="control-label">
						<span class="b-white">Number of Participants </span>
						<span class="required">*</span>
					</label>

					<input type="text" class="form-control" required name="no_of_employers" id="no_of_employers" placeholder="" value="">

				</div>

				<div class="col-sm-6 col-xs-12 form-group" id="billing_password2_field">
					<label for="avg_age" class="control-label">
						<span class="b-white">Average age of Participants</span>
						<span class="required">*</span>
					</label>

					<input type="text" class="form-control" required name="avg_age" id="avg_age" placeholder="" value="">

				</div>

			</div>

			<div class="col-sm-12 padding_top_20">

				<input type="submit" name="submit" class="theme_button wide_button color1" value="Submit">
				<!-- <button type="submit" name="" class="theme_button wide_button color1">Submit</button>
								 -->				<button type="reset" class="theme_button wide_button">Clear Form</button>

			</div>

			

		</form>


	</div>
</div>
</section>


<?php
include "footer.php";
?>


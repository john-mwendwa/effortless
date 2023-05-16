<?php
				include "headertwo.php";
			?>

			<section class="page_breadcrumbs ds parallax section_padding_75">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<h1 class="weight-black">Contact us</h1>
							<ol class="breadcrumb darklinks grey">
								<li>
									<a href="index.php">
										HomePage
									</a>
								</li>
								<li class="active">Contact us</li>
							</ol>
						</div>
					</div>
				</div>
			</section>

			<section class="ls section_padding_top_100 section_padding_bottom_75">
				<div class="container">
					

					<div class="row">
						<div class="col-sm-12 to_animate">
							<div class="col-sm-12 col-md-12"> <h3 style="text-align:left;"><strong class="weight-black">Talk to us</strong></h3></div>
							<form method="post" action="">
								<?php

								$error ="";  


								if (isset($_POST['submit']) && !empty($_POST['submit'])){


									// Pick up the form data and assign it to variables
									$name = $_POST['name'];
									$email = $_POST['email'];
									$subject = $_POST['subject'];
									$message = $_POST['message'];


									$reciever = 'info@effortlessinsightafrica.com';


									// Build the email (replace the address in the $to section with your own)
									$to      = 'info@effortlessinsightafrica.com';
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
									<th style="width: 200px; vertical-align: top; text-align: left">Name:</th><td> '.$name.'</td>
									</tr>
									<tr style="width: 200px vertical-align: top; text-align: left; background-color: #e0e0e0;">
									<th style="width: 200px; vertical-align: top; text-align: left">Email:</th><td> '.$email.'</td>
									</tr>
									<tr style="width: 200px vertical-align: top; text-align: left; background-color: #e0e0e0;">
									<th style="width: 200px; vertical-align: top; text-align: left">Subject:</th><td> '.$subject.'</td>
									</tr>
									<tr style="width: 200px vertical-align: top; text-align: left; background-color: #e0e0e0;">
									<th style="width: 200px; vertical-align: top; text-align: left">Message:</th><td> '.$message.'</td>
									</tr>
									</table>
									</body>
									</html>';

									$headers = "MIME-Version: 1.0" . "\n";
									$headers .= "Content-type:text/html;charset=UTF-8" . "\n";
									$headers .= 'From: Bookings' . "\n" .
									'Reply-To: info@effortlessinsightafrica.com' . "\n" .
									'X-Mailer: PHP/' . phpversion();

									mail($to, $subject, $main, $headers);

									echo '<h5 class="feedback-msg">Hello <span style="color:#f5eb25;">'.$name.'</span>, we have received your submission. We will get back to you soon!!!</h5>';




								}
								?>

								<div class="row columns_padding_5">


									<div class="col-sm-6">
										<p class="contact-form-name">
											<label for="name">Full Name
												<span class="required">*</span>
											</label>
											<input type="text" name="name" id="name" class="form-control" placeholder="Full Name" required>
										</p>
										<p class="contact-form-email">
											<label for="email">Email address
												<span class="required">*</span>
											</label>
											<input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
										</p>
										<p class="contact-form-subject">
											<label for="subject">Subject
												<span class="required">*</span>
											</label>
											<input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required>
										</p>
									</div>
									<div class="col-sm-6">

										<p class="contact-form-message">
											<label for="message">Message</label>
											<textarea aria-required="true" rows="9" cols="45" name="message" id="message" class="form-control" placeholder="Message"></textarea>
										</p>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">

										<p class="contact-form-submit text-center topmargin_30">
											<input type="submit" name="submit" value="Send Message" class="theme_button color1">
											
										</p>
									</div>

								</div>

									
							</form>
						</div>
					</div>

					<div class="row topmargin_40">
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_normal">
									<i class="rt-icon2-phone5"></i>
								</div>

								<p>
									<span class="grey">Phone:</span> +254 718 727587
									<br>
								</p>

							</div>
						</div>
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-left">
								<div class="teaser_icon highlight size_normal">
									<i class="rt-icon2-location2"></i>
								</div>
                          <!-- Updated the location on contact page -->
								<p>
								United Nations Crescent, Gigiri, Nairobi, Kenya
								<br> iHub Nairobi, Nairobi, Kenya
								</p>

							</div>
						</div>
						<div class="col-sm-4 to_animate" data-animation="pullDown">
							<div class="teaser text-center">
								<div class="teaser_icon highlight size_normal">
									<i class="rt-icon2-mail"></i>
								</div>

								<p>info@effortlessinsightafrica.com</p>

							</div>
						</div>

					</div>


				</div>
			</section>


			<?php
				include "footer.php";
			?>

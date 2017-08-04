<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<div id="sidebar">
						<?php
						include("includes/search.inc.php");
						?>
					</div>
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">About Us</h1>
							<div class="entry" style="height:auto">


								We are Seekers. We believe in understanding by exploring. Please reach out to us for full time jobs, freelancing projects and other events.
								<div class="contactWrap">
									<div class="contactImage">
										<img src="images/shan.jpg" height="150" width="150">
									</div>
									<div class="contactDesc">
										<a href="https://www.linkedin.com/in/shantanuvinayakkulkarni">Shantanu Kulkarni</a>  <br>
										"Full Stack Developer, expert in UX/UI"
									</div>
								</div>
								<div class="contactWrap">
									<div class="contactImage">
										<img src="images/gauri.jpg" height="150" width="150">
									</div>
									<div class="contactDesc">
										<a href="https://www.linkedin.com/in/gaurikirve">Gauri Kirve</a> <br>
										"Data Scientist"
									</div>
								</div>
								<div class="contactWrap">
									<div class="contactImage">
										<img src="images/abhi.jpg" height="150" width="150">
									</div>
									<div class="contactDesc">
										<a href="https://www.linkedin.com/in/abhishekvichare">Abhishek Vichare</a> <br>
										"Software Developer"
									</div>

								</div>


							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->

					<div id="sidebar2">
						<?php
						include("includes/search2.inc.php");
						?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>

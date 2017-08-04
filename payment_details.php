<?php session_start();
require('includes/config.php');
?>

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
			<div id="page">
				<!-- start content -->
				<div id="sidebar">
					<?php
					include("includes/search.inc.php");
					?>
				</div>
				<div id="content">
					<div class="post">

						<h1>Thank You for Shopping with us</h1><br>
						<h4>Your order will be shipped to your specified shipping address. It will take 6-7 business days to deliver.</h4>
						<h5>Looking for another books? <a href="index.php">click here</a> </h5>
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

			<!-- start footer -->
			<div id="footer">
				<?php
				include("includes/footer.inc.php");
				?>
			</div>
			<!-- end footer -->
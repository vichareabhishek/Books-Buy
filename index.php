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
					<!-- start content -->
					<div id="sidebar">
						<?php
						include("includes/search.inc.php");
						?>
					</div>
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'BooksBuy';
								}
							?>
							</h1>
							<div class="entry">
								<br>
								
								<br>		
								
								<img src="images/pretty-book-gif.gif" />
								<br><br>
								<h3>Looking for cheap books?</h3>
								<h5 style="margin-top: 15px;">You have landed to the correct destination. Find books of your interest. If you need some specific book, please do contact us</h5>
								
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

<?php
require('includes/config.php');

			$query="delete from book where b_id =".$_GET['id'];
		
			mysqli_query($conn,$query) or die("Error in deleting book ...");
			
			
			header("location:all_book.php.php");

?>
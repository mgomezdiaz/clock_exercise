<?php
error_reporting(E_ALL);       # Report Errors, Warnings, and Notices
ini_set('display_errors', 1); # Display errors on page (instead of a log file)
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Clock</title>
	<?php require 'logic.php';?>
	<style>
		body{
			color:pink;
			background-color:<?php echo $background_color ?>;
			text-align:center ;
			}
		}		
	</style>
</head>
<body>
<h1> It is <?php echo date('F g:i A'); ?> </h1>
<p> Time Zone: <?php echo date_default_timezone_get(); ?> </p>
<p> <img src="images/<?php echo $image; ?>"> </p>

</body>
</html>
<?php
require_once 'functions.php';
$app_url = appUrl();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title> Simple Dynamic App Without Page Refresh </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Ajax page request with jQuery">
	<meta name="author" content="Anuoluwapo">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<!-- <script src="script.js"></script> -->
</head>
<body>
<div style="padding:10px;"> </div>
<!--[Load Page Content - Start]-->
<div class="ScreenData container" style="max-width : 900px; margin : 0 auto; border: 1px dotted #CCC; background : #FFF; border-radius: 50px;padding-top:10px;">
 	<div class="text-center">
 		<span class="btn_load_screen" callType="home"> Home</span> |
		<span class="btn_load_screen" callType="about"> About</span> |
 		<span class="btn_load_screen" callType="contact"> Contact</span> |
 		<span class="btn_load_screen" callType="invoice"> Invoice receipt</span>
 		<br><br>
 		<h3 > Dynamic App URL Without Page Refresh </h3>
 		<br><br>
 	</div>
	<br><br>
 	<section class="container main"></section>
 	<br><br>
</div>
<!--[Load Page Content - End]-->
<script src="main.js"></script>
<script type="text/javascript">$(document).ready( function($) { const page_url = '<?php echo $app_url?>/';loadPage(page_url)});</script>
</body>
</html>
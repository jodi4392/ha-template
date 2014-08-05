<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	define('ABSPATH',dirname(__FILE__).'/');
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/island.css">
<link rel="stylesheet" type="text/css" href="css/top.css">

<head>
<title>Hired Angels Home</title>
</head>

<body>
<div id="container">
	<img id="sideshadow" src="images/side-s.png" height="1025" width="10">
	<img id="bottomshadow" src="images/sb.png" height="10" width="520">
	
	<div id="island">
	
<?php include(ABSPATH.'topmenu.php'); ?>

<?php include(ABSPATH.'island.php'); ?>		
	</div>

		<div id="top">
			<img id="t_img" src="images/logowings.png" height="50" width="230">
		</div>

<?php include(ABSPATH.'side.php'); ?>

	<div id="bottom">
	</div>

</div>
</body>
</html>
<?php
require_once(DIR_VIEW."layout/header.php");
require_once(DIR_VIEW."layout/footer.php");
?>

<html>
<head>
 <meta charset="UTF-8"> 
<title> StudenTravel </title>
	<link href= <?php echo DIR_CSS."style.css";?> rel="stylesheet" type="text/css"/>




	<!-- <style type="text/css" media="all">@import 'DIR_CSS/.css';</style> -->
</head>
	<body>
	<div id="header">
	</div>

	<div id="content">
		<?php
			echo $content;
		?>
	</div>
	<div id="footer">
		<!-- <?php
			echo $footer;
		?>
		-->
	</div>
	</body>
</html>



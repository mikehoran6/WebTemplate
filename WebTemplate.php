<!-- ex from pg 215-217 -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Web Template Project</title>
</head>
<body>
	<?php include("inc_header.html"); ?>

	<div style="width: 20%; text-align: center; float: left;">
		<?php include("inc_buttonnav.html"); ?>
	</div>

	<!-- Dynamic content -->
	<?php
		if(isset($_GET["content"])) {
			//one of the 3 buttons clicked
			switch($_GET["content"]) {
				case "About Me":
					include("inc_about.html");
					break;
				case "Contact":
					include("inc_contact.html");
					break;
				case "Home":
				default:
					include("inc_home.html");
					break;
			}
		}
		else {
			//no button pressed
			include("inc_home.html");
		}
	?>
	<!-- end dynamic content -->
	<?php include("inc_footer.php"); ?>
</body>
</html>
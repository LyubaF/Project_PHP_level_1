<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div>
		<br>
		<img src="./img/01.jpg" style="float: left; width: 250px">
		<?php
			if (diana_color_check($_POST['color1'])) {
				echo "Yes, this is my dress!";
			} else {
				echo "No, I cant`t choose a dress...";
				}
			?>
	</div>
		<div>
			<img src="./img/02.jpg" style="float: left; width: 250px">
			<?php
			if (diana_color_check($_POST['color2'])) {
				echo "Yes, this is my dress!";
			} else {
				echo "No, I cant`t choose a dress...";
				}
			?>
		</div>
		<div>
			<img src="./img/03.jpg" style="float: left; width: 250px">
			<?php
			if (diana_color_check($_POST['color3'])) {
				echo "Yes, this is my dress!";
			} else {
				echo "No, I cant`t choose a dress...";
				}
			?>
		</div>
<?php

function diana_color_check($color) {
	$redValue = intval(substr($color, 0, 2), 16);
	$greenValue = intval(substr($color, 2, 2), 16);
	$blueValue = intval(substr($color, 4, 2), 16);

	if (($greenValue > $redValue) && ($greenValue > $blueValue)) {
		return TRUE;
	} else {
		return FALSE;
	} 
}

?>
</body>
</html>


<?php
include ('includes/header.php')
?>

<body>
	<button class="butonHome" onclick="location.href='index.php'">Начало</button>
		<div class="div">
			<b>Dress color - 1 (RGB):</b>
			<?php
				check_color($_POST['color1']);
			?>
		</div>
		<div class="div">
			<b>Dress color - 2 (RGB):</b>
			<?php
				check_color($_POST['color2']);
			?>
		</div>
		<div class="div">
			<b>Dress color - 3 (RGB):</b>
			<?php
				check_color($_POST['color3']);
			?>
		</div>
  	<button class="button" onclick="location.href='dresses.php'">Обратно</button>
<?php

function diana_color_check($color) {
	$redValue = intval(substr($color, 0, 2), 16);
	$greenValue = intval(substr($color, 2, 2), 16);
	$blueValue = intval(substr($color, 4, 2), 16);

	return (($greenValue > $redValue) && ($greenValue > $blueValue));
	
}

function is_correct_RGB($value) {
	return ((ctype_xdigit($value) && (strlen($value)) == 6));
}

function check_color($color) {
	if (is_correct_RGB($color)) {
		if (diana_color_check($color)) {
			echo "<b>Yes, this is my dress!</b>";
			echo "<img src='./img/04.png'>";
		} else {
			echo "<b>No, I cant`t choose that dress</b>";
			echo "<img src='./img/05.png'>";
		}
	} else {
			echo "<b>Incorrect RGB value</b>";
		}
	}
?>

<?php
include ('includes/footer.php');
?>	
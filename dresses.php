<?php
include ('includes/header.php')
?>

<body>

	<form action="dresses_checked.php" method="post">
		<div>
			<img src="./img/01.png" style="float: left; width:200px; height: 300px; margin: 8px">
			<b>Enter color - 1 (RGB):</b> #<input type="text" name="color1" placeholder="color1">
		</div>
		<div>
			<img src="./img/02.png" style="float: left; width:200px; height: 300px; margin: 8px">
			<b>Enter color - 2 (RGB):</b> #<input type="text" name="color2" placeholder="color2">
		</div>
		<div>
			<img src="./img/03.png" style="float: left; width:200px; height: 300px; margin: 8px">
			<b>Enter color - 3 (RGB):</b> #<input type="text" name="color3" placeholder="color3">
		</div>
		<input type="submit" name="submit" value="Проверете цвета на роклята">
	</form>

<?php
include ('includes/footer.php');
?>	
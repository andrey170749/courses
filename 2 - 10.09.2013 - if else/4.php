<html>
<head></head>
<body>
	<p>Выберите размер изображения:</p>
	<form name="frm" action="4.php" method="GET">
		<input name="R" type="radio" value="0.2"> Маленький <br />
		<input name="R" type="radio" value="0.5"> Средний <br />
		<input name="R" type="radio" value="1"> Большой <br />
		<input type="submit" value="Вывести изображение" name="B">
	</form>

<?php

	if (isset($_GET["B"])) {
		$h=100*$_GET['R'];
		echo "<img src='img.jpg' height=$h%>";
	}
	
?>


</body>
</html>
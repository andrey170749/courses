<html>
<head></head>
<body>
	<p>Выберите размер изображения:</p>
	<form name="frm" action="5.php" method="GET">
		<input name="C1" type="checkbox" value=""> Вывести заголовок картинки <br />
		<input name="C2" type="checkbox" value=""> Вывести саму картинку <br />
		<input name="C3" type="checkbox" value=""> Вывести описание картинки <br />
		<input type="submit" value="Вывести изображение" name="B">
	</form>

<?php

	if (isset($_GET["B"])) {
		if (isset($_GET['C1'])) echo "Это заголовок картинки <br />";
		if (isset($_GET['C2'])) echo "<img src='img.jpg' <br />>";
		if (isset($_GET['C3'])) echo "<p>Это описание картинки бла бла бла </p> ";
	}
	
?>


</body>
</html>
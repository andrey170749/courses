<html>
<head></head>
<body>
	
	<form name="frm" action="2.php" method="GET">
		<input name="T1" type="text" value="Андрей"><br />
		<input name="T2" type="password"><br />
		<input type="submit" value="Отправить" name="B">
	</form>

<?php

	if (isset($_GET["B"])) {
		if ($_GET['T1'] == "Андрей" && $_GET['T2'] == "Качанов") 
		echo "Пароль введен правильно!";
		else echo "Пароль введен неверно!";
	}
	
?>


</body>
</html>
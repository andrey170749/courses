<html>
<head></head>
<body>
	<p>Введите доллары:</p>
	<form name="frm" action="3.php" method="GET">
		<input name="T1" type="text" value=""><br />
		<input type="submit" value="Конвертировать" name="B">
	</form>

<?php

	if (isset($_GET["B"])) {
		echo $S=$_GET['T1']*8, " гривен";
	}
	
?>

</body>
</html>
<html>
<head></head>
<body>
	
	<form name="frm" action="1.php" method="GET">
		<input name="T1" type="text" value="Андрей"><br />
		<input type="submit" value="Отправить" name="B">
	</form>

<?php
	echo $nm=$_GET['T1'];
?>


</body>
</html>
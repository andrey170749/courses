
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/></head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

	<form name="form" action="2.php" method="GET">
		<table>
			<tr>
				<td>
					<input type="radio" name="rdi[0]" value="1">11
				</td>
				<td>
					<input type="radio" name="rdi[1]" value="1">22
				</td>
			</tr>
			<tr>
				<td>
					<input type="radio" name="rdi[0]" value="2">33
				</td>
				<td>
					<input type="radio" name="rdi[1]" value="2">44
				</td>
			</tr>
			<tr>
				<td>
					<input type="radio" name="rdi[0]" value="3">55
				</td>
				<td>
					<input type="radio" name="rdi[1]" value="3">66
				</td>
			</tr>
		</table>
		<input type="submit" name="Submit" value="Отправить">
	</form>

<?php

	if (!empty($_GET['rdi'])) {
 	 	$chb = $_GET['rdi'];
	  	foreach($chb as $index => $go) {
	    	echo $index." - > ".$go."<br>";
	    };
 	};

?>

</body>
</html>
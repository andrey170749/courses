
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/></head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>

	<form name="form" action="calc.php" method="GET">
		<input name="T1" type="text" value=""><br>
		<input name="T2" type="text" value=""><br>
		<input type="submit" value="+" name="B">
		<input type="submit" value="-" name="B">
		<input type="submit" value="/" name="B">
		<input type="submit" value="*" name="B">
	</form>

<?php
	
	if(isset($_GET["B"])){

		$a=($_GET["T1"]);
	   	$b=($_GET["T2"]);
	  	$op=($_GET["B"]);

	  	if ( $_GET["B"] == "/" && $_GET["T2"] == 0 ) {
			echo "На ноль делить нельзя!";
	  	}
	  	else {
	  		switch ($op) {
	  		case "+": $res=$a+$b; break;
	  		case "-": $res=$a-$b; break;
	  		case "/": $res=$a/$b; break;
	  		case "*": $res=$a*$b; break;			
	  		}
	  	  echo $res;
		}
	}
?>

</body>
</html>
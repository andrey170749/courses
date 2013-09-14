
<html>
<head></head>
<body>

	<form name="frm" action="1.php" method="GET">
		<input name="T1" type="text" value=""><br>
		<input name="T2" type="text" value=""><br>
		<input type="submit" value="+" name="B">
		<input type="submit" value="-" name="B">
	</form>

<?php
		$a=($_GET["T1"]);
	   	$b=($_GET["T2"]);
	  	$op=($_GET["B"]);

	    // if (isset($_GET['B'])){

		    if ($op=="+"){
			    $res=$a+$b;
			}
			if ($op=="-"){
			    $res=$a-$b;
		}
			echo $res;
	    // }
	    	
?>

</body>
</html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Мега-невъебенная страница!</title>
</head>
<body>
	<div id="wrapper">
		<div id="main">
			<div id="logo"><a href="http://shakhtar.com/ru/"><img src="logo.png"></a></div>
			<form name="form" action="dz1.php" method="GET">
					<div class="left">
						<h3>Size</h3>
						<input name="R" type="radio" value="0.2">Small<br>
						<input name="R" type="radio" value="0.5" checked>Medium<br>
						<input name="R" type="radio" value="0.9">Large<br>
					</div>
					<div class="right">
						<h3>Color</h3>
						<select name="hero">
							<option value='red'>Red</option>
							<option value='green'>Green</option>
							<option value='blue'>Blue</option>
						</select>
					</div>
						<input type="submit" value="Result" name="B">
			</form>
		</div>

<?php
		if (isset($_GET["B"])) {
			$h=100*$_GET['R'];
			$color=$_GET['hero'];
			echo "<h1 align=center style='color:$color; text-shadow: 1px 1px 100px $color;'>А не пиздишь ли ты часом?!</h1><br><br>
				  <img id=picture style='box-shadow: 0 0 500px $color;' src='dog.jpg' width=$h%>
			  	  ";
		}
?>
	</div>

</body>
</html>
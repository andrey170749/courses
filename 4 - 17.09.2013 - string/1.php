
<html>
<head></head>
<body>

	<form name="frm" action="1.php" method="POST">
		<input name="T1" type="text" value="">Положение первого символа<br>
		<input name="T2" type="text" value="">Длина строки<br>
		<input type="submit" value="Поиск" name="B">
	</form>

<?php

echo $s="Власти Сирии передали России доказательства применения химического оружия антиправительственными силами, воюющими с властью страны уже около двух с половиной лет.
Об этом заявил заместитель главы МИД России Сергей Рябков, который в ночь на среду в Дамаске провел переговоры с представителями сирийских властей.
Только что нам передали материальные доказательства, то, что называется уликами. Эти доказательства надо проанализировать, - сказал Рябков.";
echo "<hr>";

if (isset($_POST['B'])) {
	$st='';
	$st=substr($s, $_POST['T1'], $_POST['T2'] );
	echo $st;
}



		    	
?>

</body>
</html>
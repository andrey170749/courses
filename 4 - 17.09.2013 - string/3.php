
<html>
<head>

</head>
<body>

	<form name="frm" action="3.php" method="POST">
		<input name="T1" type="text" value="  Andrey  "><br>
		<input name="T2" type="text" value=" Kachanov "><br>
		<input type="submit" value="Длина строки" name="B">
	</form>

<?php

// echo $s="(CNN) -- U.N. weapons inspectors returned overwhelming and indisputable evidence of the use of nerve gas in Syria, Secretary-General Ban Ki-moon said Monday, calling the findings eyond doubt and beyond the pale.
// The inspectors' 38-page report was released after Ban briefed Security Council members on its contents. The team found what it called clear and convincing evidence that the nerve agent sarin was delivered by surface-to-surface rockets on a relatively large scale in the suburbs of the Syrian capital Damascus on August 21.
// It is the most significant confirmed use of chemical weapons against civilians since Saddam Hussein used them in Halabja in 1988, and the worst use of weapons of mass destruction in the 21st century, Ban said. The international community has a responsibility to ensure that chemical weapons never re-emerge as an instrument of warfare, he said.
// Ban called the attack a war crime and a violation of treaties banning the use of chemical weapons that date back to 1925. But the inspectors' mandate did not include assigning blame for the attack, and Ban would not speculate on who launched the attack.";
// echo "<hr>";

if (isset($_POST['B'])) {
	$t1=$_POST['T1'];
	$t2=$_POST['T2'];
	echo "=$t1=<br>=$t2=<hr>";
	$t11=ltrim($t1);
	$t12=ltrim($t2);
	echo "=$t11=<br>=$t12=<hr>";
	$t21=rtrim($t11);
	$t22=rtrim($t12);
	echo "=$t21=<br>=$t22=<hr>";
	$t31=trim($t1);
	$t32=trim($t2);
	echo "=$t31=<br>=$t32=<hr>";
	
}

		    	
?>

</body>
</html>
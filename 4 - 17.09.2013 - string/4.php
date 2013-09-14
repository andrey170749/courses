
<html>
<head>

</head>
<body>

	<form name="frm" action="4.php" method="POST">
		Логин<input name="T1" type="text" value=""><br>
		<!-- <input name="T2" type="text" value=""><br> -->
		<input type="submit" value="Result" name="B">
	</form>

<?php

// echo $s="(CNN) -- U.N. weapons inspectors returned overwhelming and indisputable evidence of the use of nerve gas in Syria, Secretary-General Ban Ki-moon said Monday, calling the findings eyond doubt and beyond the pale.
// The inspectors' 38-page report was released after Ban briefed Security Council members on its contents. The team found what it called clear and convincing evidence that the nerve agent sarin was delivered by surface-to-surface rockets on a relatively large scale in the suburbs of the Syrian capital Damascus on August 21.
// It is the most significant confirmed use of chemical weapons against civilians since Saddam Hussein used them in Halabja in 1988, and the worst use of weapons of mass destruction in the 21st century, Ban said. The international community has a responsibility to ensure that chemical weapons never re-emerge as an instrument of warfare, he said.
// Ban called the attack a war crime and a violation of treaties banning the use of chemical weapons that date back to 1925. But the inspectors' mandate did not include assigning blame for the attack, and Ban would not speculate on who launched the attack.";
// echo "<hr>";

if (isset($_POST['B'])) {
	$k="admin";
	if (strcmp($_POST['T1'], $k) == 0) {
		echo "Логин верный";

	}
	else echo "Логин не верный!";
	
}

		    	
?>

</body>
</html>
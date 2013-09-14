<?php
	echo "<form>";
	echo "<table border=1px>";
	echo "<tr><td>";
	for($i=0; $i<=3; $i++) 
			echo "<input type='text' value=$i name='t$i'><br>";
			echo "</td>";

	echo "<td>";
	for($i=0; $i<=3; $i++) 
			echo "<input type='radio' value=$i name=r1>rrrr<br>";
	echo "</td>";

	echo "<td>";
	for($i=0; $i<=3; $i++) 
			echo "<input type='checkbox' value=$i name=c$i>cccc<br>";
	echo "</td>";

	echo "</tr>";
	echo "</table>";
	echo "</form>";
?>		
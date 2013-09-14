<?php
	echo "<table border=1px align=center>";
	$k=0;
	for($row=0; $row<5; $row++){
	     echo "<tr>";
	     	for($col=0; $col<3; $col++)	{
	     		$k++;
	     		echo "<td align=center>
	     		<h2>Image $k</h2><a href='img/$k.jpg' target='_blank'><img width=200px height=200px src='img/$k.jpg'></a>
	     		      </td>";
	     	}
	     echo "</tr>";	
		}
	echo "</table>";

?>		

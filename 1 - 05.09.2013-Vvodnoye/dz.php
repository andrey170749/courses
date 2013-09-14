<?php
	echo "<table border=1px align=center bordercolor=#FF00AE bgcolor=#D794CE>";
	$k=0;
	for($row=0; $row<5; $row++){
	     echo "<tr>";
	     	for($col=0; $col<3; $col++)	{
	     		$k++;
	     		echo "<td background=red>
	     				<form>
	     					<a href='img/$k.jpg' target='_black'><img style='margin-bottom:20px;' src=img/$k.jpg height=150px width=240px></a><br />
							<input type='radio' name='size' VALUE='small'>Маленький<br />
		     				<input type='radio' name='size' VALUE='medium'>Средний
		     				<input type='checkbox'>Показать/Скрыть<br />
		     				<input type='radio' name='size' VALUE='large'>Большой<br />
	     				</form>
	     		      </td>";
	     	}
	     echo "</tr>";	
		}
	echo "</table>";
?>		

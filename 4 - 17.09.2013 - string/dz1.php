<html>
<head>

</head>
<body>

	<form name="frm" action="dz1.php" method="POST">
		Введите слово<input name="T1" type="text" value=""><br>
			<input type="submit" value="Result" name="B">
	</form>

<?


echo $string="У вновь создаваемого агентства никаких других задач,
кроме того, что оно должно обеспечить нормальную, эффективную
работу подведомственных учреждений, научных институтов, нет.
 Оно не занимается внебюджетной деятельностью, оно не занимается
 хозрасчетной деятельностью, оно не занимается никакими бизнес-услугами.
  Что касается Академии, в новом законе у Академии появляются полномочия,
  которых у нее не было до сих пор. Это полномочия глобального определения
  программ развития фундаментальных исследований. И это огромная ответственность
   за контролем за ходом исследований не только в научных институтах, но и в системе
   высшего образования, - сообщил первый заместитель руководителя фракции Единая Россия в Госдлуме РФ Николай Булаев.
Они влияют на то, как будет развиваться наука, какие научные направления, и деньги, они решают, какие нужно вложить
под эти направления. Но вот уже закупать приборы под это направление или выделять земельные участки, или что-то там
объединять, перевозить, ремонтировать – зачем. Зачем ученым функции заведующего хозяйства? Если бы шло на ученых,
на молодых, на аспирантов, а то уходит в карман замдиректора по административной работе, вице-президента
по хозяйственной работе, - считает руководитель фракции ЛДПР в Госдуме РФ Владимир Жириновский";

if (isset($_POST['B'])) {
	$x = "<strong style='color:red;'>" . $_POST['T1'] . "</strong>";
	$string_after_formatting=str_replace($_POST['T1'], $x, $string);
	echo "<hr> $string_after_formatting";
}

?>

</body>
</html>
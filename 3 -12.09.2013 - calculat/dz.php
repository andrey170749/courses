
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/></head>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
		<form name="form" action="dz.php" method="POST">
			<table>
				<tr>
					<th>Товар (грн.)</th>
					<th>Производитель</th>
					<th>Цвет</th>
				</tr>
				<tr>
					<td>
						<div id="main">
						 <div id="left"><input type="checkbox" name="C[0]" value="Лисапед">Лисапед</div>
						 <div id="right">
							<input class="price_bg" type="text" size=2 name="T1[0]" value="6000"  readonly>
							<input type="text" size=2 name="T[0]" value="">
						 </div>
						</div>
						<div id="main">
						 <div id="left"><input type="checkbox" name="C[1]" value="MacBook">MacBook</div>
						 <div id="right">
						    <input class="price_bg" type="text" size=2 name="T1[1]" value="12000" readonly>
							<input type="text" size=2 name="T[1]" value="">
						 </div>
						</div>
						<div id="main">
						 <div id="left"><input type="checkbox" name="C[2]" value="Айпонт">Айпонт</div>
						 <div id="right">
							 <input class="price_bg" type="text" size=2 name="T1[2]" value="6000"  readonly>
							 <input type="text" size=2 name="T[2]" value="">
						 </div>
						</div>
						<div id="main">
						 <div id="left"><input type="checkbox" name="C[3]" value="Драчипонт">Драчипонт</div>
						 <div id="right">
							 <input class="price_bg" type="text" size=2 name="T1[3]" value="7000"  readonly>
							 <input type="text" size=2 name="T[3]" value="">
						 </div>
						</div>
					</td>
					<td>
						<input type="radio" name="R" value="украинского" checked>Украина<br>
						<input type="radio" name="R" value="российского">Россия<br>
						<input type="radio" name="R" value="германского">Германия
					</td>
					<td>
						<select name="sel">
							<option value='белого'>Белый</option>
							<option value='черного'>Черный</option>
							<option value='золотого'>Золотой</option>
						</select><br>
							<input type="submit" value="Result" name="B">
					</td>
				</tr>
			</table>
		</form>

		<div id="product">

<?php
		$check_tovar=$_POST["C"];
		$count_product=$_POST["T"];
		$price_product=$_POST["T1"];
		$country_product=$_POST["R"];
		$color_product=$_POST["sel"];

		switch ($country_product) {
			case 'украинского': $country=1; break;
			case 'российского': $country=1.5; break;
			case 'германского': $country=2.6; break;
		}

		switch ($color_product) {
			case 'белого': $color=1.2; break;
			case 'черного': $color=1.1; break;
			case 'золотого': $color=1.5; break;
		}

	if (isset($_POST['B'])) {
		if ( !empty($check_tovar) ) {
			echo "<h3 align='center'>Ваш заказ</h3>";
			$i=0;
			$total_value=0;
			while ( $i<=count($price_product) ) {
				if ( !empty($check_tovar[$i]) && !empty($count_product[$i]) && $count_product[$i]>0 ) {
						  $cost=$count_product[$i]*$price_product[$i]*$country*$color;
						  $total_value=$total_value+$cost;
						  echo "<p style='text-indent:20px;'>". $check_tovar[$i]." в количестве ".$count_product[$i]." штук. С учетом того, что ".$check_tovar[$i]." "
						  .$color_product." цвета и ".$country_product." производства - его стоимость составляет <strong>".$cost."</strong> гривен.</p>";

				}
				elseif ( !empty($check_tovar[$i]) && empty($count_product[$i]) ) {
						echo "<p  style='text-indent:20px; color: red;'>Вы не ввели количество товара для товара - $check_tovar[$i]</p>";
				}
				elseif ( $count_product[$i] <0 ) {
					echo "<p  style='text-indent:20px; color: red;'>Макс! Заебал блеать вводить отрицательные числа!!!! <br> ----Вы ввели отрицательное значение количества товара - $check_tovar[$i]</p>";
				}
			$i++;
			}

			if ( !empty($total_value) ) {
				echo "<p id='total'>Общая стоимость заказа составляет ".$total_value." гривен.</p>";
			}
		}
	}
?>

		</div>




</body>
<html>
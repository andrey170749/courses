<html>
<head>

</head>
<body>

	<form name="frm" action="dz.php" method="POST">
		Логин<input name="T1" type="text" value=""><br>
		Пароль<input name="T2" type="password" value=""><br>
		<input type="submit" value="Result" name="B">
	</form>

<?


$login="admin";
$password="12345678";


if (isset($_POST['B'])) {
	if (( strcmp($_POST['T1'], $login)==0) && (strcmp($_POST['T2'], $password)==0)){
		echo "<br>You are logged in to the site";

	}
	else echo "Error!";
}

?>

</body>
</html>
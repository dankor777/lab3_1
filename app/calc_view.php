<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body style="background-color:#F6F6F6";>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
<div class="md-form form-group w-25">
<span class="input-group-text" id="inputGroup-sizing-sm" style="margin-top:2%";>Liczba 1:
	<input id="id_x" type="text" name="x" value="<?php  if (isset($x)) print($x); ?>" /><br /></span>
	<label for="id_op">Operacja: </label>
	<select name="op">
		<option value="plus">+</option>
		<option value="minus">-</option>
		<option value="times">*</option>
		<option value="div">/</option>
	</select><br />
<span class="input-group-text" id="inputGroup-sizing-sm" style="margin-top:1%"; style="width:15%";>Liczba 2:
	<input id="id_y" type="text" name="y" value="<?php if (isset($y)) print($y); ?>" /><br /></span>
	<button type="submit" class="btn btn-success" style="margin-top:3%";>Oblicz</button>
</div>
</form>	

<?php
//wyświeltenie listy błędów, jeśli istnieją
if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div class="md-form form-group w-50">
<div class="alert alert-warning alert-dismissible fade show" role="alert">

<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

</body>
</html>
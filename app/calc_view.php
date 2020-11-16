<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body style="background-color:#F6F6F6";>
    
<div style="width:90%; margin: 2em auto;">
	<a href="<?php print(_APP_ROOT); ?>/app/inna_chroniona.php" class="pure-button">kolejna chroniona strona</a>
	<a href="<?php print(_APP_ROOT); ?>/app/security/logout.php" class="pure-button pure-button-active">Wyloguj</a>
</div>
    
    <h1> kalkulator kredytowy </h1>
<form action="<?php print(_APP_URL);?>/app/calc2.php" method="post">
<div class="md-form form-group w-25">
<span class="input-group-text" id="inputGroup-sizing-sm" style="margin-top:2%";>Kwota:
	<input id="id_x" type="text" name="kwota" value="<?php out($kwota); ?>" /><br /></span>
<span class="input-group-text" id="inputGroup-sizing-sm" style="margin-top:1%"; style="width:15%";>Jakie oprocentowanie:
	<input id="id_y" type="text" name="oprocentowanie" value="<?php  out($oprocentowanie); ?>" /><br /></span>
<span class="input-group-text" id="inputGroup-sizing-sm" style="margin-top:1%"; style="width:15%";>Ile lat:
	<input id="id_z" type="text" name="lata" value="<?php out($lata); ?>" /><br /></span>
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

<?php echo 'wynik: '.$result;  ?>
</div>
<?php } ?>

</body>
</html>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="stylesheet" href="<?php print(_APP_URL); ?>\assets\css\main.css" />
<noscript><link rel="stylesheet" href="<?php print(_APP_URL); ?>\assets\css\noscript.css" /></noscript>
<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<meta charset="utf-8" />
<title>Kalkulator</title>
</head>
<body class="is-preload" style="background-color:black; color:white;">
		<div id="page-wrapper">
		<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="index.html">Aplikacje Internetowe</a></h1>
					<nav id="nav">
					</nav>
				</header>
<!-- Main -->
				<div id="main" class="wrapper style1">
					<div class="container">
					<header class="major">
							<h2>Kalkulator kredytowy</h2>
							<p>app</p>
						</header>
   
    <h1> Kalk Kredytowy test</h1>
							<section>
								<h3>Form</h3>
								<form action="<?php print(_APP_URL);?>/app/calc2.php" method="post">
									<div class="row gtr-uniform gtr-50">
										<div class="col-6 col-12-xsmall">
												<input id="id_x" type="text" name="kwota" value="<?php out($kwota); ?>"  placeholder="kwota"/><br />
										</div>
										<div class="col-6 col-12-xsmall">
												<input id="id_y" type="text" name="oprocentowanie" value="<?php  out($oprocentowanie); ?>" placeholder="Oprocentowanie" /><br />
										</div>
										<div class="col-6 col-12-xsmall">
											<input id="id_z" type="text" name="lata" value="<?php out($lata); ?>" placeholder="okres"/><br />
										</div>
									
											<li><input type="submit" value="Oblicz raty" class="primary" /></li>
									</div>
							
											
								</form>
								
							</section>
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
</div>
	</div>
	</div>
	</div>
	<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="https://github.com/dankor777" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; DK. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>


		<!-- Scripts -->
			<script src="<?php print(_APP_URL); ?>\assets/js/jquery.min.js"></script>
			<script src="<?php print(_APP_URL); ?>\assets/js/jquery.scrolly.min.js"></script>
			<script src="<?php print(_APP_URL); ?>\assets/js/jquery.dropotron.min.js"></script>
			<script src="<?php print(_APP_URL); ?>\assets/js/jquery.scrollex.min.js"></script>
			<script src="<?php print(_APP_URL); ?>\assets/js/browser.min.js"></script>
			<script src="<?php print(_APP_URL); ?>\assets/js/breakpoints.min.js"></script>
			<script src="<?php print(_APP_URL); ?>\assets/js/util.js"></script>
			<script src="<?php print(_APP_URL); ?>\assets/js/main.js"></script>


	</body>
</html>
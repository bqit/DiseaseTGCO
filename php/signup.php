<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style><?php include './../stylesheets/login.css'; ?></style>
    <style><?php include './../stylesheets/color_palettes.css'; ?></style>
	<style><?php include './../stylesheets/color_themes_previews.css'; ?></style>
	<script><?php include './../js/theme_system.js'; ?></script>
</head>
<body>
	<div class="container" id="container">
		<div class="form-container sign-in-container">
			<form action="#">
				<h1>Registrati</h1>
				<input type="email" placeholder="Username" />
				<input type="password" placeholder="Password" />
				<input type="password" placeholder="Ripeti password" />
				<a href="#">Problemi a registrarti?</a>
				<button>Registrati</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Benvenuto!</h1>
					<p>Inserisci le tue credenziali per registrare il tuo profilo.</p>
					<a>Hai già un profilo?</a>
					<button class="ghost" id="signUp">Accedi</button>
				</div>
			</div>
		</div>
	</div>

	<span id="container_theme" class="container_theme_hidden"></span>
	<footer>
		<p>	
			Disease TCGO è stato creato da Pietro Battistini. 
			<a target="_blank" href="https://byteportfolio.altervista.org/PortfolioWebsite/html/indexEn.html">Controlla i miei altri lavori</a>.
			v.01.00.0
			<button id="button" class="themeButton" onclick="show_themes(this)">DTCGO default</button>
		</p>
	</footer>
</body>
</html>
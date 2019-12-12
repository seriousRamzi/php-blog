<!DOCTYPE html>
<html>
<head>
	<title>Registation</title>
	<link rel="stylesheet" type="text/css" href="public/style_members_signing.css">
	<link rel="stylesheet" type="text/css" href="public/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div id="container">
		<?php include("view/pageHeader.php");?>
		<div id="underHeader"></div>
		<a id="lien_retour" href="?action=list">Home</a>
		<div id="Usercontent">
			<section id="mainContent">
				<h1>Register</h1>
				<form method="post" action="?action=register">
					<input type="text" name="pseudo" placeholder="Pseudo"><br/>
					<input type="password" name="pass" placeholder="Password"><br/>
					<input type="password" name="passConfirm" placeholder="Confirm password"><br/>
					<input type="email" name="mail" placeholder="email"><br/>
					<input type="submit" name="submit" value="Register"><br/>
				</form>
			</section>
			<aside>
				<h2>Already have an account?</h2>
				<a href="?action=login">Login</a>
			</aside>
		</div>
	</div>
</body>
</html>
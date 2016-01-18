<?php
	if(!isset($_SESSION['aut'])) header("location: errore.html");
?>
<html>
	<head>
		<title> Setta preferenze </title>
	</head>
	<body>
		<form method="POST" action="preferenze.php">
		<select name="foreground" size=1>
			<option value="#FF0000"> Rosso </option>
			<option value="#0000FF"> Blu </option>
			<option value="#FFFFFF"> Bianco </option>
			<option value="#000000"> Nero </option>
		</select>
		<select name="background" size=1>
			<option value="#FF0000"> Rosso </option>
			<option value="#0000FF"> Blu </option>
			<option value="#FFFFFF"> Bianco </option>
			<option value="#000000"> Nero </option>
		</select>
		<input type="submit" value="Invia"></input>
		<?php
			if(isset($_POST['foreground']) && isset($_POST['background']))
				print("Preferenze settate. Per visualizzarle clicca <a href='visual.php'>qui")
		?>
	</body>
</html>
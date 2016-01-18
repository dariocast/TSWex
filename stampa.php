<!DOCTYPE html>
<html>
	<head>
		<title> Modulo Registrazione </title>
	</head>
	<body>
		<h1>Registrazione</h1><br>
		<hr noshade>
		<?php if(isset($_POST['passwd'])){$password=$_POST['passwd'];} if(isset($_POST['confermaPassword'])){$passctrl=$_POST['confermaPassword'];} ?>
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" id="modulo">
			<fieldset>
				<legend> Registrati </legend>
				<p><label>Nome: </label><input type="text" name="nome" placeholder="Mario" autofocus value="<?php if(isset($_POST['nome'])){print($_POST['nome']); } ?>"></p>
				<p><label>Cognome: </label><input type="text" name="cognome" placeholder="Rossi" value="<?php if(isset($_POST['cognome'])){print($_POST['cognome']); } ?>"></p>
				<p><label>Inserisci email: </label><input type="email" name="mail" value="<?php if(isset($_POST['mail'])){print($_POST['mail']); } ?>">
				<p><label>Password: </label><input type="password" name="passwd" value="<?php if(isset($_POST['passwd'])){print($_POST['passwd']); } ?>">
				<p><label>Conferma password: </label><input type="password" name="confermaPassword" value="<?php if(isset($_POST['confermaPassword'])){print($_POST['confermaPassword']); }?>">
				<p><input type="submit"> <input type="reset"></p>
			</fieldset>
		</form>

		<?php
		if(isset($_POST['passwd']) && isset($_POST['confermaPassword'])){
			if(!is_null($password) && !is_null($passctrl)){
				if($password==$passctrl) {
					print("<table>");
					foreach($_POST as $indice => $elem)
						print("<tr> <td> $indice <td> $elem");
					print("</table>");
				}
				else {print("Devi inserire la stessa password!!!");}
			}
		} ?>
	</body>
</html>
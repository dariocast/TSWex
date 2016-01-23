<?php
$f = $c = "";

if(isset($_POST['f'])) $f = sanitizeString($_POST['f']);
if(isset($_POST['c'])) $c = sanitizeString($_POST['c']);

if($f != "") {
	$c = intval((5/9) * ($f-32));
	$out = "$f °f uguale $c °C";
}
elseif($c != '') {
	$f = intval((9/5)*$c+32);
	$out = "$c °C uguale $f °f";
}
else $out="";

echo <<<_END
<html>
	<head>
		<title> Convertitore di Temperature </title>
	</head>
	<body>
		<p> Inserisci una temperatura e premi "Converti!" </p>
		<table>
			<form method="post" action="conversione.php">
				<thead>
					<tr><td colspan="2" style="align-content:center"> <b>$out</b></td>
				</thead>
				<tbody>
					<tr><td> Fahrenheit</td><td><input type="text" name="f" size = "7"/></td>
					<tr><td> Celsius</td><td><input type="text" name="c" size = "7"/></td>
				</tbody>
				<tr><td colspan="2" style="align-content:center"> <input type="submit" value="Converti!"/></td>				
			</form>
		</table>
	</body>
</html>
_END;

function sanitizeString($var){
	$var=stripslashes($var);
	$var=strip_tags($var);
	$var=htmlentities($var);
	
	return $var;
}
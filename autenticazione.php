<?php
session_start();

if(isset($_POST['mail']) && isset($_POST['passwd'])) {
	$addr = $_POST['mail'];
	$passwd = $_POST['passwd'];
	if(preg_match('/@*\./',$addr)) {
		$handle = fopen("dati.txt", "r");
		while(!feof($handle)) {
			$line = fgets($handle);
			sscanf($line,"%s:%s", $a,$p);
			if($addr == $a && $passwd == $p) {
				$_SESSION['aut'];
				header("location: preferenze.php");
			}
		}
	}
	header("location: errore.html");
}
?>
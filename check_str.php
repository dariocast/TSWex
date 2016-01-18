<html>
	<head>
		<title> Check di stringhe </title>
	</head>
	<body>
		<?php if(isset($_GET['linea'])) $str=$_GET['linea']; ?>
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
			Inserisci una stringa: 
			<input type="text" name="linea" value="<?php if(isset($str)) echo $str ?>">
			<input type="submit" name="Valuta la stringa!">
		</form>

		<?php
			if(isset($str)) {
			if(!is_null($str)){
				$vocali=0;
				$consonanti=0;
				$num=0;
				for($i=0;$i<strlen($str);$i+=1){
					if(preg_match('/^[aeiou]|[AEIOU]$/',$str[$i]))
						$vocali=$vocali+1;
					else if(preg_match('/^[a-z]|[a-z]$/',$str[$i]))
						$consonanti=$consonanti+1;
					else if(preg_match('/^[0-9]$/',$str[$i]))
						$num=$num+1;
				}
				printf("Il numero di consonanti in \"%s\" &egrave;: %d<br>",$str,$consonanti);
				printf("Il numero di vocali in \"%s\" &egrave;: %d<br>",$str,$vocali);
				printf("Il numero di caratteri numerici in \"%s\" &egrave;: %d<br>",$str,$num);
			}
			}
		?>
				
	</body>
</html>
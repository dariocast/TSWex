<?php
	echo <<<_END
		<html>
			<head>
				<title>Upload a file</title>
			</head>
			<body>
				<form method="post" action="upload.php" enctype="multipart/form-data">
					Seleziona un file da caricare: <input type="file" name="filename" size="10">
					<input type="submit" value="Upload">
				</form>
_END;
	if(isset($_FILES)) {
	print_r($_FILES);}
	echo "<br>";
	if(isset($_FILES)) {
		$name = $_FILES['filename']['name'];
		move_uploaded_file($_FILES['filename']['tmp_name'],$name);
		echo "Uploaded image '$name' <br><img src='$name'>";
	}
	echo "</body></html>";
?>
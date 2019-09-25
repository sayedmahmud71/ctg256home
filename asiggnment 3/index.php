<?php 

$pdo = new PDO("mysql:host=localhost;dbname=sayed", "root", "");
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$number = $_POST['num'];

	//insert shuru
	$q = "INSERT INTO ifty (name,number) VALUES ('$name','$number')";
	$kisu = $pdo->prepare($q);
	$kisu->execute();
	echo "hoise";
	//insert sesh

}



?>




 <!DOCTYPE html>
 <html>
 <head>
 	<title>db form</title>
 </head>
 <body>
 <form method="POST" action="">
 	<input type="text" name="name"><br>
 	<input type="number" name="num"><br>
 	<input type="submit" name="submit" value="SAVE">
 </form>
 </body>
 </html>
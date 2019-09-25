<?php 

 $pdo = new PDO("mysql:host=localhost;dbname=marjia256", "root", "");

 $del_id = $_GET['id'];
 if(isset($_POST['submit'])){

 	$name= $_POST['name'];
 	$number= $_POST['num'];

 	 $q = "UPDATE users SET name= '$name', number='$number' WHERE id='$del_id'";
	$statement = $pdo->prepare($q);    //template banay
	$statement->execute();            //template execute kore
	header("location:index.php");
 }

 $del_id=$_GET['id'];

  //get data

   $get_data_sql = "SELECT * FROM users WHERE id='$del_id'";
   $get_statement= $pdo->prepare($get_data_sql);
   $get_statement->execute();
   $result = $get_statement->fetchALL();

?>
<!DOCTYPE html>
<html>
<head>
	<title>
		

	</title>
</head>
<body>

   <?php 
       foreach($result as $value){
    ?>

	  <form method="POST" action=""> 
  	<input type="text" name="name" value="<?php echo $value['name'] ?>"> <br>
  	<input type="number" name="num" value="<?php echo $value['number'] ?>"> <br>
  	<input type="submit" name="submit" value="update">


  </form>
  <?php 

    }

   ?>

</body>
</html>
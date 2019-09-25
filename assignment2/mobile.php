

<?php 

   $pdo = new PDO("mysql:host=localhost;dbname=phone", "root", "");


   if($pdo)
  {
   echo "connected";
  }


 ?>
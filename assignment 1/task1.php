<?php
	for ($i=1; $i<=100; $i++){ 
		echo "$i <br>";
		for ($j=1; $j<=10; $j++) { 
			$result = ($i * $j) ;
			echo "$i x $j = ". $result ."<br>";
		}
		echo "<br>";
	}
?>
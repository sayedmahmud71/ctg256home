<?php
	$sum = 0;
	for ($i=1; $i<=6; $i++) { 
		echo "$i ";
		if ( $i<=5 ){
			echo " + ";
		}
		$sum = $sum + $i;		
	}
	echo " = ".$sum; 
?>
<?php

	//print_r($_POST["seats"]);
	$selectedseats = $_POST["seats"];
	echo "You have bought ".count($selectedseats)." seat(s)<br>";
	$total = 0;
	foreach($selectedseats as $selseat){
		$price = 0;
		echo $selseat;
		if($selseat[0] == "A"){
			$price = 3000;
		}
		elseif($selseat[0] =="B"){
			$price = 2000;
		}
		else {
			$price = 1000;
		}
		echo " ".$price."<br>";
		$total += $price;
		
	}
	echo $total;
?>

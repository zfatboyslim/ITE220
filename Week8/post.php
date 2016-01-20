<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Week8 Concert</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <link href="assets/css/main.css" rel="stylesheet">

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse">
        </div>
      </div>
    </div>

	<div id="headerwrap">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h1>Girls Generation<b><br>Concert</b></h1>
				</div>
			</div>
		</div>
	</div>


    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    		<script src="js/jquery.min.js"></script>
		<script src="js/app.js"></script>
  </body>

 <center><br>
 			<div class="container" style="margin-bottom:100px;">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
				<h1>Summary</b></h1>
				</div>
			</div>
		
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
		$prize = "A-4";

		if($selseat == $prize){
			$price = 1500;
		}
		else{

		}



		echo " ".$price."<br>";
		if($selseat == $prize){
			echo "You won the prize and got 50% off seat A-4!<br>";
		}
		else{
			
		}
		$total += $price;
		
	}
	echo "Total Price: ".$total;
?>
</center></div>
</html>
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
				<h1>Seat Booking</b></h1>
				</div>
			</div>
			
<?php
	$seats = ['A-1','A-2','A-3','A-4','A-5','B-1','B-2','B-3','B-4','B-5','C-1','C-2','C-3','C-4','C-5'];

	echo "<form action='post.php' method='post' id='form1'>";
	$counter = 1;
	foreach($seats as $seat){
		echo "<input type='checkbox' name='seats[]' value='".$seat."'></input>".$seat;
	if ($counter % 5 == 0) {
		echo "<br>";
	}
	$counter++;	
	}

	echo "<br><button type='submit' form='form1' value='Submit'>Submit</button>";
	echo "<button type='reset' form='form1' value='Reset'>Resets</button>";
	echo "</form>";
?>
</center></div>
</html>
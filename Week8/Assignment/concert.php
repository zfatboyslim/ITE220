<?php
	$seats = ['A-1','A-2','A3','A4','A5','B-1','B-2','B-3','B-4','B5','C-1','C-2','C-3','C-4','C-5'];

	echo "<form action='post.php' method='post' id='form1'>";
	$counter = 1;
	foreach($seats as $seat){
		echo "<input type='checkbox' name='seats[]' value='".$seat."'></input>".$seat;
	if ($counter % 5 == 0) {
		echo "<br>";
	}
	$counter++;	
	}

	echo "<button type='submit' form='form1' value='Submit'>Submit</button>";
	echo "<button type='reset' form='form1' value='Reset'>Resets</button>";
	echo "</form>";
?>
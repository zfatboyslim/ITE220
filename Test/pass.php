<?php


$username = 'Dennis';

$password = "1234";

$user = $_POST["username"];

if ($username == $user){
	echo "Login Success";
}
else{
	echo "Login Failed";
}

?>
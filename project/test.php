<?php

	session_start();
	if(isset($_SESSION['username'])){
	$ses_userid = $_SESSION['ses_userid'];
	}
	else{
		$ses_userid = null;
	}
	if(isset($_SESSION['username'])){
	$ses_user = $_SESSION['username'];
	}
	
	if($ses_userid != null){
			if($ses_userid == session_id() && $ses_user != ""){
				require("alreadylog.php");
			}else{
				require("loginbox.php");
			}
	}else{
		require("loginbox.php");
	}

?>
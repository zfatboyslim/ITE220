<?


	$ses_userid = $_SESSION['ses_userid'];
	$ses_user = $_SESSION['ses_username'];

	if($ses_userid <> session_id() or $ses_user == ""){
		header('Location: http://localhost/project/admin/loginform');
	} 



?>
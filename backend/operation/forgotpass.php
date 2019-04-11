<?php
	session_start();
	require('./../util/functions.php');
	require_once ('./../util/hashing.php');
	$utility = new Utility();
	$fields = array('email');

	$error = false; 
	foreach($fields AS $fieldname) { 
	  if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])) {
	    echo 'Field '.$fieldname.' missing!<br />';
	    $error = true;
	  }
	}

	if(!$error) {
		$param = $utility->clean_input($_POST['email']);
		$trigger = $auth->forgotepass($param, 'participant');
	}else{
		$message = "Unexpected Error";
		$code = 201;
		$this->out($code, $message);
	}
?>
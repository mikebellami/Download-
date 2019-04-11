<?php
	if (session_status() == PHP_SESSION_NONE) {
	    session_start();
	 }
	require('./../util/functions.php');
	require_once ('./../util/hashing.php');
	$utility = new Utility();
	$auth = new Auth;
	$fields = array('reg_no', 'mat_no', 'password',  'email', 'dept', 'category');
	$error = false; 

	foreach($fields AS $fieldname) { 
	  if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])) {
	    echo 'Field '.$fieldname.' missing!<br />';
	    $error = true;
	  }
	}
	$field = array('reg_no', 'mat_no', 'password',  'email', 'dept', 'category', 'act_code');
	if(!$error) {
		$reg_no = $utility->clean_input($_POST['reg_no']);
		$mat_no = $utility->clean_input($_POST['mat_no']);
		$password = $utility->clean_input($_POST['password']);
		$email =  $utility->clean_input($_POST['email']);
		$dept = $utility->clean_input($_POST['dept']);
		$category = $utility->clean_input($_POST['category']);
		$act_code = $auth->random_char();
		$act_status = 0;
		if($password == $password){
			$password = passwordHash::hash($password);
			if($utility->validate_email(strtolower($email))) {
				$values = array('reg_no' => $reg_no, 'mat_no' => $mat_no,  'password' => $password, 'email' => $email,  'dept' => $dept, 'category' => $category, 'act_code'=>$act_code);
				$auth = new Auth();
				$main = $auth->register('participant', $field, $values, $act_code);
			}else {
				$message = "Wrong email format, use an email with @lmu.edu.ng domain";
				$code = 201;
				$auth->out($code, $message);
			}
		}else{
			$message = "password not match";
			$code = 201;
			$auth->out($code, $message);
		}
	}else{
		$message = "ensure all fields are field";
		$code = 201;
		$auth->out($code, $message);
	}

?>
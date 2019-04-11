<!-- logout if no session -->
<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  require_once ('./../backend/util/functions.php');
  $utility = new Utility();
  $auth = new Auth();
  $inactive = 12000;
  $session_life = time() - $_SESSION['timestamp'];
  if (!isset($_SESSION['user_id'])){  
    header("Location: ./../login.php");  
  } else {
    $_SESSION['last_activity'] = time();
  }
  $usid = $_SESSION['user_id'];
  $userdetails = $utility->getone("SELECT * FROM customers WHERE _id = '$usid'");
  $walletdetails = $utility->getone("SELECT * FROM wallet WHERE userid = '$usid'");

?>
<!-- logout if no session -->
<!-- session message  -->
<?php
    $auth = new Auth();
    $auth->getSessions();
    if(isset($_SESSION['message'])){
?>
    <div id="sessmsg" class="<?php echo $_SESSION['messagetype']; ?> alert-dismissible" style="text-align: center;">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <?php echo $_SESSION['message']; ?>
    </div>
<?php
    }
?>       
<!-- session message  -->
<!-- mail test -->
<?php
	require 'util/functions.php';
	require 'config.php';
	require_once 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';
	$mail = new Mailing();
	$mail->mail_verification('ade@adey.com', 'Hello');
?>
<!-- mail test -->
<!-- destroy after show message -->
<?php include './../backend/destroyalert.php'; ?>
<!-- destroy after show message -->
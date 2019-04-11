<?php
   if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  require_once ('backend/util/functions.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>leap register</title>
</head>
<body>
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
	<form method="post" action="backend/operation/reg.php">
		<h5>reg no</h5>
		<input type="text" name="reg_no"><br>
		<h5>mat no</h5>
		<input type="text" name="mat_no"><br>
		<h5>password</h5>
		<input type="text" name="password"><br>
		<h5>email</h5>
		<input type="text" name="email"><br>
		<h5>dept</h5>
		<input type="text" name="dept"><br>
		<h5>category</h5>
		<input type="radio" value="1" name="category">
		<input type="radio" value="2" name="category"><br>
		<button>Submit</button>
	</form>

</body>
<?php include 'backend/destroyalert.php'; ?>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</html>
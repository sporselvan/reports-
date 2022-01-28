<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	</style>

	<script type = 'text/javascript' src="../js/validate.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

  <p>  
	 <?php echo cal(2000); ?>        
 
	 <?php 

	   $arr = array("firstname" => "spor" , "lastname" => "selvan");
 
      echo ele("firstname",$arr);
 
      ?> 
    </p> 

      <form>
		  <div class="form-group">
			  <label>Email</label>
			  <input type="text" name="email" id="email" class = "form-control">
		  </div>
		  <div class="form-group">
			  <label>Name</label>
			  <input type="text" name="name" id="name" class = "form-control">
		  </div>
		  <div class="form-group">
			  <label>Age</label>
			  <input type="number" name="age" id="age" class = "form-control">
		  </div>
		  <div class="form-group">
			  <label>password</label>
			  <input type="password" name="password" id="password" class = "form-control">
		  </div>
		  <div class="form-group">
			 <button type="submit" name="save" class="btn btn-success">Signup</button>
		  </div>
     </form>

 

</body>
</html>
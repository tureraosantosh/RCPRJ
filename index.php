<?php

session_start();

if(isset($_POST['login']))
{
   $username = $_POST['username'];
   $password = $_POST['pass'];

   if($username == "chandrakant" && $password == "mhatre")
   {
      $_SESSION['dhon'] = true; 
       ?>
       <script type="text/javascript">
           alert(" you have been successfully logged in!");
           window.location="dashboard.php";
        </script>

       <?php
   }
   else
   {
      ?>
        <script type="text/javascript">
           alert(" Username Or Password error! ");
           window.location="index.php";
        </script>   
     <?php
   }
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <style>
  .modal-header, h4, .close {
      background-color: orange;
      color:white !important;
      text-align: center;
      font-size:50px;
  }
  .modal-footer {
      background-color: orange;
  }
  
  #myBtn
  {
	font-family: "Montserrat", sans-serif;
  text-transform: uppercase;
  font-weight: 500;
  font-size: 26px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 8px 28px;
  border-radius: 25px;
  transition: 0.5s;
  margin-top: 180px;
  border: 2px solid #fff;
  background-color:orange;
  }
 #myBtn:hover
 { 
  color:WHITE;	
  background:#f69206;
  border: 2px solid #FFF;
 }
 
 .bgimg
 {
	background-image:url(img/bg.jpg);
	
 }
 
 .login100-form-btn{
	 color:red;
	 
 }
  
  </style>
</head>
<body class="bgimg">

<div class="container">
  <center><h2 style="margin-top:90px; font-weight:900; font-stretch:semi-condensed; color:white;">Welcome to Rc Electronics</h2></center>
  
  <!-- Trigger the modal with a button -->
 <center> <button type="button" class="btn btn-default btn-lg" id="myBtn">Login</button></center>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <img src="img/logo-designtext=RC+Electronics (1).png" height="25%">
        </div>
        <div class="modal-body" style="padding:40px 50px;">
         <form class="login100-form validate-form "  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					

					<div class="wrap-input100 validate-input m-t-15 m-b-15" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username" required="required">
						<span class="focus-input100" ></span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password" required="required">
						<span class="focus-input100" ></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn"  type="submit"   name="login" style="background-color:orange;">
							Login
						</button>
					</div>
					
				</form>
        </div>
        <div class="modal-footer">
          <center>
             <span style="color:#FFF;">&copy;&nbsp;Made by AJAY ATUL</span>
          </center> 
          
        </div>
      </div>
      
    </div>
  </div> 
</div>
 
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
        $("#myModal").modal();
    });
});
</script>

</body>
</html>


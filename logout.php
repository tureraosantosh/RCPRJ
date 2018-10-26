
<?php 
  
    session_start();

    if(isset($_SESSION['dhon']))
    {
          session_destroy();
          $_SESSION['dhon'] = false;
          ?>
            <script type="text/javascript">
            	
            	alert(" you have been successfully logout ");
            	window.location="index.php";

            </script>
          <?php 
    }
    else
    {
    	header("location:index.php");
    }

?>
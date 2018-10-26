<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>rc</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
 
   <script type="text/javascript">
     
       
       function tv() 
       {

            var rate = document.getElementById("gst1").value;
            var actual_amount = document.getElementById("acc_amount1").value;
            var gst_amount  = rate * actual_amount;
            var total_amount = Number(gst_amount) + Number(actual_amount);
            
            if(!isNaN(total_amount)){
            document.getElementById('total1').value = total_amount;
           }
      }

      function fridge() 
       {

            var rate = document.getElementById("gst2").value;
            var actual_amount = document.getElementById("acc_amount2").value;
            var gst_amount  = rate * actual_amount;
            var total_amount = Number(gst_amount) + Number(actual_amount);
            
            if(!isNaN(total_amount)){
            document.getElementById('total2').value = total_amount;
           }
      }
       function inv() 
       {

            var rate = document.getElementById("gst3").value;
            var actual_amount = document.getElementById("acc_amount3").value;
            var gst_amount  = rate * actual_amount;
            var total_amount = Number(gst_amount) + Number(actual_amount);
            
            if(!isNaN(total_amount)){
            document.getElementById('total3').value = total_amount;
           }
      }
       function bat() 
       {

            var rate = document.getElementById("gst4").value;
            var actual_amount = document.getElementById("acc_amount4").value;
            var gst_amount  = rate * actual_amount;
            var total_amount = Number(gst_amount) + Number(actual_amount);
            
            if(!isNaN(total_amount)){
            document.getElementById('total4').value = total_amount;
           }
      }
       function hm() 
       {

            var rate = document.getElementById("gst5").value;
            var actual_amount = document.getElementById("acc_amount5").value;
            var gst_amount  = rate * actual_amount;
            var total_amount = Number(gst_amount) + Number(actual_amount);
            
            if(!isNaN(total_amount)){
            document.getElementById('total5').value = total_amount;
           }
      }
       function ac() 
       {

            var rate = document.getElementById("gst6").value;
            var actual_amount = document.getElementById("acc_amount6").value;
            var gst_amount  = rate * actual_amount;
            var total_amount = Number(gst_amount) + Number(actual_amount);
            
            if(!isNaN(total_amount)){
            document.getElementById('total6').value = total_amount;
           }
      }
       function ht() 
       {

            var rate = document.getElementById("gst7").value;
            var actual_amount = document.getElementById("acc_amount7").value;
            var gst_amount  = rate * actual_amount;
            var total_amount = Number(gst_amount) + Number(actual_amount);
            
            if(!isNaN(total_amount)){
            document.getElementById('total7').value = total_amount;
           }
      }
       function mob() 
       {

            var rate = document.getElementById("gst8").value;
            var actual_amount = document.getElementById("acc_amount8").value;
            var gst_amount  = rate * actual_amount;
            var total_amount = Number(gst_amount) + Number(actual_amount);
            
            if(!isNaN(total_amount)){
            document.getElementById('total8').value = total_amount;
           }
      }  
   </script>
</head>

<body ng-app>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="dashboard.php" class="logo"><b>Rc_<span>ELECTRONICS
</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.php">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">!</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              
               <li><a class="logout" href="lock_screen.php">Lock Screen</a></li>
        <!--  notification end -->
      
        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          
          <li><a class="logout" href="index.php">Logout</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="dashboard.php"><img src="img/logo-designtext=RC+Electronics (1).png"  class="img-circle" width="50%"></a></p>
          <h5 class="centered">Chandrakant Mhatre</h5>
          <li class="mt">
            <a  href="dashboard.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
           <li class="sub-menu">
            <a  href="javascript:;">
              <i class="fa fa-th"></i>
              <span> View Stocks</span>
              </a>
            <ul class="sub">
              <li><a href="view_tv_stock.php">T.V</a></li>
              <li><a href="view_fridge_stock.php">Refrigerator</a></li>
              <li><a href="view_inverter_stock.php">Inverter </a></li>
              <li><a href="view_battery_stock.php">Battery</a></li>
              <li><a href="view_washmachine_stock.php">Washing Machine</a></li>
              <li><a href="view_mobile_stock.php">Mobiles</a></li>
               <li><a href="view_ac_stock.php">A.C</a></li>
               <li><a href="view_Hometheater_stock.php">Home Theater</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a class="active" href="addform.php">
              <i class="fa fa-desktop"></i>
              <span>Add Stocks</span>
              </a>
            
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Customer </span>
              </a>
            <ul class="sub">
              
              <li><a href="gallery.php">Gallery</a></li>
             
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Billing</span>
              </a>
            <ul class="sub">
              
              
              <li><a href="invoice.php">Invoice</a></li>
             
            </ul>
          </li>
          
         
          
                  <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>Add Stocks</h3>
        <div class="row mt">
          <!--  DATE PICKERS -->

        <div class="col-lg-12">
            <div class="form-panel">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal style-form">
              	 
         <?php  
         
          include_once('database.php');

          $sql = "select * from category";

          $result = mysqli_query($conn,$sql);
          
          ?>
          
        

                <div class="form-group">
                  <label for="sel1" class="control-label col-md-3">Type Of Stock</label>

                  <div class="col-md-3 ">
                       <select class="form-control"  ng-model="stock" name="stock" required="required">
                       	<option value="" selected disabled>Please select</option>
                            
                       <?php 
                          while ($row = mysqli_fetch_array($result)) {
                        ?>
                           <option value="<?php  echo $row['category_name'] ?> "><?php  echo $row['category_name'] ?> </option>";
                           <?php
                        }
                  
                        ?>
                       </select>
                  </div>
                </div>
              </form>
            </div>
          </div>    

         <div class="col-lg-12" ng-show="stock === 'AC'">
            <div class="form-panel">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal style-form">

                <h1>Enter TV Stock</h1><br><br>
                 <div class="form-group">

                         <label class="control-label col-md-3">Brand Name</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control" size="16" name="PRODUCT_NAME" type="text" required="required
                ">
                   
                  </div>
                </div>
                
                  <div class="form-group">
                
                
                  <label class="control-label col-md-3">Inches</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="SERIAL_NUMBER" required="required" size="16" type="number" >
                   
                  </div>
                </div>
                
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Purchase Date</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="MODEL_NUMBER" size="16"  required="required" type="date" date-date-formate="dd/mm/yyyy" >
                   
                  </div>
                </div>
                
                
                 <div class="form-group">
                
                
                  <label class="control-label col-md-3">Model Number</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="MODEL_NUMBER" size="16"  required="required" type="text" >
                   
                  </div>
                </div>
                     <div class="form-group">
                         <label class="control-label col-md-3">H&N Number</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="H&N_NUMBER" required="required" size="16" type="text" >
                   
                  </div>
                </div>
              
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Serial Number</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="SERIAL_NUMBER" required="required" size="16" type="number" >
                   
                  </div>
                </div>
                
                
                
                 <div class="form-group">
                
                
                  <label class="control-label col-md-3">Actual Ammount</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " id="acc_amount1" name="ACTUAL_AMOUNT" size="16" type="number" required="required">
                   
                  </div>
                </div>
                
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">GST Rate</label>
                  <div class="col-md-3 col-xs-11">
                    <select class="form-control" id="gst1" name="GST_AMOUNT" onchange="tv();" required="required">
                        <option value="" selected disabled>Please select</option>
                        <option value="0.18" >18%</option>
                        <option value="0.24">24%</option>
                        <option value="0.32">32%</option>
                    </select>
                  </div>
             </div>

                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Total Ammount</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " id="total1" name="TOTAl_AMOUNT" size="16" type="number" readonly="readonly">
                   
                  </div>
                </div>
                 
                 <div class="form-group">  
                 
                  <div class="col-md-2 col-xs-55 " >
                    
                   
                  </div>                          
                   <div class="col-md-3 col-xs-55 " >
                    <input class="btn btn-danger form-control " name="save" type="submit" value="save" required="required">
                   
                  </div>
                </div>
                
                
                
                
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12  END OF TV ADDFORM-->


          <div class="col-lg-12" ng-show=" stock === 'fri'">
            <div class="form-panel">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal style-form">

                <h1>Enter Fridge Stock</h1><br><br>
                 <div class="form-group">

                         <label class="control-label col-md-3">Brand Name</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control" size="16" name="PRODUCT_NAME" type="text" required="required
                ">
                   
                  </div>
                </div>
                
                  <div class="form-group">
                
                
                  <label class="control-label col-md-3">Litter</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="SERIAL_NUMBER" required="required" size="16" type="number" >
                   
                  </div>
                </div>
                
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Purchase Date</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="MODEL_NUMBER" size="16"  required="required" type="date" date-date-formate="dd/mm/yyyy" >
                   
                  </div>
                </div>
                
                
                 <div class="form-group">
                
                
                  <label class="control-label col-md-3">Model Number</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="MODEL_NUMBER" size="16"  required="required" type="text" >
                   
                  </div>
                </div>
                     <div class="form-group">
                         <label class="control-label col-md-3">H&N Number</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="H&N_NUMBER" required="required" size="16" type="text" >
                   
                  </div>
                </div>
              
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Serial Number</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="SERIAL_NUMBER" required="required" size="16" type="number" >
                   
                  </div>
                </div>
                
                
                
                  <div class="form-group">
                
                
                  <label class="control-label col-md-3">Actual Ammount</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " id="acc_amount2" name="ACTUAL_AMOUNT" size="16" type="number" required="required">
                   
                  </div>
                </div>
                
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">GST Rate</label>
                  <div class="col-md-3 col-xs-11">
                    <select class="form-control" id="gst2" name="GST_AMOUNT" onchange="fridge()" required="required">
                        <option value="" selected disabled>Please select</option>
                        <option value="0.18" >18%</option>
                        <option value="0.24">24%</option>
                        <option value="0.32">32%</option>
                    </select>
                  </div>
             </div>

                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Total Ammount</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " id="total2" name="TOTAl_AMOUNT" size="16" type="number" readonly="readonly">
                   
                  </div>
                </div>
                 
                 <div class="form-group">  
                 
                  <div class="col-md-2 col-xs-55 " >
                    
                   
                  </div>                          
                   <div class="col-md-3 col-xs-55 " >
                    <input class="btn btn-danger form-control " name="save" type="submit" value="save" required="required">
                   
                  </div>
                </div>
                
                
                
                
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 end of regrigeterator -->
                
                
           <div class="col-lg-12"  ng-show=" stock === 'inv'">
            <div class="form-panel">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal style-form">

                <h1>Enter Inverter Stock</h1><br><br>
                 <div class="form-group">

                         <label class="control-label col-md-3">Brand Name</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control" size="16" name="PRODUCT_NAME" type="text" required="required
                ">
                   
                  </div>
                </div>
                
                  <div class="form-group">
                
                
                  <label class="control-label col-md-3">EB</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="SERIAL_NUMBER" required="required" size="16" type="number" >
                   
                  </div>
                </div>
                
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Purchase Date</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="MODEL_NUMBER" size="16"  required="required" type="date" date-date-formate="dd/mm/yyyy" >
                   
                  </div>
                </div>
                
                
                 <div class="form-group">
                
                
                  <label class="control-label col-md-3">Model Number</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="MODEL_NUMBER" size="16"  required="required" type="text" >
                   
                  </div>
                </div>
                     <div class="form-group">
                         <label class="control-label col-md-3">H&N Number</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="H&N_NUMBER" required="required" size="16" type="text" >
                   
                  </div>
                </div>
              
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Serial Number</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="SERIAL_NUMBER" required="required" size="16" type="number" >
                   
                  </div>
                </div>
                
                
                
                 <div class="form-group">
                
                
                  <label class="control-label col-md-3">Actual Ammount</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " id="acc_amount3" name="ACTUAL_AMOUNT" size="16" type="number" required="required">
                   
                  </div>
                </div>
                
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">GST Rate</label>
                  <div class="col-md-3 col-xs-11">
                    <select class="form-control" id="gst3" name="GST_AMOUNT" onchange="inv();" required="required">
                        <option value="" selected disabled>Please select</option>
                        <option value="0.18" >18%</option>
                        <option value="0.24">24%</option>
                        <option value="0.32">32%</option>
                    </select>
                  </div>
             </div>

                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Total Ammount</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " id="total3" name="TOTAl_AMOUNT" size="16" type="number" readonly="readonly">
                   
                  </div>
                </div>
                 
                 <div class="form-group">  
                 
                  <div class="col-md-2 col-xs-55 " >
                    
                   
                  </div>                          
                   <div class="col-md-3 col-xs-55 " >
                    <input class="btn btn-danger form-control " name="save" type="submit" value="save" required="required">
                   
                  </div>
                </div>
                
                
                
                
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 Inverter e Sformnd -->     
                 
                
          <div class="col-lg-12"  ng-show=" stock === 'bat'">
            <div class="form-panel">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal style-form">

                <h1>Enter Battery Stock</h1><br><br>
                 <div class="form-group">

                         <label class="control-label col-md-3">Brand Name</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control" size="16" name="PRODUCT_NAME" type="text" required="required
                ">
                   
                  </div>
                </div>
                
                  <div class="form-group">
                
                
                  <label class="control-label col-md-3">AH</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="SERIAL_NUMBER" required="required" size="16" type="number" >
                   
                  </div>
                </div>
                
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Purchase Date</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="MODEL_NUMBER" size="16"  required="required" type="date" date-date-formate="dd/mm/yyyy" >
                   
                  </div>
                </div>
                
                
                 <div class="form-group">
                
                
                  <label class="control-label col-md-3">Model Number</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="MODEL_NUMBER" size="16"  required="required" type="text" >
                   
                  </div>
                </div>
                     <div class="form-group">
                         <label class="control-label col-md-3">H&N Number</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="H&N_NUMBER" required="required" size="16" type="text" >
                   
                  </div>
                </div>
              
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Serial Number</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="SERIAL_NUMBER" required="required" size="16" type="number" >
                   
                  </div>
                </div>
                
                
                
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Actual Ammount</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " id="acc_amount4" name="ACTUAL_AMOUNT" size="16" type="number" required="required">
                   
                  </div>
                </div>
                
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">GST Rate</label>
                  <div class="col-md-3 col-xs-11">
                    <select class="form-control" id="gst4" name="GST_AMOUNT" onchange="bat();" required="required">
                        <option value="" selected disabled>Please select</option>
                        <option value="0.18" >18%</option>
                        <option value="0.24">24%</option>
                        <option value="0.32">32%</option>
                    </select>
                  </div>
             </div>

                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Total Ammount</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " id="total4" name="TOTAl_AMOUNT" size="16" type="number" readonly="readonly">
                   
                  </div>
                </div>
                 <div class="form-group">  
                 
                  <div class="col-md-2 col-xs-55 " >
                    
                   
                  </div>                          
                   <div class="col-md-3 col-xs-55 " >
                    <input class="btn btn-danger form-control " name="save" type="submit" value="save" required="required">
                   
                  </div>
                </div>
                
                
                
                
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12  end battry form-->    

          <div class="col-lg-12" ng-show=" stock === 'wm'">
            <div class="form-panel">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal style-form">

                <h1>Enter Washing Machine Stock</h1><br><br>
                 <div class="form-group">

                         <label class="control-label col-md-3">Brand Name</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control" size="16" name="PRODUCT_NAME" type="text" required="required
                ">
                   
                  </div>
                </div>
                
                  <div class="form-group">
                
                
                  <label class="control-label col-md-3">Kg</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="SERIAL_NUMBER" required="required" size="16" type="number" >
                   
                  </div>
                </div>
                
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Purchase Date</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="MODEL_NUMBER" size="16"  required="required" type="date" date-date-formate="dd/mm/yyyy" >
                   
                  </div>
                </div>
                
                
                 <div class="form-group">
                
                
                  <label class="control-label col-md-3">Model Number</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="MODEL_NUMBER" size="16"  required="required" type="text" >
                   
                  </div>
                </div>
                     <div class="form-group">
                         <label class="control-label col-md-3">H&N Number</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="H&N_NUMBER" required="required" size="16" type="text" >
                   
                  </div>
                </div>
              
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Serial Number</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="SERIAL_NUMBER" required="required" size="16" type="number" >
                   
                  </div>
                </div>
                
                
                
                 <div class="form-group">
                
                
                  <label class="control-label col-md-3">Actual Ammount</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " id="acc_amount5" name="ACTUAL_AMOUNT" size="16" type="number" required="required">
                   
                  </div>
                </div>
                
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">GST Rate</label>
                  <div class="col-md-3 col-xs-11">
                    <select class="form-control" id="gst5" name="GST_AMOUNT" onchange="hm();" required="required">
                        <option value="" selected disabled>Please select</option>
                        <option value="0.18" >18%</option>
                        <option value="0.24">24%</option>
                        <option value="0.32">32%</option>
                    </select>
                  </div>
             </div>

                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Total Ammount</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " id="total5" name="TOTAl_AMOUNT" size="16" type="number" readonly="readonly">
                   
                  </div>
                </div>
                 
                 <div class="form-group">  
                 
                  <div class="col-md-2 col-xs-55 " >
                    
                   
                  </div>                          
                   <div class="col-md-3 col-xs-55 " >
                    <input class="btn btn-danger form-control " name="save" type="submit" value="save" required="required">
                   
                  </div>
                </div>
                
                
                
                
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12  Washmachine-->


          <div class="col-lg-12" ng-show=" stock === 'ac'">
            <div class="form-panel">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal style-form">

                <h1>Enter AC Stock</h1><br><br>
                 <div class="form-group">

                         <label class="control-label col-md-3">Brand Name</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control" size="16" name="PRODUCT_NAME" type="text" required="required
                ">
                   
                  </div>
                </div>
                
                  <div class="form-group">
                
                
                  <label class="control-label col-md-3">TON</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="SERIAL_NUMBER" required="required" size="16" type="number" >
                   
                  </div>
                </div>
                
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Purchase Date</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="MODEL_NUMBER" size="16"  required="required" type="date" date-date-formate="dd/mm/yyyy" >
                   
                  </div>
                </div>
                
                
                 <div class="form-group">
                
                
                  <label class="control-label col-md-3">Model Number</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="MODEL_NUMBER" size="16"  required="required" type="text" >
                   
                  </div>
                </div>
                     <div class="form-group">
                         <label class="control-label col-md-3">H&N Number</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="H&N_NUMBER" required="required" size="16" type="text" >
                   
                  </div>
                </div>
              
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Serial Number</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="SERIAL_NUMBER" required="required" size="16" type="number" >
                   
                  </div>
                </div>
                
                
                
                 <div class="form-group">
                
                
                  <label class="control-label col-md-3">Actual Ammount</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " id="acc_amount6" name="ACTUAL_AMOUNT" size="16" type="number" required="required">
                   
                  </div>
                </div>
                
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">GST Rate</label>
                  <div class="col-md-3 col-xs-11">
                    <select class="form-control" id="gst6" name="GST_AMOUNT" onchange="ac();" required="required">
                        <option value="" selected disabled>Please select</option>
                        <option value="0.18" >18%</option>
                        <option value="0.24">24%</option>
                        <option value="0.32">32%</option>
                    </select>
                  </div>
             </div>

                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Total Ammount</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " id="total6" name="TOTAl_AMOUNT" size="16" type="number" readonly="readonly">
                   
                  </div>
                </div>
                 
                 <div class="form-group">  
                 
                  <div class="col-md-2 col-xs-55 " >
                    
                   
                  </div>                          
                   <div class="col-md-3 col-xs-55 " >
                    <input class="btn btn-danger form-control " name="save" type="submit" value="save" required="required">
                   
                  </div>
                </div>
                
                
                
                
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12  ac-->


          <div class="col-lg-12" ng-show=" stock === 'ht'">
            <div class="form-panel">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal style-form">

                <h1>Enter Home Theater Stock</h1><br><br>
                 <div class="form-group">

                         <label class="control-label col-md-3">Brand Name</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control" size="16" name="PRODUCT_NAME" type="text" required="required
                ">
                   
                  </div>
                </div>
                
                  <div class="form-group">
                         <label for="sel1" class="control-label col-md-3">Type</label>
                  <div class="col-md-3 col-xs-11">
                       <select class="form-control" name="TYPE" required="required">
                        <option value="" selected disabled>Please select</option>
                        <option value="LED">LED</option>
                        <option value="LCD">LCD</option>
                        <option value="CRT">CRT</option>
                       </select>
                  </div>
                </div>
                
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Purchase Date</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="MODEL_NUMBER" size="16"  required="required" type="date" date-date-formate="dd/mm/yyyy" >
                   
                  </div>
                </div>
                
                
                 <div class="form-group">
                
                
                  <label class="control-label col-md-3">Model Number</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="MODEL_NUMBER" size="16"  required="required" type="text" >
                   
                  </div>
                </div>
                     <div class="form-group">
                         <label class="control-label col-md-3">H&N Number</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="H&N_NUMBER" required="required" size="16" type="text" >
                   
                  </div>
                </div>
              
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Serial Number</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="SERIAL_NUMBER" required="required" size="16" type="number" >
                   
                  </div>
                </div>
                
                
                
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Actual Ammount</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " id="acc_amount7" name="ACTUAL_AMOUNT" size="16" type="number" required="required">
                   
                  </div>
                </div>
                
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">GST Rate</label>
                  <div class="col-md-3 col-xs-11">
                    <select class="form-control" id="gst7" name="GST_AMOUNT" onchange="ht();" required="required">
                        <option value="" selected disabled>Please select</option>
                        <option value="0.18" >18%</option>
                        <option value="0.24">24%</option>
                        <option value="0.32">32%</option>
                    </select>
                  </div>
             </div>

                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Total Ammount</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " id="total7" name="TOTAl_AMOUNT" size="16" type="number" readonly="readonly">
                   
                  </div>
                </div>
                 
                 <div class="form-group">  
                 
                  <div class="col-md-2 col-xs-55 " >
                    
                   
                  </div>                          
                   <div class="col-md-3 col-xs-55 " >
                    <input class="btn btn-danger form-control " name="save" type="submit" value="save" required="required">
                   
                  </div>
                </div>
                
                
                
                
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 Home THEater-->

              <div class="col-lg-12" ng-show=" stock === 'mob'">
            <div class="form-panel">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal style-form">

                <h1>Enter Mobile Stock</h1><br><br>
                 <div class="form-group">

                         <label class="control-label col-md-3">Brand Name</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control" size="16" name="PRODUCT_NAME" type="text" required="required
                ">
                   
                  </div>
                </div>
                
                  <div class="form-group">
                         <label for="sel1" class="control-label col-md-3">Type</label>
                  <div class="col-md-3 col-xs-11">
                       <select class="form-control" name="TYPE" required="required">
                        <option value="" selected disabled>Please select</option>
                        <option value="LED">LED</option>
                        <option value="LCD">LCD</option>
                        <option value="CRT">CRT</option>
                       </select>
                  </div>
                </div>
                
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Purchase Date</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="MODEL_NUMBER" size="16"  required="required" type="date" date-date-formate="dd/mm/yyyy" >
                   
                  </div>
                </div>
                
                
                 <div class="form-group">
                
                
                  <label class="control-label col-md-3">Model Number</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="MODEL_NUMBER" size="16"  required="required" type="text" >
                   
                  </div>
                </div>
                     <div class="form-group">
                         <label class="control-label col-md-3">IMEI Number</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="H&N_NUMBER" required="required" size="16" type="text" >
                   
                  </div>
                </div>
              
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Serial Number</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="SERIAL_NUMBER" required="required" size="16" type="number" >
                   
                  </div>
                </div>
                
                
                
                 <div class="form-group">
                
                
                  <label class="control-label col-md-3">Actual Ammount</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " id="acc_amount8" name="ACTUAL_AMOUNT" size="16" type="number" required="required">
                   
                  </div>
                </div>
                
                <div class="form-group">
                
                
                  <label class="control-label col-md-3">GST Rate</label>
                  <div class="col-md-3 col-xs-11">
                    <select class="form-control" id="gst8" name="GST_AMOUNT" onchange="mob();" required="required">
                        <option value="" selected disabled>Please select</option>
                        <option value="0.18" >18%</option>
                        <option value="0.24">24%</option>
                        <option value="0.32">32%</option>
                    </select>
                  </div>
             </div>

                <div class="form-group">
                
                
                  <label class="control-label col-md-3">Total Ammount</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " id="total8" name="TOTAl_AMOUNT" size="16" type="number" readonly="readonly">
                   
                  </div>
                </div>
                 
                 <div class="form-group">  
                 
                  <div class="col-md-2 col-xs-55 " >
                    
                   
                  </div>                          
                   <div class="col-md-3 col-xs-55 " >
                    <input class="btn btn-danger form-control " name="savetv" type="submit" value="save" required="required">
                   
                  </div>
                </div>
                
                
                
                
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 Mobile-->


                
                  
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
  
    
<?php

      if(isset($_POST['savetv']))
      {
         include_once('database.php');
         $PNAME = $_POST['pname'];
         $HSN_NUMBER = $_POST['hsn_number'];
         $MODEL_NUMBER = $_POST['model_number'];
         $SERIAL_NUMBER = $_POST['serial_number'];
        // $IMEI_NUMBER = $_POST['imei_number'];
         $ACTUAL_AMOUNT = $_POST['actual_amount'];
         $GST_RATE = $_POST['gst_rate'];
         $TOTAL_AMOUNT = $_POST['total_amount'];
         $TV_INCHES = $_POST['tv_inches'];

         //$TYPE = $_POST['TYPE'];
        
         
         //$PURCHASE_AMOUNT = $_POST['PURCHASE_AMOUNT'];
         $sql = "insert into product_stock(PRODUCT_NAME,TYPE,MODEL_NUMBER,HN_NUMBER,SERIAL_NUMBER,PURCHASE_AMOUNT) values('$PRODUCT_NAME','$TYPE','$MODEL_NUMBER','$HN_NUMBER','$SERIAL_NUMBER','$PURCHASE_AMOUNT') ";

         $query = mysqli_query($conn, $sql);

         if($query)
         {
            ?>
            <script type="text/javascript">
                 alert('Response Recorded Successfully');
                 window.location="addform.php";
            </script>
            <?php
         }
         else
         {
           ?>
            <script type="text/javascript">
                 alert('Oops! something went wrong ');
                 window.location="addform.php";
            </script>
             
             <?php 
         }
      } 
?>

  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="lib/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="lib/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script src="lib/advanced-form-components.js"></script>
  
</body>

</html>

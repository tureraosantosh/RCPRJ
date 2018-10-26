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
  
 
</head>

<body>
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
          <p class="centered"><a href="#"><img src="img/logo-designtext=RC+Electronics (1).png"  class="img-circle" width="50%"></a></p>
          <h5 class="centered">Chandrakant Mhatre</h5>
          <li class="mt">
            <a class="active" href="dashboard.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
           <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span> View Stocks</span>
              </a>

            <ul class="sub">
              <li><a href="view_tv_stock.php">T.V</a></li>
              <li><a href="view_fridge_stock.php">Refrigerator</a></li>
              <li><a href="view_inverter_stock.php">Inverter </a></li>
              <li><a href="view_washmachine_stock.php">Washing Machine</a></li>
              <li><a href="view_mobile_stock.php">Mobiles</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Add Stocks</span>
              </a>
            <ul class="sub">
              <li class="active"><a href="tv_addform.php">T.V</a></li>
              <li><a href="fridge_addform.php">Refrigerator</a></li>
              <li><a href="inverter_addform.php">Inverter</a></li>
              <li><a href="washmachine_addform.php">Washing Machine</a></li>
              <li><a href="mobile_addform.php">Mobiles</a></li>
            </ul>
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
        <h3><i class="fa fa-angle-right"></i>    Add Cutomers Details  </h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
              <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-horizontal style-form">
              	 
                 <br>
                <h1>Details Section</h1><br>
                 <div class="form-group">
                 <label class="control-label col-md-3">Date</label>
                  <div class="col-md-3 col-xs-11">
                   <input class="form-control form-control-inline input-medium " name="DATE" type="date" size="16"  required="required" type="text" >
                   
                  </div>
                </div>
                 
                 
                 
                 <div class="form-group">

                         <label class="control-label col-md-3">Custemer Name</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control" size="16" name="Custermer_NAME" type="text" required>
                   
                  </div>
                </div>
                
                <div class="form-group">
                 <label class="control-label col-md-3">Present Address</label>
                  <div class="col-md-3 col-xs-11">
                   <textarea class="form-control form-control-inline input-medium " name="PRESENT_ADDRESS" rows="4"  required="required"  ></textarea>
                   
                  </div>
                </div>
                
                 <div class="form-group">
                 <label class="control-label col-md-3">Native Address</label>
                  <div class="col-md-3 col-xs-11">
                   <textarea class="form-control form-control-inline input-medium " name="NATIVE_ADDRESS" rows="4"  required="required"  ></textarea>
                   
                  </div>
                </div>
                
                <div class="form-group">
                 <label class="control-label col-md-3">Contact Number</label>
                  <div class="col-md-3 col-xs-11">
                   <input class="form-control form-control-inline input-medium " name="CONTACT_NUMBER" size="16"  required="required" type="number" >
                   
                  </div>
                </div>
                
                <div class="form-group">
                 <label class="control-label col-md-3">Reference Number</label>
                  <div class="col-md-3 col-xs-11">
                   <input class="form-control form-control-inline input-medium " name="REFERENCE_NUMBER" size="16"  required="required" type="text" >
                   
                  </div>
                </div>
                
                <div class="form-group">
                 <label class="control-label col-md-3">E-Mail Id</label>
                  <div class="col-md-3 col-xs-11">
                   <input class="form-control form-control-inline input-medium " name="EMAIL_ID" size="16"  required="required" type="email" >
                   
                  </div>
                </div>
                
                <div class="form-group">
                 <label class="control-label col-md-3">PAN Number</label>
                  <div class="col-md-3 col-xs-11">
                   <input class="form-control form-control-inline input-medium " name="PAN_NUMBER" size="16"  required="required" type="text" >
                   
                  </div>
                </div>
                
                <div class="form-group">
                 <label class="control-label col-md-3">Adhar Number</label>
                  <div class="col-md-3 col-xs-11">
                   <input class="form-control form-control-inline input-medium " name="ADHAR_NUMBER" size="16"  required="required" type="number" >
                   
                  </div>
                </div>
                
                <div class="form-group">
                 <label class="control-label col-md-3">DOB </label>
                  <div class="col-md-3 col-xs-11">
                   <input class="form-control form-control-inline input-medium " name="DOB" size="16"  required="required" type="date" >
                   
                  </div>
                </div>
                
                <br>
                <h1>Product details Section</h1><br>
                
                <div class="form-group">
                 <label class="control-label col-md-3">Invoice Number</label>
                  <div class="col-md-3 col-xs-11">
                   <input class="form-control form-control-inline input-medium " name="INVOICE_NUMBER" size="16"  required="required" type="text" >
                   
                  </div>
                </div>
                
                <div class="form-group">
                 <label class="control-label col-md-3">DOG  (Description of goods)</label>
                  <div class="col-md-3 col-xs-11">
                   <input class="form-control form-control-inline input-medium " name="DOG" size="16"  required="required" type="text" >
                   
                  </div>
                </div>
                
                 <div class="form-group">
                <label class="control-label col-md-3">HSN /SAC</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="HSN_SAC" required size="16" type="text" >
                   
                  </div>
                </div>
                
                 <div class="form-group">
                <label class="control-label col-md-3">Quntity</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="QUNTITY" required size="16" type="number" >
                   
                  </div>
                </div>
                
                 <div class="form-group">
                <label class="control-label col-md-3">Amount  (without GST)</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="AMOUNT_NO_GST" required size="16" type="number" >
                   
                  </div>
                </div>
                
                <div class="form-group">
                         <label for="sel1" class="control-label col-md-3">GST Rate</label>
                  <div class="col-md-3 col-xs-11">
                       <select class="form-control" name="GST" required="required">
                       	<option value="" selected disabled>Please select</option>
                       	<option value="9">9%</option>
                       	<option value="18">18%</option>
                       	<option value="26">26%</option>
                        <option value="none">none</option>
                       </select>
                  </div>
                </div>
                
                
                 <div class="form-group">
                <label class="control-label col-md-3"> Total Amount  (with GST)</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="AMOUNT_GST" required size="16" type="number" >
                   
                  </div>
                </div>
                
                
                <div class="form-group">
                         <label for="sel1" class="control-label col-md-3">Waranty (In Year)</label>
                  <div class="col-md-3 col-xs-11">
                       <select class="form-control" name="WARANTY" required="required">
                       	<option value="" selected disabled>Please select</option>
                       	<option value="1">1</option>
                       	<option value="2">2</option>
                       	<option value="3">3</option>
                        <option value="none">none</option>
                       </select>
                  </div>
                </div>
              
                
                
                
                <br>
                <h1>Documents Section</h1><br>
                
                 <div class="form-group">
                 <label class="control-label col-md-3">AdharCard</label>
                  <div class="col-md-3 col-xs-11">
                   <input  name="ADHARCARD"   size="19" type="checkbox" >
                   
                   
                  </div>
                </div>
                
                <div class="form-group">
                 <label class="control-label col-md-3">Pancard</label>
                  <div class="col-md-3 col-xs-11">
                   <input  name="PANCARD"    size="19" type="checkbox" >
                   
                  </div>
                </div>
                <div class="form-group">
                 <label class="control-label col-md-3">Electricity Bill</label>
                  <div class="col-md-3 col-xs-11">
                   <input  name="ELECTRICITY_BILL"   size="19" type="checkbox" >
                   
                  </div>
                </div>
                <div class="form-group">
                 <label class="control-label col-md-3">Tax Receipts</label>
                  <div class="col-md-3 col-xs-11">
                   <input  name="TAX_RECEIPTS"   size="19" type="checkbox" >
                   
                  </div>
                </div>
                
                <div class="form-group">
                 <label class="control-label col-md-3">Room Agreement Paper</label>
                  <div class="col-md-3 col-xs-11">
                   <input  name="ROOM_AGREEMENT_PAPER"   size="19" type="checkbox" >
                   
                  </div>
                </div>
                
                <div class="form-group">
                 <label class="control-label col-md-3">Curremt Gas Receipts</label>
                  <div class="col-md-3 col-xs-11">
                   <input  name="CURRENT_GAS_RECEIPTS"   size="19" type="checkbox" >
                   
                  </div>
                </div>
                
                <div class="form-group">
                 <label class="control-label col-md-3">11 Month Agreement</label>
                  <div class="col-md-3 col-xs-11">
                   <input  name="MONTH_AGREEMENT"   size="19" type="checkbox" >
                   
                  </div>
                </div>
               
               
               <br>
                <h1>Payment Section</h1><br>
              
               <div class="form-group">
                <label class="control-label col-md-3">Price</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="PRICE" required size="16" type="number" >
                   
                  </div>
                </div>
                 
                 <div class="form-group">
                <label class="control-label col-md-3">Down Payment Amount</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="DP_AMOUNT" required size="16" type="number" >
                   
                  </div>
                </div>
                
                <div class="form-group">
                <label class="control-label col-md-3">Balance Ammount</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="BALANCE_AMOUNT" required size="16" type="number" >
                   
                  </div>
                </div>
                
                 <div class="form-group">
                <label class="control-label col-md-3">EMI Ammount</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="EMI_AMMOUNT" required size="16" type="number" >
                   
                  </div>
                </div>
                
                 <div class="form-group">
                <label class="control-label col-md-3">EMI Date</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="EMI_DATE" required size="16" type="date" >
                   
                  </div>
                </div>
                
                <br>
                <h1>Bank Details Section</h1><br>
                
           		<div class="form-group">
                <label class="control-label col-md-3">Bank Name</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="BANK_NAME" required size="16" type="text" >
                   
                  </div>
                </div>
                
                <div class="form-group">
                <label class="control-label col-md-3">Branch</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="BRANCH" required size="16" type="text" >
                   
                  </div>
                </div>
                
                 <div class="form-group">
                <label class="control-label col-md-3">Cheque No</label>
                  <div class="col-md-3 col-xs-11">
                <input class="form-control form-control-inline input-medium " name="CHEQUE_NO" required size="16" type="text" >
                   
                  </div>
                </div>
                
                
                
                
                
                <!----Buttons-----> 
                 <div class="form-group">                  
                 	<div class="col-md-2 col-xs-55">  </div>                          
                   <div class="col-md-3 col-xs-55 " >
                    <input class="btn btn-danger form-control " name="save" type="submit" value="save" required>
                   
                  </div>
                </div>
                
                
                
                
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
        
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    
<?php

      if(isset($_POST['save']))
      {
         include_once('database.php');
		 $DATE = $_post['DATE'];
		 $CUSTMERE_NAME = $_post['CUSTMERE_NAME'];
		 $PRESENT_ADDRESS = $_post['PRESENT_ADDRESS'];
		 $NATIVE_ADDRESS = $_post['NATIVE_ADDRESS'];
		 $CONTCAT_NUMBER = $_post['CONTACT_NUMBER'];
		 $REFERENCE_NUMBER = $_post['REFRENCE_NUMBER'];
		 $EMAIL_ID = $_post['EAMAIL_ID'];
		 $PAN_NUMBER = $_post['PAN_NUMBER'];
		 $ADHAR_NUMBER = $_post['ADHAR_NUMBER'];
		 $DOB = $_post['DOB'];
		 $INVOICE_NUMBER = $_post['INVOICE_NUMBER'];
		 $DOG = $_post['DOG'];
		 $HSN_SAC = $_post['HSN_SAC'];
		 $QUNTITY = $_post['QUNTITY'];
		 $AMOUNT_NO_GST = $_post['AMOUNT_NO_GST'];
		 $GST = $_post['GST'];
		 $AMOUNT_GST = $_post['AMOUNT_GST'];
		 $WARANTY = $_post['WARANTY'];
		 $ADHARCARD = $_post['ADHARCARD'];
		 $PANCARD = $_post['PANCARD'];
		 $ELECTRICITY_BILL = $_post['ELECTRICITY_BILL'];
		 $TAX_RECEIPTS = $_post['TAX_RECEIPTS'];
		 $ROOM_AGREEMENT_PAPER = $_post['ROOM_AGREEMENT_PAPER'];
		 $CURRENT_GAS_RECEIPTS = $_post['CURRENT_GAS_RECEIPTS'];
		 $MONTH_AGREEMENT = $_post['MONTH_AGREEMENT'];
		 $PRICE = $_post['PRICE'];
		 $DP_AMOUNT = $_post['DP_AMOUNT'];
		 $BALANCE_AMOUNT = $_post['BALANCE_AMOUNT'];
		 $EMI_AMOUNT = $_post['EMI_AMOUNT'];
		 $EMI_DATE = $_post['EMI_DATE'];
		 $BANK_NAME = $_post['BANK_NAME'];
		 $BRANCH = $_post['BRANCH'];
		 $CHEQUE_NO = $_post['CHEQUE_NO'];
		 
		 
         
         $sql = "insert into tv_stock(PRODUCT_NAME,TYPE,MODEL_NUMBER,HN_NUMBER,SERIAL_NUMBER,PURCHASE_AMOUNT) values('$PRODUCT_NAME','$TYPE','$MODEL_NUMBER','$HN_NUMBER','$SERIAL_NUMBER','$PURCHASE_AMOUNT') ";

         $query = mysqli_query($conn, $sql);

         if($query)
         {
            ?>
            <script type="text/javascript">
                 alert('Response Recorded Successfully');
                 window.location="tv_addform.php";
            </script>
            <?php
         }
         else
         {
           ?>
            <script type="text/javascript">
                 alert('Oops! something went wrong ');
                 window.location="tv_addform.php";
            </script>
             
             <?php 
         }
      } 
?>

  
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

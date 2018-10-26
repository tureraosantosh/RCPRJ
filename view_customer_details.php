<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
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
      <a href="index.html" class="logo"><b>Rc_<span>Electronic</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
       
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
        	<li><a  class="logout" href="lock_screen.html">Lock Screen</a></li>
          <li><a class="logout" href="login.html">Logout</a></li>
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
          <p class="centered"><a href="profile.html"><img src="img/logo-designtext=RC+Electronics (1).png" class="img-circle" width="80"></a></p>
          <h5 class="centered">Chandrakant Mhatre</h5>
          <li class="mt">
            <a href="Dashbord.html">
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
               <li><a href="Tv Add.html">T.V</a></li>
              <li><a href="Refrigetor add.html">Refrigerator</a></li>
              <li><a href="Invertor Add.html">Inverter</a></li>
              <li><a href="washing add.html">Washing Machine</a></li>
              <li><a href="Mobile Add.html">Mobiles</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Purchase</span>
              </a>
            <ul class="sub">
              
              <li><a href="gallery.html">Gallery</a></li>
             
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>Billing</span>
              </a>
            <ul class="sub">
              
              
              <li><a href="invoice.html">Invoice</a></li>
             
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
<div class="container-fluid">
<div class="container-fluid">
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;Customer Details</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
            	
                
    
       <table id="example" class="table table-striped table-bordered" style="width:100%">

        <thead>
            <tr>
                <th>Date</th>
                <th>Custmer Name</th>                
                <th>Present Address</th>
                <th>Native Address</th>
                <th>Contact Number</th>
                <th>Reference Number</th>
                <th>EMail Id</th>
                <th>PAN Number</th>
                <th>Adhar Number</th>
                <th>DOB(date of birth)</th>
                <th>Invoice Number</th>
                <th>DOG(discription of goods</th>
                <th>HSN_SAC</th>
                <th>Quntity</th>
                <th>Amount_without_GST</th>
                <th>GST RATE</th>
                <th>Amount_with_GST</th>
                <th>Waranty</th>
                <th>Adharcard</th>
                <th>Pancard</th>
                <th>Electricity Bill</th>
                <th>Tax Receipts</th>
                <th>Room Agreement paper</th>
            	<th>Current Gas Receipts</th>
                <th>11 month Agreement</th>
                <th>Price</th>
                <th>Deposite Amount</th>
                <th>Balance Amount</th>
                <th>EMI Amount</th>
                <th>EMI Date</th>
                <th>Bank Name</th>
                <th>Branch</th>
                <th>Cheque Number</th>
            </tr>
        </thead>


    <?php 

          include_once('database.php');

          $sql = "select * from TV_STOCK";

          $result = mysqli_query($conn,$sql);

        
             while ($row = mysqli_fetch_array($result)) {
              ?>


                   <tbody>
            
                        <tr>
                            <td><?php echo $row['PRODUCT_NAME']; ?>  </td>
                            <td> <?php echo $row['TYPE']; ?>  </td>
                            <td> <?php echo $row['MODEL_NUMBER']; ?>  </td>
                            <td> <?php echo $row['HN_NUMBER']; ?>  </td>
                            <td> <?php echo $row['SERIAL_NUMBER']; ?>  </td>
                            <td> <?php echo $row['PURCHASE_AMOUNT']; ?>   </td>
                        </tr>
                    </tbody>
       
    <?php
          }

    ?>

      
      </table>
      
      
          
      
      
            </div>
          </div>
        </div>

          <!-- page end-->
        </div>
        <!-- /row -->
       
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
 
</div>

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
  
  <script>
  	$(document).ready(function() {
    $('#example').DataTable();
} );
  </script>

</body>

</html>

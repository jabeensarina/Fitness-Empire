<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Fitness Empire</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- bootstrap-wysiwyg -->
  <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
  <!-- Select2 -->
  <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
  <!-- Switchery -->
  <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
  <!-- starrr -->
  <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
  <!-- bootstrap-daterangepicker -->
  <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
  <link href="../build/css/custom.css" rel="stylesheet">
</head>
<?php

include 'connection.php';
$id = "";
$cell_no = "";
$slip_no = "";
$name = "";
$date = "";
$membership_no = "";
$period = "";
$to = "";
$m_gym = "";
$ruppess = "";
$sales_tax = "";
$m_training = "";
$rupess = "";
$tot_amount = "";
$m_class = "";
$rps = "";
$balance_amount = "";
$registration_fee = "";
$rps_no = "";
$sales_tax = "";
$sitting = "";
$rups = "";
$trainer = "";


$slip_no = isset($_GET['slip_no']) ? $_GET['slip_no'] : '';
$upd_id = "SELECT * FROM `monthly_fee` WHERE `slip_no` = '$slip_no'";
$result = mysqli_query($conn, $upd_id);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {

    $slip_no = $row["slip_no"];
    $cell_no = $row["cell_no"];
    $name = $row["name"];
    $date = $row["date"];
    $membership_no = $row["membership_no"];
    $period = $row["period"];
    $to = $row["to"];

    $ruppess = $row["ruppess"];
    $sales_tax = $row["sales_tax"];

    $rupess =  $row["rupess"];
    $tot_amount =  $row["tot_amount"];

    $rps =    $row["rps"];
    $paid_amount = $row["paid_amount"];

    $registration_fee =  $row["registration_fee"];
    $rps_no =   $row["rps_no"];
    $balance_amount = $row["balance_amount"];

    $sitting =  $row["sitting"];
    $rups =   $row["rups"];
    $trainer =  $row["trainer"];

    $m_train  = $row["month_training"];
    $m_training = explode(",", $m_train);
    // print_r($m_training);


    $mnth_gym  = $row["month_gym"];
    $m_gym = explode(",", $mnth_gym);
    // print_r($m_gym);


    $mnth_class  = $row["month_class"];
    $m_class = explode(",", $mnth_class);
    // print_r($m_class);
         
  
  }
}
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "admin");
if (isset($_POST['update'])) {

  error_reporting(E_ERROR | E_PARSE);
  // $id=$_POST['id'];
  $cell_no = $_POST['cellno'];
  $name = $_POST['name'];
  $date = $_POST['date'];
  $membership_no = $_POST['mem_no'];
  $period = $_POST['period'];
  $to = $_POST['text'];
  // $slip_no= $_POST['slip_no'];


  $ruppess = $_POST['rs'];
  $sales_tax = $_POST['sales_tax'];


  $rupess = $_POST['rupees'];
  $tot_amount = $_POST['total'];

  $rps = $_POST['rpps'];
  $paid_amount = $_POST['paid-amount'];

  $registration_fee = $_POST['reg_fees'];
  $rps_no = $_POST['rps_no'];
  $balance_amount = $_POST['balance_number'];
  $sitting = $_POST['textt'];
  $rups = $_POST['numb_rs'];
  $trainer = $_POST['trainer_name'];

  $checkbox1 = $_POST['checka'];
  $m_gym = implode(",", $checkbox1);

  $checkbox2 = ($_POST['checkb']);
  $m_training = implode(",", $checkbox2);

  $checkbox3 = $_POST['checkc'];
  $m_class = implode(",", $checkbox3);
  // print_r ($m_class);



  echo $cell_no . " " . $name . " " . $date . " " . $membership_no . " " . $period . " " . $to . " " . $slip_no . " " . $m_gym . " " . $ruppess . " " . $sales_tax . " " . $m_training . " " . $rupess . " " . $tot_amount . " " . $m_class . " " . $rps . " " . $paid_amount . " " . $registration_fee . " " . $rps_no . " " . $balance_amount . " " . $sitting . " " . $rups . " " . $trainer;

  $sql = "UPDATE `monthly_fee` SET `cell_no`='$cell_no',`name`='$name',`date`='$date',`membership_no`='$membership_no',`period`='$period',`to`='$to',`slip_no`=$slip_no,`month_gym`='$m_gym', `ruppess`='$ruppess',`sales_tax`='$sales_tax',`month_training`='$m_training',`rupess`='$rupess',`tot_amount`='$tot_amount',`month_class`='$m_class',`rps`='$rps',`paid_amount`='$paid_amount',`registration_fee`='$registration_fee',`rps_no`='$rps_no',`balance_amount`='$balance_amount',`sitting`='$sitting',`rups`='$rups',`trainer`='$trainer' WHERE `slip_no`='$slip_no'";
  


  $id = "";
  $cell_no = "";
  $slip_no = "";
  $name = "";
  $date = "";
  $membership_no = "";
  $period = "";
  $to = "";
  $m_gym = "";
  $ruppess = "";
  $sales_tax = "";
  $m_training = "";
  $rupess = "";
  $tot_amount = "";
  $m_class = "";
  $rps = "";
  $balance_amount = "";
  $registration_fee = "";
  $rps_no = "";
  $sales_tax = "";
  $sitting = "";
  $rups = "";
  $trainer = "";
  if (mysqli_query($conn, $sql)) {
  } else {
    echo "Record can't Inserted";
  }
}


?>


<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><img src="images/fitnest_empire.png" alt="..." width="130px" height="60px" ></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <!-- <img src="images/img.jpg" alt="..." class="img-circle profile_img"> -->
            </div>
            <!-- <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div> -->
          </div>
          <!-- /menu profile quick info -->

          <br />
           <!-- sidebar menu -->
           <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <!-- <h3>General</h3> -->
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="index.html">Dashboard</a></li>

                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Package <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="add_package.php">Add Package </a></li>


                  </ul>
                </li>
                <li><a><i class="fa fa-file-text"></i> Admission Form <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="addmission_form.php">Admission Form</a></li>
                    <li><a href="view_admission_form.php">View Admission Form </a></li>
                    
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Monthly Fees<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">


                    <li><a href="monthly_fee.php"> Monthly Fees Collection</a></li>
                    
                  </ul>
                </li>
                <li><a><i class="fa fa-users"></i> Trainer<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="add_trainer.php">Add Trainer</a></li>
                    <li><a href="view_trainer.php">View Trainer</a></li>

                  </ul>
                </li>
                <li><a><i class="fa fa-user"></i> Employee<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="add_employee.php">Add Employee </a></li>
               

                  </ul>
                </li>
                <li><a><i class="fa fa-money"></i>Expense<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="cash_in.php">Cash In</a> </a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-file"></i>Report<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="expenses.php">Expenses</a> </a></li>
                    <li><a href="fees_collection.php">Fees Collection</a></a></li>

                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->
          
          <!-- /menu footer buttons -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  Logout
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">

                  <a class="dropdown-item" href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
              </li>

            </ul>
            </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->
      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Update Monthly Fees Collection:</h3>

            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <div class="clearfix"></div>
               
                </div>
                <div class="col-md-12 col-sm-12 text-center ">
                <img classs="img " src="images/fitnest_empire.png " width="auto" height="200"> 
              </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
                  <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Prv.Slip No:</label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" readonly="readonly" type="number" name="slip_no" value="<?php echo $slip_no; ?>" />
                        <input class="form-control" hidden type="number" name="slip_no" value="<?php echo $slip_no; ?>" />
                      </div>
                    </div>

                    <div class="item form-group">
                      <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Cell No#</label>
                      <div class="col-md-6 col-sm-6 ">

                        <input id="search" class="form-control" type="cell_no" name="cellno" maxlength="11" value="<?php echo $cell_no; ?>" onkeypress='return restrictAlphabets(event)' />

                      </div>
                      <!-- <div class="col-md-2  ">
                        <input type="submit" name="search" class="btn btn-primary" value="Search" placeholder="Search" />
                      </div> -->
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="name" id="txtName" class="form-control " name="name" value="<?php echo $name; ?>" />
                      </div>
                    </div>
                    <div class="item form-group">
                      <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
                      <div class="col-md-6 col-sm-6 ">
                        <input class="form-control" type="date" name="date" value="<?php echo $date; ?>">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Membership No.FE 786-
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="text" id="first-name" readonly="readonly" class="form-control " value="<?php echo $membership_no; ?>" />
                        <input type="text" id="first-name" hidden class="form-control " name="mem_no" value="<?php echo $membership_no; ?>" />
                      </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Period </label>
                      <div class="col-md-6 col-sm-6">
                        <div class="col-md-5">
                          <!-- <input class="form-control" type="period" name="period" value="<?php echo $period; ?>" -->
                         
                          <?php 
                          $months=["January","Feburary","March","April","May","June","July","August","September","October","November","December"];
                          ?>
                          <select  name="period" class="form-control" value="<?php echo $period;?>"  >
                          <option value="">Choose your option </option>
                          <?php for($i=0;$i < count($months);$i++){ ?>
                            <option value=<?php echo $months[$i]; ?> <?php if(strcmp($months[$i],trim($period)) == 0){ echo "selected"; } ?>> <?php echo $months[$i]; ?></option>  
                          <?php } ?>

                        </select>
                        
                        
                        </div>
                        <label class="col-form-label col-md-1 col-sm-1 label-align">To</label>
                        <div class="col-md-5">
                       <?php
                          $month=["January","Feburary","March","April","May","June","July","August","September","October","November","December"];
                          ?>
                          <select name="text" class="form-control"  >
                          <option value="">Choose your option </option>
                          <?php for($i=0;$i < count($month);$i++){ ?>
                            <option value=<?php echo $month[$i]; ?> <?php if(strcmp($month[$i],trim($to)) == 0){ echo "selected"; } ?>> <?php echo $month[$i]; ?></option>  
                          <?php } ?>
                        </select>
                        </div>
                      </div>
                    </div>


                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Month-Gym:</label>
                      <label class="col-form-label label-align">1</label>
                      <div class="col-md-3 col-sm-3">
                        <div class="col-md-2 pt-2">


                          <input class="form-check-inline" type="checkbox" name="checka[]" value="1" <?php if (in_array("1", $m_gym)) { echo "checked";}  ?> />

                        </div>
                        <label class="col-form-label col-md-1 col-sm-1 label-align">3</label>
                        <div class="col-md-2 pt-2">
                          <input class="form-check-inline" type="checkbox" name="checka[]" value="3" <?php if (in_array("3", $m_gym)) {echo "checked"; } ?> />
                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align">Rs:</label>
                          <div class="col-md-8">
                            <input class="form-control" type="number_rs" name="rs" value="<?php echo $ruppess; ?>" onkeypress='return restrictAlphabets(event)'>
                          </div>
                          <div class="field item form-group">
                            <label class="col-form-label col-md-6 col-sm-6 label-align">Sales Tax:Rs </label>
                            <div class="col-md-10 ">
                              <input class="form-control" type="number" name="sales_tax" value="<?php echo $sales_tax; ?>" onkeypress='return restrictAlphabets(event)'> 
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align"> Month-Training:</label>
                      <label class="col-form-label label-align">1</label>
                      <div class="col-md-3 col-sm-3">
                        <div class="col-md-2 pt-2">

                          <input class="form-check-inline" type="checkbox" name="checkb[]" value="1" <?php if (in_array("1", $m_training)) {echo "checked"; }?> />
                        </div>
                        <label class="col-form-label col-md-1 col-sm-1 label-align">3</label>
                        <div class="col-md-2 pt-2">
                          <input class="form-check-inline" type="checkbox" name="checkb[]" value="3" <?php if (in_array("3", $m_training)) {  echo "checked"; } ?> />

                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align">Rs:</label>
                          <div class="col-md-8 ">
                            <input class="form-control" type="rs_number" name="rupees" value="<?php echo $rupess; ?>" onkeypress='return restrictAlphabets(event)'>
                          </div>
                          <div class="field item form-group">
                            <label class="col-form-label col-md-7 col-sm-7 label-align">Total-Amount:Rs </label>
                            <div class="col-md-8 ">
                              <input class="form-control" type="tot_number" name="total" value="<?php echo $tot_amount; ?>" onkeypress='return restrictAlphabets(event)'>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align"> Month-Fitness Class:</label>
                      <label class="col-form-label label-align">1</label>
                      <div class="col-md-3 col-sm-3">
                        <div class="col-md-2 pt-2">
                          <input class="form-check-inline" type="checkbox" name="checkc[]" value="1" <?php if (in_array("1", $m_class)) { echo "checked"; } ?> />
                        </div>
                        <label class="col-form-label col-md-1 col-sm-1 label-align">3</label>
                        <div class="col-md-2 pt-2">
                          <input class="form-check-inline" type="checkbox" name="checkc[]" value="3" <?php if (in_array("3", $m_class)) { echo "checked";}  ?> />
                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align">Rs:</label>
                          <div class="col-md-8">
                            <input class="form-control" type="no_rpps" name="rpps" value="<?php echo $rps; ?>" onkeypress='return restrictAlphabets(event)'/>
                          </div>

                          <div class="field item form-group">
                            <label class="col-form-label col-md-7 col-sm-7 label-align">Paid-Amount:Rs </label>
                            <div class="col-md-8 ">
                              <input class="form-control" type="paid_number" name="paid-amount" value="<?php echo $paid_amount; ?>" onkeypress='return restrictAlphabets(event)' />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Registration Fees:</label>
                      <div class="col-md-4 col-sm-4">
                        <div class="col-md-4">
                          <input class="form-control" type="numm" name="reg_fees" value="<?php echo $registration_fee; ?>" onkeypress='return restrictAlphabets(event)' />
                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-2 col-sm-2 label-align">Rs:</label>
                          <div class="col-md-6">
                            <input class="form-control" type="rs" name="rps_no" value="<?php echo $rps_no; ?>" onkeypress='return restrictAlphabets(event)'/>
                          </div>
                          <div class="field item form-group">
                            <label class="col-form-label col-md-7 col-sm-7 label-align">Balance-Amount:Rs </label>
                            <div class="col-md-8 ">
                              <input class="form-control" type="balance_number" name="balance_number" value="<?php echo $balance_amount; ?>" onkeypress='return restrictAlphabets(event)' />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Sittings:Steam / Suana Bath</label>
                      <div class="col-md-4 col-sm-4">
                        <div class="col-md-4">
                          <input id="txtName" class="form-control" type="text" name="textt" value="<?php echo $sitting; ?>" />
                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-2 col-sm-2 label-align">Rs:</label>
                          <div class="col-md-6">
                            <input class="form-control" type="numb_rs" name="numb_rs" value="<?php echo $rups; ?>" onkeypress='return restrictAlphabets(event)'/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Trainer Name:</label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="name" name="trainer_name" value="<?php echo $trainer; ?>">
                      </div>
                    </div>
                    <br>
                      <div class="col-md-6 col-sm-6 offset-md-3">
                      <button type="submit" class="btn btn-primary no-print" name="update" value="submit" onclick="window.print();"> Update /Print</button>
                      <button type="submit"  class="btn btn-success no-print" name="update" value="submit">Update</button>
                      </div>
                  </form>
                  <div class="ln_solid"></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            <h2> Developed By iKode Studio</h2>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script>
      function GetTotal() {
        debugger;
        var price = $('#price').val();
        var discount = $('#discount').val();
        var total = $('#total').val();
        if (discount == "") {
          $('#total').val(price);

        } else {
          var dp = (discount / 100) * price;
          var discountedPrice = total - dp;
          $('#total').val(discountedPrice);
        }
      }
    </script>
<!-- <script>
var selected_option = $('#myselect option:selected');
</script> -->

<script>
 $('#txtName').keypress(function (e) {
        var regex = new RegExp("^[a-zA-Z \s]+$");
        var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
        if (regex.test(str)) {
            return true;
        }
        else
        {
        e.preventDefault();
        // alert('Please Enter Alphabate');
        return false;
        }
    });
 </script>
  <script type="text/javascript">
         /*code: 48-57 Numbers*/
         function restrictAlphabets(e) {
             var x = e.which || e.keycode;
             if ((x >= 48 && x <= 57))
                 return true;
             else
                 return false;
         }
      </script>
</body>
</html>
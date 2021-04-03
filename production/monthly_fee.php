<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Fitnest Empire</title>

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
$mem_name = "";
$cell_no = "";
$cell_non = "";
$name_trainer = "";
$id = "";

$cell_no = " ";
$nam = " ";
$date = " ";
$membership_no = " ";
$period;
$to = " ";
// $slip_no = " ";
$m_gym = " ";
$ruppess = " ";
$sales_tax = " ";
$m_training = " ";
$rupess = " ";
$tot_amount = "";
$m_class = " ";
$rps = "";
$paid_amount = "";
$registration_fee = "";
$rps_no = "";
$balance_amount = "";
$sitting = "";
$rups = "";
$trainer = "";


if (isset($_POST['search_cell_no'])) {
  $cell_non = $_POST['cellno'];

  $sql = "SELECT * FROM `admission_form` WHERE `cell_no` = '$cell_non'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $cell_no = $row['cell_no'];
      $mem_name = $row['mem_name'];
      $name_trainer = $row['name_trainer'];
      $id = $row['id'];


      if (mysqli_query($conn, $sql)) {
      } else {
        echo "Record can't fetch";
      }
    }
  }
}
?>
<?php
include 'connection.php';

if (isset($_POST['submit'])) {
  // $id=$_POST['id'];
  $cell_no = $_POST['cellno'];
  $name = $_POST['name'];
  $date = $_POST['date'];
  $membership_no = $_POST['mem_no'];
  $period = $_POST['period'];
  $to = $_POST['text'];
  $slip_no = $_POST['slip_no'];


  // $m_gym = $_POST['checka[]'];
  $ruppess = $_POST['rs'];
  $sales_tax = $_POST['sales_tax'];

  // $m_training = $_POST['checkb[]'];
  $rupess = $_POST['rupees'];
  $tot_amount = $_POST['total'];

  // $m_class = $_POST['checkc[]'];
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

  $checkbox2 = $_POST['checkb'];
  $m_training = implode(",", $checkbox2);

  $checkbox3 = $_POST['checkc'];
  $m_class = implode(",", $checkbox3);

  echo $slip_no . " " .  $cell_no . " " . $name . " " . $date . " " . $membership_no . " " . $period . " " . $to . " " . $m_gym . " " . $ruppess . " " . $sales_tax . " " . $m_training . " " . $rupess . " " . $tot_amount . " " . $m_class . " " . $rps . " " . $paid_amount . " " . $registration_fee . " " . $rps_no . " " . $balance_amount . " " . $sitting . " " . $rups . " " . $trainer;

  $sql = "INSERT INTO `monthly_fee`(`slip_no` , `name`, `cell_no`, `date`, `membership_no`, `period`, `to`, `month_gym`, `ruppess`, `sales_tax`, `month_training`, `rupess`, `tot_amount`, `month_class`, `rps`, `paid_amount`, `registration_fee`, `rps_no`, `balance_amount`, `sitting`, `rups`,`trainer`) VALUES ('','$name','$cell_no','$date','$membership_no','$period','$to','$m_gym','$ruppess','$sales_tax','$m_training','$rupess','$tot_amount','$m_class','$rps','$paid_amount','$registration_fee','$rps','$balance_amount','$sitting','$rups','$trainer')";
  if (mysqli_query($conn, $sql)) {
  } else {
    echo "Record can't Inserted";
  }
  $cell_no = "";


}


?>

<?php

$sql = "SELECT `slip_no`  FROM `monthly_fee` order by `slip_no` ";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      // $slip_no_get=$row["MAX(`slip_no`)"]+1;
      $slip_no = $row['slip_no']+1;
      if (mysqli_query($conn, $sql)) {
      } else {
        echo "Record can't fetch";
      }
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
                    <li><a href="due_fees collection.php">Due Fees</a></a></li>
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
              <h3>Monthly Fee Collection:</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <div class="clearfix"></div>
                </div> <div class="col-md-12 col-sm-12 text-center ">
                <img classs="img " src="images/fitnest_empire.png " width="auto" height="200"> 
              </div>

                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Prv.Slip No:</label>
                      <div class="col-md-6 col-sm-6">
                        <input type="text" id="first-name" hidden  class="form-control" value="<?php echo $slip_no; ?>" />
                        <input type="text" id="first-name" class="form-control" readonly="readonly" name="slip_no"  value="<?php echo $slip_no; ?>"/>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label  class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Cell No#<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="cell_no" id="txtnumber" class="form-control" name="cellno" maxlength="12" value="<?php echo $cell_no; ?>" onkeypress='return restrictAlphabets(event)'  />
                      </div>
                      <div class="col-md-2  ">
                        <input type="submit" name="search_cell_no" class="btn btn-primary no-print" value="Search" placeholder="Search" />
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="name" id="txtName" class="form-control"  name="name" value="<?php echo $mem_name; ?>"  />
                      </div>
                    </div>
                    <div class="item form-group">
                      <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Date<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6 ">
                        <input class="form-control" id="date" type="date" name="date" >
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Membership No.FNC 786-
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <!-- <input type="mem_no" id="first-name"  class="form-control " name="mem_no"> -->
                        <input type="text" id="first-name" readonly="readonly" class="form-control " value="<?php echo $id; ?>" />
                        <input type="text" id="first-name" hidden class="form-control" name="mem_no" value="<?php echo $id; ?>" />
                      </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Period <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <div class="col-md-5">
                          <!-- <input class="form-control" id="period" type="period" name="period" /> -->
                          <select name="period" class="form-control" >
                          <option value="">Choose your Option </option>
                          <option value="January" > January</option>
                          <option value="Feburary">Feburary</option>
                          <option value="March"> March</option>
                          <option value="April" > April</option>
                          <option value="May" > May</option>
                          <option value="June">June</option>
                          <option value="July"> July</option>
                          <option value="August" > August</option>
                          <option value="September" > September</option>
                          <option value="October">October</option>
                          <option value="November"> November</option>
                          <option value="December" > December</option>
                       

                        </select>
                        </div>
                        <label class="col-form-label col-md-1 col-sm-1 label-align">To<span class="required">*</span></label>
                        <div class="col-md-5">
                          <!-- <input class="form-control" id="to" type="text" name="text" /> -->
                          <select name="text" class="form-control" >
                          <option value="">Choose your option </option>
                          <option value="January" > January</option>
                          <option value="Feburary">Feburary</option>
                          <option value="March"> March</option>
                          <option value="April" > April</option>
                          <option value="May" > May</option>
                          <option value="June">June</option>
                          <option value="July"> July</option>
                          <option value="August" >August</option>
                          <option value="September" >September</option>
                          <option value="October">October</option>
                          <option value="November"> November</option>
                          <option value="December" > December</option>
                        </select>
                        </div>
                      </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Month-Gym:<span class="required">*</span></label>
                      <div class="col-md-3 col-sm-3">
                        <div class="col-md-5">
                          <div class="form-check form-check-inline pt-2">
                            <input class="form-check-input" type="checkbox" name="checka[]" value="1">
                            <label class="form-check-label" for="month_gym">1</label>
                          </div>
                          <div class="form-check form-check-inline pt-2">
                            <input class="form-check-input" type="checkbox" name="checka[]" value="3">
                            <label class="form-check-label" for="month_gym">3</label>
                          </div>
                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align">Rs:<span class="required">*</span></label>
                          <div class="col-md-8">
                            <input class="form-control" type="number_rs" name="rs"  onkeypress='return restrictAlphabets(event)'/>
                          </div>
                          <div class="field item form-group">
                            <label class="col-form-label col-md-7 col-sm-7 label-align">Sales Tax:Rs </label>
                            <div class="col-md-10 ">
                              <input class="form-control"  name="sales_tax"  onkeypress='return restrictAlphabets(event)' />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align"> Month-Training:<span class="required">*</span></label>
                      <div class="col-md-3 col-sm-3">
                        <div class="col-md-5 ">
                          <div class="form-check form-check-inline pt-2">
                            <input class="form-check-input" type="checkbox" name="checkb[]" value="1">
                            <label class="form-check-label" for="month_training">1</label>
                          </div>
                          <div class="form-check form-check-inline pt-2">
                            <input class="form-check-input" type="checkbox" name="checkb[]" value="3">
                            <label class="form-check-label" for="month_training">3</label>
                          </div>
                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align">Rs:<span class="required">*</span></label>
                          <div class="col-md-8 ">
                            <input class="form-control" type="rs_number" name="rupees" onkeypress='return restrictAlphabets(event)'/>
                          </div>
                          <div class="field item form-group">
                            <label class="col-form-label col-md-7 col-sm-7 label-align">Total-Amount:Rs </label>
                            <div class="col-md-8 ">
                              <input class="form-control" type="tot_number" name="total" onkeypress='return restrictAlphabets(event)'/>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align"> Month-Fitness Class:<span class="required">*</span></label>
                      <div class="col-md-3 col-sm-3">
                        <div class="col-md-5 ">
                          <div class="form-check form-check-inline pt-2  ">
                            <input class="form-check-input" type="checkbox" name="checkc[]" value="1">
                            <label class="form-check-label" for="month_class">1</label>
                          </div>
                          <div class="form-check form-check-inline pt-2  ">
                            <input class="form-check-input" type="checkbox" name="checkc[]" value="3">
                            <label class="form-check-label" for="month_class">3</label>
                          </div>
                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align">Rs:<span class="required">*</span></label>
                          <div class="col-md-8">
                            <input class="form-control" type="no_rpps" name="rpps"  onkeypress='return restrictAlphabets(event)'/>
                          </div>
                          <div class="field item form-group">
                            <label class="col-form-label col-md-7 col-sm-7 label-align">Paid-Amount:Rs </label>
                            <div class="col-md-8 ">
                              <input class="form-control" type="paid_number" name="paid-amount" onkeypress='return restrictAlphabets(event)'/>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Registration Fees:<span class="required">*</span></label>
                      <div class="col-md-4 col-sm-4">
                        <div class="col-md-4">
                          <input class="form-control" type="numm" name="reg_fees" onkeypress='return restrictAlphabets(event)' />
                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-2 col-sm-2 label-align">Rs:<span class="required">*</span></label>
                          <div class="col-md-6">
                            <input class="form-control" type="rs" name="rps_no" onkeypress='return restrictAlphabets(event)'/>
                          </div>
                          <div class="field item form-group">
                            <label class="col-form-label col-md-7 col-sm-7 label-align">Balance-Amount:Rs</label>
                            <div class="col-md-8 ">
                              <input class="form-control" type="balance_number" name="balance_number"  onkeypress='return restrictAlphabets(event)'/>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Sittings:Steam / Suana Bath<span class="required">*</span></label>
                      <div class="col-md-4 col-sm-4">
                        <div class="col-md-4">
                          <input id="txtName" class="form-control" type="text" name="textt" />
                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-2 col-sm-2 label-align">Rs:<span class="required">*</span></label>
                          <div class="col-md-6">
                            <input class="form-control" type="numb_rs" name="numb_rs"  onkeypress='return restrictAlphabets(event)'/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Trainer Name:<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="name" name="trainer_name" value="<?php echo $name_trainer; ?>">
                      </div>
                    </div>
                  
                    <!-- <div class="item form-group"> --><br>
                      <div class="col-md-6 col-sm-6 offset-md-3">
                        <button type="submit" class="btn btn-primary no-print " name="submit" value="submit" onclick="window.print();"> Submit /Print</button>
                        <button type="submit" class="btn btn-success no-print" name="submit" value="submit">Submit</button>
                      </div>
                    <!-- </div> -->
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
    <!-- <script type="text/javascript" src="js/script.js"></script> -->
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
 <script>
$(function () {

$('#txtnumber').keydown(function (e) {
 var key = e.charCode || e.keyCode || 0;
 $text = $(this); 
 {

  if (key !== 8 && key !== 9) {
     if ($text.val().length === 4) {
         $text.val($text.val() + '-');
     }
     if ($text.val().length === 7) {
        //  $text.val($text.val() + '-');
     }

 }

 return (key == 8 || key == 9 || key == 46 || (key >= 48 && key <= 57) || (key >= 96 && key <= 105));
}})
});
</script>
</html>
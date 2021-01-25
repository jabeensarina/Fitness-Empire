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

  <!-- Modal bootstrap -->
  <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
  
</head>
<?php
$conn = mysqli_connect("localhost", "root", "", "admin");
$mem_name = "";
$cell_no = "";
$cell_non = "";
$trainer_name = "";
$id = "";

$cell_no=" ";
$nam= " ";
$date=" ";
$membership_no=" ";
$period;
 $to=" ";
$slip_no =" ";
$m_gym =" ";
$ruppess=" ";
$sales_tax=" " ;
$m_training=" ";
$rupess =" " ;
$tot_amount="";
 $m_class =" ";
 $rps ="";
 $paid_amount ="";
 $registration_fee="";
 $rps_no ="";
 $balance_amount="";
$sitting ="";
 $rups ="";
 $trainer="";






if (isset($_POST['search'])) {
  $cell_non = $_POST['cellno'];

  // $search_value = $_POST['search'];
  // $cell_no=$_POST['id'];

  $sql = "SELECT * FROM `personal_info` WHERE `cell_no` = '$cell_non'";
  // $sql = "SELECT * FROM `personal_info` WHERE cell_no = '%($search_value)%' ";

  // echo $id;
  // echo $mem_name;

  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $cell_no = $row['cell_no'];
      $mem_name = $row['mem_name'];
      $trainer_name = $row['trainer_name'];
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
$conn = mysqli_connect("localhost", "root", "", "admin");

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
  
  $checkbox1=$_POST['checka'];  
$m_gym= implode(",",$checkbox1);

$checkbox2=$_POST['checkb'];  
$m_training= implode(",",$checkbox2);

$checkbox3=$_POST['checkc'];  
$m_class= implode(",",$checkbox3);

  echo $cell_no . " " . $name . " " . $date . " " . $membership_no . " " . $period . " " . $to . " " . $slip_no . " " . $m_gym . " " . $ruppess . " " . $sales_tax . " " . $m_training . " " . $rupess . " " . $tot_amount . " " . $m_class . " " . $rps . " " . $paid_amount . " " . $registration_fee . " " . $rps_no . " " . $balance_amount . " " . $sitting . " " . $rups . " " . $trainer;

  $sql="INSERT INTO `monthly_fee`(`id`,`name`, `cell_no`, `date`, `membership_no`, `period`, `to`, `slip_no`, `month_gym`, `ruppess`, `sales_tax`, `month_training`, `rupess`, `tot_amount`, `month_class`, `rps`, `paid_amount`, `registration_fee`, `rps_no`, `balance_amount`, `sitting`, `rups`,`trainer`) VALUES ('','$name','$cell_no','$date','$membership_no','$period','$to','$slip_no','$m_gym','$ruppess','$sales_tax','$m_training','$rupess','$tot_amount','$m_class','$rps','$paid_amount','$registration_fee','$rps','$balance_amount','$sitting','$rups','$trainer')";
  if(mysqli_query($conn,$sql)){
  	}
  else{
  	echo "Record can't Inserted";
  	}
  $cell_no = "";

  // echo'
  //   <script>
  //  location.href="print_form.php";
  //  </script>
  //   ';
}
?>




<?php
#MAX membership_no got here

$sql = "SELECT MAX(`slip_no`) FROM `monthly_fee`";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $slip_no_get = $row["MAX(`slip_no`)"] + 1;


?>
<?php
  }
}


?>


<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <!-- <a href="index.html" class="site_title"><img src="images/cage.png" alt="..." width="120px" height="98px" ></a> -->
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
                    <li><a href="addmission_form.php">Admission Form</a></li>
                    <li><a href="view_admission_form.php">View Admission Form </a></li>
                    <li><a href="update_admission_form.php">Update Admission Form </a></li>
                    <li><a href="monthly_fee.php"> Monthly Fee Collection</a></li>

                  </ul>
                </li>

                <li><a><i class="fa fa-users"></i> Trainer<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="add_trainer.php">Add Trainer</a></li>
                    <li><a href="view_trainer.php">View Trainer</a></li>

                  </ul>
                </li>
                <li><a><i class="fa fa-users"></i> Employee<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                  <li><a href="add_employee.php">Add Employee </a></li>
                    <!-- <li><a href="view_trainer.php">View Trainer</a></li> -->

                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i>Expense<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">

                    <li><a href="cash_in.php">Cash In</a> </a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i>Report<span class="fa fa-chevron-down"></span></a>
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
              <h3>Monthly Fees Collection:</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
                <div class="x_title">
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Prv.Slip No:</label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" readonly="readonly" type="number" name="slip_no" value="<?php echo $slip_no_get; ?>" />
                      </div>
                    </div>

                    <div class="item form-group">
                      <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Cell No#</label>
                      <div class="col-md-6 col-sm-6 ">

                        <input id="search" class="form-control" type="cell_no" name="cellno" maxlength="11" onkeypress='return restrictAlphabets(event)'  value="<?php echo $cell_no; ?>"   />

                      </div>
                      <div class="col-md-2  ">
                        <input type="submit" name="search" class="btn btn-primary" value="Search" placeholder="Search" />
                      </div>
                    </div>



                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <input type="name" id="first-name" class="form-control "onkeypress="return /[a-z]/i.test(event.key)" name="name" value="<?php echo $mem_name; ?>" />
                      </div>
                    </div>
                    <div class="item form-group">
                      <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
                      <div class="col-md-6 col-sm-6 ">
                        <input class="form-control" id="date" type="date" name="date">

                      </div>
                    </div>

                    <div class="item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Membership No.FE 786-
                      </label>
                      <div class="col-md-6 col-sm-6 ">
                        <!-- <input type="mem_no" id="first-name"  class="form-control " name="mem_no"> -->
                        <input type="text" id="first-name" readonly="readonly" class="form-control " value="<?php echo $id; ?>" />
                        <input type="text" id="first-name" hidden class="form-control " name="mem_no" value="<?php echo $id; ?>" />

                      </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Period </label>
                      <div class="col-md-6 col-sm-6">
                        <div class="col-md-5">
                          <input class="form-control" id="period" type="period" name="period" onkeypress="return /[a-z]/i.test(event.key)">
                        </div>
                        <label class="col-form-label col-md-1 col-sm-1 label-align">To</label>
                        <div class="col-md-5">
                          <input class="form-control" id="to" type="text" name="text" onkeypress="return /[a-z]/i.test(event.key)">
                        </div>
                      </div>
                    </div>


                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Month-Gym:</label>
                      <!-- <div class="col-form-label label-align">1</div> -->
                      <div class="col-md-3 col-sm-3">
                        <!-- <div class="col-md-2 pt-2"> -->

                          <!-- <label>Month-Gym<input type="checkbox" name = "checka" 
                            value=" 1"> 1</label> -->
                          <!-- <label><input type="checkbox" name = "checkaa" 
                            value=" 3">3</label> -->

  <div class="col-md-5">
<div class="form-check form-check-inline pt-2">
  <input class="form-check-input" type="checkbox"  name="checka[]" value="1">
  <label class="form-check-label" for="month_gym">1</label>
</div>
<div class="form-check form-check-inline pt-2">
  <input class="form-check-input" type="checkbox"  name="checka[]" value="2">
  <label class="form-check-label" for="month_gym" >2</label>
</div>
</div>


                          <!-- <input class="form-check-inline" type="checkbox" name="checka" value="1" />
                        </div>
                        <div class="col-form-label col-md-1 col-sm-1 label-align">3</div>
                        <div class="col-md-2 pt-2">
                          <input class="form-check-inline" type="checkbox" name="checka" value="3" />
                        </div> -->
                        <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align">Rs:</label>
                          <div class="col-md-8">
                            <input class="form-control" type="number_rs" name="rs" onkeypress='return restrictAlphabets(event)'>
                          </div>
                          <div class="field item form-group">
                            <label class="col-form-label col-md-7 col-sm-7 label-align">Sales Tax:Rs </label>
                            <div class="col-md-8 ">
                              <input class="form-control" type="numberr" name="sales_tax" onkeypress='return restrictAlphabets(event)'/>
                            </div>
                          <!-- <div class="field item form-group">
                            <label class="col-form-label col-md-7 col-sm-7 label-align">Sales Tax:Rs </label>
                            <div class="col-md-8 ">
                              <input class="form-control" type="numberr" name="sales_tax"/>
                            </div> -->
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align"> Month-Training:</label>
                      <!-- <div class="col-form-label label-align">1</div> -->
                      <div class="col-md-3 col-sm-3">
                        <!-- <div class="col-md-2 pt-2">
                          <input class="form-check-inline" type="checkbox" name="checkb" value="1" />
                        </div> -->
                        <!-- <input type="checkbox" id="vehicle1" name="checkb" value="1">
  <label class="col-form-label col-md-3 col-sm-3  label-align"> Month-Training:</label><br> -->

  <div class="col-md-5 ">
<div class="form-check form-check-inline pt-2">
  <input class="form-check-input" type="checkbox"  name="checkb[]" value="1">
  <label class="form-check-label" for="month_training">1</label>
</div>
<div class="form-check form-check-inline pt-2">
  <input class="form-check-input" type="checkbox" name="checkb[]" value="2">
  <label class="form-check-label" for="month_training" >2</label>
</div>
</div>



                        <!-- <div class="col-form-label col-md-1 col-sm-1 label-align">3</div>
                        <div class="col-md-2 pt-2">
                          <input class="form-check-inline" type="checkbox" name="checkb" value="3" />
                        </div> -->
                        <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align">Rs:</label>
                          <div class="col-md-8 ">
                            <input class="form-control" type="rs_number" name="rupees" onkeypress='return restrictAlphabets(event)'>
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
                      <label class="col-form-label col-md-3 col-sm-3  label-align"> Month-Fitness Class:</label>
                      <!-- <div class="col-form-label label-align">1</div> -->
                      <div class="col-md-3 col-sm-3">
                        <!-- <div class="col-md-2 pt-2">
                          <input class="form-check-inline" type="checkbox" for="month_class" name="checkc" value="1" />
                        </div> -->
<!-- 
   <div class="form-check">
  <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault">
  <label class="form-check-label" for="flexCheckDefault">
    Default checkbox
  </label>
</div> -->
<div class="col-md-5 ">
<div class="form-check form-check-inline pt-2  ">
  <input class="form-check-input" type="checkbox"  name="checkc[]" value="1">
  <label class="form-check-label" for="month_class">1</label>
</div>
<div class="form-check form-check-inline pt-2  ">
  <input class="form-check-input" type="checkbox"  name="checkc[]" value="2">
  <label class="form-check-label" for="month_class" >2</label>
</div>
</div>


                        <!-- 
                              <div class="form-check-inline col-md-2 pt-2">
                         <label class="form-check-label">1
                          <input type="checkbox" class="form-check-input" value="1" name="checkc">month fitness class
                           </label>
                            </div> -->

                        <!-- <div class="form-check-inline pt-2">
                         <label class="form-check-label">
                          <input type="checkbox" class="form-check-input" value="">Option 2
                           </label>
                            </div> -->



                        <!-- <div class="col-form-label col-md-1 col-sm-1 label-align">3</div>
                        <div class="col-md-2 pt-2">
                          <input class="form-check-inline" type="checkbox" name="checkc" value="3" />
                        </div> -->
                        <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align">Rs:</label>
                          <div class="col-md-8">
                            <input class="form-control" type="no_rpps" name="rpps" onkeypress='return restrictAlphabets(event)'>
                          </div>

                          <div class="field item form-group">
                            <label class="col-form-label col-md-7 col-sm-7 label-align">Paid-Amount:Rs </label>
                            <div class="col-md-8 ">
                              <input class="form-control" type="paid_number" name="paid-amount" onkeypress='return restrictAlphabets(event)'>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Registration Fees:</label>
                      <div class="col-md-4 col-sm-4">
                        <div class="col-md-4">
                          <input class="form-control" type="numm" name="reg_fees" onkeypress='return restrictAlphabets(event)'>
                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-2 col-sm-2 label-align">Rs:</label>
                          <div class="col-md-6">
                            <input class="form-control" type="rs" name="rps_no" onkeypress='return restrictAlphabets(event)'>
                          </div>
                          <div class="field item form-group">
                            <label class="col-form-label col-md-7 col-sm-7 label-align">Balance-Amount:Rs </label>
                            <div class="col-md-8 ">
                              <input class="form-control" type="balance_number" name="balance_number" onkeypress='return restrictAlphabets(event)'>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Sittings:Steam / Suana Bath</label>
                      <div class="col-md-4 col-sm-4">
                        <div class="col-md-4">
                          <input class="form-control" type="text" name="textt" onkeypress="return /[a-z]/i.test(event.key)">
                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-2 col-sm-2 label-align">Rs:</label>
                          <div class="col-md-6">
                            <input class="form-control" type="numb_rs" name="numb_rs" onkeypress='return restrictAlphabets(event)'>
                          </div>
                        </div>
                      </div>
                    </div>



                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Trainer Name:</label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" type="name" name="trainer_name" value="<?php echo $trainer_name; ?>">
                      </div>
                    </div>





                    <div class="ln_solid"></div>
                    <div class="item form-group">
                      <div class="col-md-6 col-sm-6 offset-md-3">
                     

             
                  <button type="submit" class="btn btn-primary " name="submit" value="submit" onclick="window.print();" > Submit /Print</button>
                  <!-- <button  class="btn btn-secondary" onclick="window.print();"><i class="fa fa-print"></i> Print</button> -->
                        <!-- <button type="submit" class="btn btn-success" name="submit" value="submit" >Submit</button> -->
                        <button type="submit" class="btn btn-success" name="submit" value="submit">Submit</button>
                      </div>
                    </div>

                  </form>
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

    <!-- <script>
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


      <script> 
      // document.getElementById('demo-form2').onsubmit = function () {
      //     return window.confirm('Are you sure want to print?');
      //    window.print();

      //        window.close();
      //   }
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
       <script>
      // function target_popup(form) {
      //   window.open('', 'formpopup', 'width=400,height=400,resizeable,scrollbars');
      //   form.target = 'formpopup';
      // }
      // $(document).ready(function() {
      //     $('#myform').submit(function() {
      //         window.open('', 'formpopup', 'width=400,height=400,resizeable,scrollbars');
      //         this.target = 'formpopup';
      //     });
      // });
     </script> 







    <!-- <script>
/  var userPreference;
 
		// if (confirm("Do you want to print?") == true) {
		// 	userPreference = "Data print successfully!";
		// } else {
		// 	userPreference = "Save Canceled!";
		// }

		// document.getElementById("print").innerHTML = userPreference; 





function printPage(id)
{
   var html="<html>";
   html+= document.getElementById(id).innerHTML;

   html+="</html>";

   var printWin = window.open('','','left=0,top=0,width=1,height=1,toolbar=0,scrollbars=0,status  =0');
   printWin.document.write(html);
   printWin.document.close();
   printWin.focus();
   printWin.print();
   printWin.close();
}
</script>

<script>
function PrintElem(elem)
    {
        Popup($(elem).html());
    }

    function Popup(data) 
    {
        var mywindow = window.open('', 'my div', 'height=400,width=600');
        mywindow.document.write('<html><head><title>my div</title>');
        /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
        mywindow.document.write('</head><body >');
        mywindow.document.write(data);
        mywindow.document.write('</body></html>');

        mywindow.print();
        mywindow.close();

        return true;
    }

</script> -->



</html>
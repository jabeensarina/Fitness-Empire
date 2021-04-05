<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title> Fitnest Empire</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../vendors/font-awesome/css/font-awesome.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

  <!-- Custom Theme Style -->

  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>



<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
          <a href="index.html" class="site_title"><img src="images/fitnest_empire.png" alt="..." width="130px" height="60px" ></a>

          </div>

          <div class="clearfix"></div>
          <div class="profile clearfix">
            <div class="profile_pic">
            </div>
          </div>
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
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12 ">
              <div class="x_panel">
              <h3>Due Fee:</h3>
                <div class="x_title">
                  <div class="clearfix"></div>
               
                </div>
                <!-- <div class="col-md-12 col-sm-12 text-center ">
                <img classs="img " src="images/fitnest_empire.png " width="auto" height="200"> 
              </div> -->
                <div class="x_content">
                  <br />
  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
    <div class="col-md-12 col-sm-12">
    
        <div class="container pt-4">
          <div class="table-responsive" >
            <!-- <table id="table" class="table table-striped jambo_table " > -->
            <table id="table" class="table table-hover " >

                       <thead class="thead-dark">
                        <tr class="text-center">
                        <th class="text-center">Priv.Slip No</th>
                          <th class="text-center">Cell No</th>
                          <th class="text-center">Name</th>
                          <th class="text-center">Date</th>
                          <th class="text-center">Membership No.FNC 786</th>
                          <th class="text-center">Period</th>
                          <th class="text-center">To</th>
                          <th class="text-center">Month Gym</th>
                          <th class="text-center"> Rs:</th>
                          <th class="text-center">Sales Tax:Rs</th>

                          <th class="text-center">Month Training</th>
                          <th class="text-center">Rs:</th>
                          <th class="text-center">Total Amount Rs:</th>

                          <th class="text-center">Month-Fitness Class:</th>
                          <th class="text-center">Rs:</th>
                          <th class="text-center">Paid Amount Rs:</th>

                          <th class="text-center">Registration Fees</th>
                          <th class="text-center">Rs:</th>
                          <th class="text-center">Balance-Amount:Rs</th>

                          <th class="text-center">Sittings:Steam / Suana Bath</th>
                          <th class="text-center">Rs:</th>
                          <th class="text-center">Trainer Name:</th>
                          <th class="text-center">View:</th>
                          <th class="text-center">Delete:</th>
                        </tr>
                        <tbody class="text-center">
                         
 <?php
include 'connection.php';
// $isExpired = 'false';
$slip_no="";
// $sql = "SELECT * FROM `monthly_fee`";
// public function notification(){
  // $query=$this->db->query
//   ('SELECT *, DATE_SUB(deadline, INTERVAL 1 MONTH) as alert_now 
//             FROM notif WHERE curdate() = DATE_SUB(deadline, INTERVAL 1 MONTH)');
//   return $result=$query;
// }
// $sql = "SELECT * FROM `monthly_fee` WHERE date <= DATE_ADD(CURDATE(), INTERVAL 15 DAY) AND date >= DATE_ADD(CURDATE(), INTERVAL -15 DAY)";
$sql = "SELECT * FROM `monthly_fee` WHERE date <= DATE_ADD(CURDATE(), INTERVAL 1 MONTH) AND date >= DATE_ADD(CURDATE(), INTERVAL -1 MONTH) ORDER BY `date`";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $date =$row["date"];                             
    echo '
<tr> 
<td> ' . $row["slip_no"] . ' </td>
<td> ' . $row["cell_no"] . ' </td>
<td> ' . $row["name"] . ' </td>
<td> ' . $row["date"] . ' </td>
<td> ' . $row["membership_no"] . ' </td>
<td> ' . $row["period"] . ' </td>
<td> ' . $row["to"] . ' </td>

<td> ' . $row["month_gym"] . ' </td>
<td> ' . $row["ruppess"] . ' </td>
<td> ' . $row["sales_tax"] . ' </td>

<td> ' . $row["month_training"] . ' </td>
<td> ' . $row["rupess"] . ' </td>
<td> ' . $row["tot_amount"] . ' </td>

<td> ' . $row["month_class"] . ' </td>
<td> ' . $row["rps"] . ' </td>
<td> ' . $row["paid_amount"] . ' </td>

<td> ' . $row["registration_fee"] . ' </td>
<td> ' . $row["rps_no"] . ' </td>
<td> ' . $row["balance_amount"] . ' </td>

<td> ' . $row["sitting"] . ' </td>
<td> ' . $row["rups"] . ' </td>
<td> ' . $row["trainer"] . ' </td>

<td>  <a  href="pay_monthly_fee.php?slip_no='. $row['slip_no'] . '" class="btn btn-success btn-sm" >
<i class="fa fa-eye">View
</i> </a> </td> 
<td> <button  class="btn btn-danger btn-sm"  type="button" value="Delete" onclick="deleteRow(this)"> <i class="fa fa-close"> </i>Ignore
</button> 
</td>
</tr>
';
  }
}
?>
                      </thead>
                      </tbody>
                    </table>
                   </div>
                  </div>
                </div>
                   </div>
                   </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
      </form>
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
  <!-- iCheck -->
  <script src="../vendors/iCheck/icheck.min.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>

</body>
</html>
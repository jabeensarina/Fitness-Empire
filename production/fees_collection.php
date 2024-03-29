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
      <?php
      include 'connection.php';
      if (isset($_POST['del_fee'])) {
        $slip_no = $_POST['del_fee'];


        $del = "DELETE FROM `monthly_fee` WHERE `slip_no` = '$slip_no'";


        // echo $iden;

        if (mysqli_query($conn, $del)) {
        } else {
          echo "  Record Can't Delete";
        }
      }
      ?>


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
              <h3>Fee Collection:</h3>
                <div class="x_title">
                  <div class="clearfix"></div>
               
                </div>
                <div class="x_content">
                  <br />
  <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
    <div class="col-md-12 col-sm-12">
        <div class="page-title ">
                      <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search ">
                  <div class="input-group ">
                    <input type="text" id="txtnumber" maxlength="12" name="cell_no_search" onkeyup="myFunction()"  onkeypress="addHyphen()" class="form-control" placeholder="Search ...">
                    <span class="input-group-btn">
                      <button type="submit" name="search" class="btn btn-default bg-dark"><i class="fa fa-search "></i></button>
                    </span>
                  </div>
                </div>
              </div>
    </div>
        <div class="container pt-4">
          <div class="table-responsive">
            <!-- <table id="table" class="table table-striped jambo_table " > -->
            <table id="table" class="table table-hover " >
              <thead class="thead-dark">
                        <tr class="text-center">
                        <th class="text-center">Priv.Slip No</th>
                          <th class="text-center">Cell No</th>
                          <th class="text-center">Name</th>
                          <th class="text-center">Date</th>
                          <th class="text-center">Membership No.FE 786</th>
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
                          <th class="text-center">Edit:</th>
                          <th class="text-center">Delete:</th>
                        </tr>
                        <tbody class="text-center">
                        <?php
                    
                    include 'connection.php';
                    $sql = "SELECT * FROM `monthly_fee`";
                    
                    $result = mysqli_query($conn, $sql);
                     if (mysqli_num_rows($result)>0) {
                      while ($row = mysqli_fetch_assoc($result)) {
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
<td>  <a  href="update_fees_collection.php?slip_no='. $row['slip_no'] . '" class="btn btn-success btn-sm" >
<i class="fa fa-pencil">Edit
</i> </a> </td> 

<td> <button type="submit" class="btn btn-danger btn-sm"  name="del_fee" value="' . $row['slip_no'] . '"><i class="fa fa-trash-o"> </i>Delete
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
  
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("txtnumber");
  filter = input.value.toUpperCase();
  table = document.getElementById("table");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

  </script>
  <!-- <script>id="tbNum"
	function addHyphen (element) {
    	let ele = document.getElementById(element.id);
        ele = ele.value.split('-').join('');    // Remove dash (-) if mistakenly entered.

        let finalVal = ele.match(/.{1,4}/g).join('-');
        document.getElementById(element.id).value = finalVal;
    }
</script> -->
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
</body>

</html>
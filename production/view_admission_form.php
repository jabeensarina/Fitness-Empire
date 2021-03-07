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

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>
<?php
include 'connection.php';

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
      if (isset($_POST['del_form_id'])) {
        $iden = $_POST['del_form_id'];


        $del = "DELETE FROM `admission_form` WHERE `id` = '$iden'";



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
              <h3>View Admission Form:</h3>
            </div>
          </div>

          <div class="clearfix"></div>

          <form method="post">
            <div class="row">
              <div class="x_panel">
                <div class="x_content">
                  <div class="col-md-12 col-sm-12  text-center">
                    <ul class="pagination pagination-split">

                    </ul>
                  </div>

                  <div class="clearfix"></div>


                  <?php
                  $sql = "SELECT * FROM `admission_form`";
                  $result = mysqli_query($conn, $sql);
                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {



                      $m_name = $row['mem_name'];
                      $re_address = $row['res_address'];
                      $res_no = $row['res_phone_no'];
                      $cell_no = $row['cell_no'];
                      $date_birth = $row['date_birth'];
                      $nic = $row['nic_no'];
                      $email = $row['email'];
                      $occupation = $row['occupation'];
                      $sel_package = $row["select_package"];
                      $trainer = $row["trainer"];
                      $name_trainer = $row["name_trainer"];
                      $price = $row["price"];
                      $discount = $row["discount"];
                      $total_price = $row["total_price"];


                  ?>

                      <div class="col-md-4 col-sm-4  profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief text-center"><b>Member</b></h4>
                            <div class="col-md-12 col-sm-8 mt-4 ">

                              <b><h6>Member Name:</b><?php echo $m_name; ?></h6>
                              <b><h6>Res.Address:</b><?php echo $re_address; ?></h6>
                              <b><h6>Res.Phone Number:</b><?php echo $res_no; ?></h6>
                              <b><h6>Cell Number:</b><?php echo  $cell_no; ?></h6>
                              <b><h6>Date Of Birth:</b><?php echo $date_birth; ?></h6>
                              <b><h6>C.N.I.C No# :</b><?php echo $nic; ?></h6>
                              <b><h6>E-Mail:</b><?php echo $email; ?></h6>
                              <b><h6>Occupation:</b><?php echo $occupation; ?></h6>
                              <b> <h6>Package:</b><?php echo $sel_package; ?></h6>
                              <b> <h6>Trainer:</b><?php echo $trainer; ?></h6>
                              <b> <h6>Trainer Name:</b><?php echo $name_trainer; ?></h6>
                              <b><h6>Price:</b><?php echo $price; ?></h6>
                              <b><h6>Discount:</b><?php echo $discount; ?></h6>
                              <b><h6>Total Price:</b><?php echo $total_price; ?></h6>
                              <ul class="list-unstyled">
                              </ul>
                            </div>
                            <div class="left col-md-4 col-sm-4 ">
                            </div>
                          </div>
                          <div class=" profile-bottom ">
                            <div class=" col-sm-6 emphasis">
                            </div>
                            <div class=" col-sm-8 emphasis ">
                            <a  href="update_admission_form.php?id=<?php echo $row['id']; ?>" class="btn btn-success btn-sm" >
                                <i class="fa fa-pencil">Edit
                                </i> </a> 
                              <button type="submit" class="btn btn-danger btn-sm" name="del_form_id" value="<?php echo $row['id']; ?>">
                                <i class="fa fa-trash-o"> </i>Delete
                              </button>
                    </div>
                          </div>
                        </div>
                      </div>

                  <?php

                    }
                  }
                  ?>

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

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>
</body>

</html>
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Fitness Empire</title>

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
 
  <?php
  include 'connection.php'; 
  if(isset($_POST['updid'])){
  $update=$_POST['updid'];

 $_SESSION["upid"]= $update;
  $upd_id="SELECT * FROM `monthly_fee` WHERE `id` = '$update'";
        $result=mysqli_query($conn,$upd_id);
        if(mysqli_num_rows($result)>0){
          while($row=mysqli_fetch_assoc($result)){
  
echo $update;
    //   // print $update_id;
    //  echo $update ['updid'];
 
    //  echo $row["id"]; 
   
   
  echo'
    <script>
   location.href="update_fees_collection.php";
   </script>
    ';
       
          }} 
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
										<li><a href="addmission_form.php">Admission Form</a></li>
                                       <li><a href="view_admission_form.php">View Admission Form  </a></li>
								  <li><a href="update_admission_form.php">Update Admission Form</a></li>
								  <li><a href="monthly_fee.php">  Monthly Fee Collection</a></li>
										
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
                    <li><a href="add_trainer.php">Add Employee </a></li>
                    <!-- <li><a href="view_trainer.php">View Trainer</a></li> -->
										
									</ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i>Expense<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
			                        <li><a href="cash_in.php">Cash In</a>  </a></li>	
									</ul>
								</li>
                                <li><a><i class="fa fa-bar-chart-o"></i>Report<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
			                       	 <li><a href="expenses.php">Expenses</a>  </a></li>
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
                   
                    <a class="dropdown-item"  href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
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
if(isset($_POST['delid'])){
  $iden=$_POST['delid'];

  
  $del="DELETE FROM `monthly_fee` WHERE `id` = '$iden'";
 
	
  echo $iden;
 
	if(mysqli_query($conn,$del)){

}

else{
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

              <div class="title_right">
               
                  <div class="input-group">
                   
                  
                    <span class="input-group-btn">
                 
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row" style="display: block;">
              <!-- <div class="col-md-6 col-sm-6  "> 
              <div class="x_panel">
                  <div class="x_title">
                  </div>
                </div>
              </div> -->
              
             

             

              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST">
              <div class="col-md-12 col-sm-12" >
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Fees Collection</h2>
                    <div class="clearfix"></div>
                  </div>
                  <!-- <div class="item form-group">
                      <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">id</label>
                      <div class="col-md-6 col-sm-6 ">
                        <input id="search" class="form-control" type="number" name="id" />
                        </div>
                        <div class="col-md-2  ">
                        <input type="submit" name="search"  class="btn btn-primary" value="Search" placeholder="Search" />
                        </div> -->

                        <!-- <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">To </label>
                      <div class="col-md-6 col-sm-6">
                        <div class="col-md-4">
                          <input class="form-control" id="search" type="date" name="to" />
                        </div>

                        <label class="col-form-label col-md-1 col-sm-1 label-align">From</label>
                        <div class="col-md-4">
                          <input  class="form-control" id="search" type="date" name="from">
                        </div>
                        <div class="col-md-2 ">
                        <input type="submit" name="search"  class="btn btn-primary" value="Search" placeholder="Search" />
                        </div>   
                      </div>
                    </div> -->

                  <!-- <div class="x_content">
                    <table class="table table-bordered" >
                      <thead>
                       -->
                      <div class="container pt-4">
                              <div class="table-responsive">
                                <table  id="table" class="table table-bordered">
                                <thead>

                        <tr>
                          <!-- <th class="text-center">Id</th> -->
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
           
<?php
                  
     include 'connection.php';                 
     $sql = "SELECT * FROM `monthly_fee`";

       $result=mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
        
              
             
     echo'
    <tr>
    <td> '.$row["slip_no"].' </td>
    <td> '.$row["cell_no"].' </td>
    <td> '.$row["name"].' </td>
    <td> '.$row["date"].' </td>
    <td> '.$row["membership_no"].' </td>
    <td> '.$row["period"].' </td>
    <td> '.$row["to"].' </td>
    
    <td> '.$row["month_gym"].' </td>
    <td> '.$row["ruppess"].' </td>
    <td> '.$row["sales_tax"].' </td>
    
    <td> '.$row["month_training"].' </td>
    <td> '.$row["rupess"].' </td>
    <td> '.$row["tot_amount"].' </td>
    
    <td> '.$row["month_class"].' </td>
    <td> '.$row["rps"].' </td>
    <td> '.$row["paid_amount"].' </td>
    
    <td> '.$row["registration_fee"].' </td>
    <td> '.$row["rps_no"].' </td>
    <td> '.$row["balance_amount"].' </td>
    
    <td> '.$row["sitting"].' </td>
    <td> '.$row["rups"].' </td>
    <td> '.$row["trainer"].' </td>
    <td>  <button type="submit" class="btn btn-success btn-sm" name="updid"  value= "'.$row['id'].'"><i class="fa fa-pencil">Edit </i></button> </td>
    <td> <button type="submit" class="btn btn-danger btn-sm"  name="delid" value="'.$row['id'].'"><i class="fa fa-trash-o"> </i>Delete
  </button> 
     </td>
</tr>
';
            }}
?>
  

                      </thead>
                      <tbody>
        
                    </table>
                 
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
          <h2>  Developed By iKode Studio</h2>
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

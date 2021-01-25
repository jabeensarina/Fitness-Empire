<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cage </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
              <a href="index.html" class="site_title"><img src="images/cage.png" alt="..." width="120px" height="98px" ></a>
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
								<li><a><i class="fa fa-edit"></i> Packages <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="pkge_form.php">Add Packages </a></li>
                    <li><a href="view_package.php">View Packages  </a></li>
                    <li><a href="update_package.php">Update Package</a></li>
										
									</ul>
								</li>
								
								<li><a><i class="fa fa-users"></i> About Users<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="tables.php">All Users</a></li>
									
									</ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i>Meal<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="add_meal.php"> Add Meal</a></li>
										<li><a href="view_meal.php">View Meal</a>  </a></li>
								
										
									</ul>
								</li>
                <li><a><i class="fa fa-clone"></i> WorkOut<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="workouts.php">Workout</a></li>
                  
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


             

             


              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View Meal</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  <table class="table table-bordered" >
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Months</th>
                          <th>Week</th>
                          <th>Days</th>
                          <th>Meal</th>
                          <th>Select Recipe</th>
                          <th>Prep_time</th>
                          <th>Recipe Images </th>
                          <th>Ingredients</th>
                          <th>Quantity</th>
                          <th>Unit</th>
                          <th>Preparation</th>
                        </tr>
                        
                        
                        <?php
     include 'connection.php';
          $sql="SELECT * FROM `meal`";
       $result=mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_assoc($result)){
           echo'
         <tr>
       <td> '.$row["id"].' </td>
    <td> '.$row["month"].' </td>
   <td> '.$row["week"].' </td>
   <td> '.$row["day"].' </td>
    <td> '.$row["meal"].' </td>
    <td> '.$row["select_recipe"].' </td>
    <td> '.$row["prep_time"].' </td>
    <td> '.$row["move"].' </td>
    <td> '.$row["ingredients"].' </td>
    <td> '.$row["quantity"].' </td>
    <td> '.$row["unit"].' </td>
    <td> '.$row["preparation"].' </td>
    </tr>
    ';
    
     }
    }
     ?>
                      </thead>
                      <tbody>
                        
                    </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
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

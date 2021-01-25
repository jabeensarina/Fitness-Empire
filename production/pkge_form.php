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
</head>

<?php


$conn=mysqli_connect("localhost","root","","admin");
if(isset($_POST['submit'])){
$add_package=$_POST['name'];
$description=$_POST['text'];
$price=$_POST['price'];
$discount=$_POST['discount'];
$total_price=$_POST['number'];


echo $add_package." ".$description." ".$price." ".$discount." ".$total_price;

$sql="INSERT INTO `package` (`add_package`,`description`,`price`,`discount`,`total_price`) VALUES ('$add_package','$description','$price','$discount','$total_price')";


if(mysqli_query($conn,$sql)){
	}

else{
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
										<li><a href="addmission_form.php">Admission Form</a></li>
                                       <li><a href="view_package.php">View Packages  </a></li>
								  <li><a href="update_package.php">Update Package</a></li>
								  <li><a href="card.php">Package Card</a></li>
										
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
                           <li><a href="workouts.php">Workouts</a></li>
               
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
							<h3>Add Package:</h3>
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
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Add Package 
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="name" id="first-name" class="form-control " name="name">
											</div>
										</div>

										
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Description</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea id="middle-name" class="form-control" type="text" name="text" rows="4" cols="50" >
													</textarea>
												
											</div>
										</div>

									<div class="item form-group">
										<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> Price   </label>
											<div class="col-md-6 col-sm-6 ">
							   <input id="price" onchange="GetTotal()" class="form-control" type="number " name="price">
							  </div>
							</div>
								
							   <div class="item form-group">
								<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> Discount%   </label>
									<div class="col-md-6 col-sm-6 ">
                         <input id="discount" onchange="GetTotal()" class="form-control" type="number " name="discount">
									</div>
								</div>

								<div class="item form-group">
									<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> Total price </label>
										<div class="col-md-6 col-sm-6 " >
										<input readonly id="total" class="form-control" type="text " name="number">
							   <br><br>
							  
							  	
							</div>
							</div>
							<!-- <div class="x_content">

    <span class="section">Add Trainer</span>
    <div class="field item form-group">
      <label class="col-form-label col-md-3 col-sm-3  label-align">Trainer Name</label>
      <div class="col-md-6 col-sm-6">
        <input class="form-control" name="name" type="name"  />
      </div>
    </div>


    <div class="field item form-group">
      <label class="col-form-label col-md-3 col-sm-3  label-align">Trainer Fees</label>
      <div class="col-md-6 col-sm-6">
        <input  class="form-control" type="fees" name="fees"   />

      </div>
    </div> -->

							
							
     
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<input onclick="clearfields()"  class="btn btn-primary" type="reset" value="Reset"/>
												
				
  
             
												
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
 			function GetTotal()
			 {
				 debugger;
				var price = $('#price').val();
				var discount=$('#discount').val();
				var total=$('#total').val();
				if (discount =="")
 					{
 					$('#total').val(price);
 					
					 }else
					 {
 					var dp=  (discount/100)*price;
					var discountedPrice= total-dp;
                     $('#total').val(discountedPrice);
					 }
			 }				
 							  
 							 
 							
 							
 </script>
</body></html>
          
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
</head>

<?php


$conn = mysqli_connect("localhost", "root", "", "admin");
if (isset($_POST['submit'])) {
	$trainer_name = $_POST['name'];
	$trainer_fees = $_POST['fees'];
	
	echo $trainer_name . " " . $trainer_fees;

	$sql = "INSERT INTO `add_trainer` (`trainer_name`,`trainer_fees`) VALUES ('$trainer_name','$trainer_fees')";


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
							<h3>Add Trainer:</h3>
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
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Trainer Name
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="name" id="txtName" class="form-control " name="name" required="required" />
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Trainer Fees
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="number" id="first-name" class="form-control " name="fees" required="required"/>
											</div>
										</div>
										<br>
										<div class="col-md-6 col-sm-6 offset-md-3">
												<input onclick="clearfields()" class="btn btn-primary" type="reset" value="Reset" />
												<button type="submit" class="btn btn-success" name="submit" value="submit">Submit</button>
											</div>
									
										<!-- <div class="item form-group">
										
										</div>  -->

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

</body>

</html>
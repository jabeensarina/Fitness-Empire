<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>HOSPITAL! | </title>

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
$iden="";
$conn=mysqli_connect("localhost","root","","mydata");
if(isset($_POST['submit'])){
$invoice=$_POST['inv'];	
$file=$_POST['fileno'];
$pname=$_POST['uname'];
$contact=$_POST['contact'];
$category=$_POST['type'];
$dr_appointment=$_POST['doc'];
 echo $invoice." ".$file." ".$pname." ".$category." ".$contact." ".$dr_appointment;

$sql="INSERT INTO `patient`(`id`, `invoice`, `fileno`, `name`, `contact`, `category`, `dr_apointment`) VALUES ('','$invoice','$file','$pname','$contact','$category','$dr_appointment')";

if(mysqli_query($conn,$sql)){
	echo'
	<script> location.href="services.php"</script>
	';
	
 }
 
else {
		 echo "Can't insert Recorded";
	 }
 } 
?>

<?php
$sql="SELECT * FROM `doctor`";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
	$iden=$row["id"]; ?>	


<option><?php echo $row["name"]; ?></option>

<?php
 }
  }
?>

<?php
#MAX file and invoice got here

$sql="SELECT MAX(`invoice`),MAX(`fileno`) FROM `patient`";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
while ($row=mysqli_fetch_assoc($result)){
	$inv_get=$row["MAX(`invoice`)"]+1;
	$file_no_get=$row["MAX(`fileno`)"]+1;


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
						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Hospital!</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="images/img.jpg" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2>Admin</h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="index.html">Dashboard</a></li>
										
									</ul>
								</li>
								<li><a><i class="fa fa-edit"></i>Hospital MAnagement<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="form.php">Add User</a></li>
										<li><a href="contacts.php">Remove User</a></li>
										</li>
										
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i>Doctors Info <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="general_elements.html">Add Doctor</a></li>
										<li><a href="media_gallery.html">Remove Doctor</a></li>
										<li><a href="typography.html">Doctor Salary</a></li>
										
									</ul>
								</li>
								<li><a><i class="fa fa-table"></i> Our Services<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="tables.html">Services Include </a></li>
										<li><a href="tables_dynamic.html">Old Services</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-bar-chart-o"></i> About Patient <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="chartjs.html">Add patient</a></li>
										<li><a href="chartjs2.html">View Patient</a></li>
										<li><a href="morisjs.html">Patient Discharge</a></li>
										
									</ul>
								</li>
								<li><a><i class="fa fa-clone"></i>Book An Appointment <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="fixed_sidebar.html">Online Appointment</a></li>
										<li><a href="fixed_footer.html">Appointment Via Phone</a></li>
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
						<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
						</a>
					</div>
					<!-- /menu footer buttons -->
				</div>
			</div>

			
            
           
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Hospital!</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="images/img.jpg" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Welcome,</span>
							<h2>Admin</h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="index.html">Dashboard</a></li>
										
									</ul>
								</li>
								<li><a><i class="fa fa-edit"></i>Hospital MAnagement<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="form.php">Add User</a></li>
										<li><a href="contacts.php">Remove User</a></li>
										</li>
										
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i>Doctors Info <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="general_elements.html">Add Doctor</a></li>
										<li><a href="media_gallery.html">Remove Doctor</a></li>
										<li><a href="typography.html">Doctor Salary</a></li>
										
									</ul>
								</li>
								<li><a><i class="fa fa-table"></i> Management Services<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="tables.html">New Services </a></li>
										<li><a href="tables_dynamic.html">Old Services</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-bar-chart-o"></i> About Patient <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="chartjs.html">Add patient</a></li>
										<li><a href="chartjs2.html">View Patient</a></li>
										<li><a href="morisjs.html">Patient Discharge</a></li>
										
									</ul>
								</li>
								<li><a><i class="fa fa-clone"></i>Book An Appointment <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="fixed_sidebar.html">Online Appointment</a></li>
										<li><a href="fixed_footer.html">Appointment Via Phone</a></li>
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
						<a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
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
									<img src="images/img.jpg" alt="">John Doe
								</a>
								<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="javascript:;"> Profile</a>
									<a class="dropdown-item" href="javascript:;">
										<span class="badge bg-red pull-right">50%</span>
										<span>Settings</span>
									</a>
									<a class="dropdown-item" href="javascript:;">Help</a>
									<a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
								</div>
							</li>

							<li role="presentation" class="nav-item dropdown open">
								<a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-envelope-o"></i>
									<span class="badge bg-green">6</span>
								</a>
								<ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>John Smith</span>
												<span class="time">3 mins ago</span>
											</span>
											<span class="message">
												Film festivals used to be do-or-die moments for movie makers. They were where...
											</span>
										</a>
									</li>
									<li class="nav-item">
										<div class="text-center">
											<a class="dropdown-item">
												<strong>See All Alerts</strong>
												<i class="fa fa-angle-right"></i>
											</a>
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
							<h3>Form Elements</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Form Design <small>different form elements</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" >
                                    
                                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Invoice
											</label>
											<div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="first-name" disabled class="form-control " value="<?php echo $inv_get;  ?>" />
            <input type="text" id="first-name" hidden class="form-control " name="inv" value="<?php echo $inv_get;  ?>"/>

											</div>
										</div>
                                    
                                    
                                  
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">File No.
											</label>
											<div class="col-md-6 col-sm-6 ">
			<input type="text" id="first-name" disabled class="form-control " value="<?php echo $file_no_get;  ?>"/>
   <input type="text" id="first-name" hidden class="form-control " name="fileno" value="<?php echo $file_no_get;  ?>"/>

											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Patient Name <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="last-name" name="uname" required class="form-control" >
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Contact No.</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="contact">
											</div>
										</div>
                     <!---------Have File No.------------>   
                     <div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Have File No.</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="middle-name" class="form-control" type="text" name="hfile">
                                                
<input type="button" class="btn btn-primary" value="Exist">                                            
                                                
                                                
											</div>
										</div>
 
                             <!-------- File No. End---------->  
                              
                                                    
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Patient Category</label>
											<div class="col-md-6 col-sm-6 ">
												<div id="gender" class="btn-group" data-toggle="buttons">
													<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
														<input type="radio" name="type" value="orthopaedic" class="join-btn"> Orthopaedic 
													</label>
													<label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
														<input type="radio" name="type" value="neurologist" class="join-btn"> Neurologist</label>
                                 <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
														<input type="radio" name="type" value="psychologist" class="join-btn">Psychologist</label>                       
													
												
											</div>
                                            </div></div>
                                            
<div class="item form-group">
   <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Doctor Appointment</label>
<div class="col-md-6 col-sm-6 ">
<select name="doc" class="form-control">

<?php
$sql="SELECT * FROM `doctor`";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
	$iden=$row["id"]; ?>	


<option><?php echo "Dr.".ucfirst($row["name"]); ?></option>

<?php
 }
  }

?>
                                        
</select>
</div></div>                                                
                                                
											</div>
										</div>
                                            
                                            
                                            <div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-8col-sm-8 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button class="btn btn-primary" type="reset">Reset</button>
												<button input type="submit" class="btn btn-success" name="submit" value="submit"/>Submit</button>
                                                </form>
										
                                             </div>
											</div>
                                       
                                        
                                        
									 <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Patient History</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>    
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-md-12">
                            <div class="card-box table-responsive">
                   
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th>Invoice</th>
                          <th>File No.</th>
                          <th>Patient Name</th>
                          <th>Category</th>
                          <th>Copy Slip</th>
                        </tr>
                      </thead>


                      <tbody>
 <?php
//"SELECT MAX(`invoice`),MAX(`fileno`),MAX(`name`),MAX(`category`) FROM `patient`";
$sql="SELECT * FROM `patient` ORDER By Id DESC";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
while ($row=mysqli_fetch_assoc($result)){
echo '
 <tr>
 <td>'.$row["invoice"].'</td>
 <td>'.$row["fileno"].'</td>
 <td>'.$row["name"].'</td>
 <td>'.$row["category"].'</td> 
 
 <form action="invoice.php">
<td><button type="submit" class="btn btn-danger"><i class="fa fa-copy"></i></button></td>
</tr>

</form>
'; 
}}
   ?>                 


                      
                      
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

					
			<!-- /page content -->

			<!-- footer content -->
			<footer>
				<div class="pull-right">
					Gentelella - Bootstrap Admin Template by <a href="https://facebook.com">Colorlib</a>
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

</body></html>

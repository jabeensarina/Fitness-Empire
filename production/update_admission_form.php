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

$id= "";
$m_name = "";
$re_address= "";
$res_no= "";
$cell_no= "";
$date_birth="";
$nic= "";
$email= "";
$occupation="";
 $sel_package="";
 $trainer= "";
 $trainer_name="";
 $pricee="";
 $discountt="";
 $total_price="";

$update = $_SESSION["upid"];
// echo $update;
 $upd_id="SELECT * FROM `personal_info` WHERE `id` = '$update'";
 $result=mysqli_query($conn,$upd_id);
 if(mysqli_num_rows($result)>0){
   while($row=mysqli_fetch_assoc($result)){



$id= $row["id"]; 
$m_name = $row["mem_name"];
$re_address = $row["res_address"];
$res_no = $row["res_phone_no"];
$cell_no = $row["cell_no"];
$date_birth = $row["date_birth"];
$nic = $row["nic_no"];
$email = $row["email"];
$occupation = $row["occupation"];
$sel_package =$row["select_package"];
$trainer = $row["trainer"];
$trainer_name = $row["trainer_name"];
$pricee = $row["price"];
$discountt = $row["discount"];
$total_price = $row["total_price"];
   }}

?>


<?php

$add_package = "";
$price = "";
$discount = "";
$iden = "";

$conn=mysqli_connect("localhost","root","","admin");
if(isset($_POST['submit'])){
	$id = "";
    $m_name = $_POST['name'];
    $re_address = $_POST['address'];
    $res_no = $_POST['phone_no'];
    $cell_no = $_POST['cell_no'];
    $date_birth = $_POST['dt_birth'];
    $nic = $_POST['nic'];
    $email = $_POST['email'];
    $occupation = $_POST['occupation'];

    $sel_package = $_POST['select_pkge'];
    $trainer = $_POST['trainer'];
    $trainer_name = $_POST['select_trainer'];

    $pricee=$_POST['price'];
    $discountt = $_POST['discount'];
    $total_price = $_POST['number'];


	echo $m_name . " " . $re_address . " " . $res_no . " " . $cell_no . " " . $date_birth . " " . $nic . " " . $email . " " . $occupation . " " . $sel_package . " " . $trainer . " " . $trainer_name . " " . $pricee . " " . $discountt . " " . $total_price;

$sql="UPDATE `personal_info` SET `mem_name`='$m_name',`res_address`='$re_address',`res_phone_no`='$res_no',`cell_no`='$cell_no',`date_birth`='$date_birth',`nic_no`=$nic,`email`='$email', `occupation`='$occupation',`select_package`='$sel_package',`trainer`='$trainer',`trainer_name`='$trainer_name',`price`='$pricee',`discount`='$discountt',`total_price`='$total_price' WHERE `id`='$update'";

$id= "";
$m_name = "";
$re_address= "";
$res_no= "";
$cell_no= "";
$date_birth="";
$nic= "";
$email= "";
$occupation="";
 $sel_package="";
 $trainer= "";
 $trainer_name="";
 $pricee="";
 $discountt="";
 $total_price="";
if(mysqli_query($conn,$sql)){
	}

else{
	echo "Record can't Inserted";
	}
}


?>


<!-- <?php
$id = "";
$add_package = "";
$conn = mysqli_connect("localhost", "root", "", "admin");
$sql = "SELECT * FROM `package`";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $iden = $row["id"];
        // $price =$row["price"];
        //  echo $id=['id'];
        // $price = $row['price'];
        //   $discount =$row['discount'];

?>
<?php
    }
}

?> -->

<?php
$sql = "SELECT * FROM `add_trainer` ";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $iden = $row["id"];
        $trainer_fees = $row['trainer_fees'];

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
                                       <li><a href="view_admission_form.php">View Admission Form  </a></li>
								  <li><a href="update_admission_form.php">Update Admission Form </a></li>
								  <li><a href="monthly_fee.php"> 	 Monthly Fee Collection</a></li>
								  		
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
									<li><a href="cash_in.php">Cash In/Out</a>  </a></li>
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
	
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Update Admission Form</h3>
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
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Member Name<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="name" id="first-name" class="form-control " name="name" value= "<?php echo $m_name;?>" required="required">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Res.Address <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="address" id="first-name" class="form-control " name="address" value= "<?php echo $re_address;?>" required="required">
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Res.Phone Number </label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="phone_number" name="phone_no" value= "<?php echo $res_no;?>"/>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Cell Number <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" id="cell_no" type="cell_number" name="cell_no" maxlength="11" required="required" value= "<?php echo $cell_no;?>"/>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth. <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="birthday" name="dt_birth" class="date-picker form-control" placeholder="dd-mm-yyyy" type="dt_birth" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)" required="required" value= "<?php echo $date_birth;?>" />
                                    <!-- <script>
													function timeFunctionLong(input) {
														setTimeout(function() {
															input.type = 'text';
														}, 60000);
													}
												</script> -->
                                </div>
                            </div>

                            <div id='cnic' class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">C.N.I.C No# <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input class="form-control" id="cnic" type="number" name="nic" maxlength="13" required="required"  value= "<?php echo $nic;?>" />
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">E-Mail<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" name="email" class='email' type="email" type="text" required="required" value= "<?php echo $email;?>"/>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Occupation<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" class='optional' name="occupation" type="text" required="required" value= "<?php echo $occupation;?>" />
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Select Package
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select id="country" class="form-control" onchange="myPackage(this.value)" name="select_pkge" >
                                        <?php

                                        $sql = "SELECT * FROM `package`";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                // $iden = $row["id"];

                                        ?>

                                                <option value="<?php echo ($row["price"]); ?>"><?php echo ($row["add_package"]); ?></option>
                                             <!-- <input   <?php echo $sel_package;?>/> -->
                                        <?php
                                            }
                                        }

                                        ?>
                                    </select>
                                  
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align ">Trainer </label>
                                <div class="col-md-6 col-sm-6">
                                 
                                
                                    <div class="col-md-4 col-sm-4 pt-2">
                                        <label><input onchange="isTrainer(this.value)" type="radio" id="chkYes" name="trainer" value="with trainer" <?php if ($trainer == 'with trainer') { echo "checked"; } ?>/>With Trainer
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-sm-4 pt-2">
                                        <label><input onchange="isTrainer(this.value)" type="radio" id="chkNo" name="trainer" value="without trainer" <?php if ($trainer == 'without trainer')  { echo "checked"; } ?>/> Without Trainer
                                        </label> 
                                    </div>

                                </div>
                            </div>

                            <div id="dvTrainerNo" style="display: none">
                                <div id="trainer" class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align " for="first-name">Trainer's Name
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control" name="select_trainer"  >
                                            <?php
                                            $sql = "SELECT * FROM `add_trainer`";
                                            $result = mysqli_query($conn, $sql);
                                            if (mysqli_num_rows($result) > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $iden = $row["id"];
                                            ?>
                                                         <option> <?php echo ($row["trainer_name"]); ?>
                                                      </option>

                                            <?php

                                                }
                                            }

                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <script>
                                var price = 0;
                                var trainer;
                                var isPrice = 0;
                                var isDiscout = 0;
                                var isPackage = 0;
                                var myTrai = 0;
                                // var discount = $('#discount').val();
                                // var total = $('#total').val();

                                $("#dvTrainerNo").hide();

                                function myPackage(value) {
                                    
                                    if (price == 0) {
                                        price = value;
                                        isPackage = value;
                                        document.getElementById("price").value = price;
                                        $('#total').val(price);

                                    } else {
                                        if (isPackage == 0) {
                                            var discount = $('#discount').val();

                                            price = parseInt(price) + parseInt(value);
                                            document.getElementById("price").value = price;

                                            if (discount == "") {
                                                $('#total').val(price);

                                            } else {
                                                if (isDiscout == 0) {
                                                    var dp = (discount / 100) * price;
                                                    console.log(dp);

                                                    var discountedPrice = price - dp;
                                                    isDiscout = dp;
                                                    $('#total').val(discountedPrice);
                                                } else {
                                                    var dp = (discount / 100) * price;
                                                    console.log(dp);
                                                    var discountedPrice = price - dp;
                                                    isDiscout = dp;
                                                    $('#total').val(discountedPrice);
                                                }

                                            }
                                        } else {
                                            price = price - isPackage;
                                            var discount = $('#discount').val();

                                            price = parseInt(price) + parseInt(value);
                                            document.getElementById("price").value = price;

                                            if (discount == "") {
                                                $('#total').val(price);

                                            } else {
                                                if (isDiscout == 0) {
                                                    var dp = (discount / 100) * price;
                                                    console.log(dp);

                                                    var discountedPrice = price - dp;
                                                    isDiscout = dp;
                                                    $('#total').val(discountedPrice);
                                                } else {
                                                    var dp = (discount / 100) * price;
                                                    console.log(dp);
                                                    var discountedPrice = price - dp;
                                                    isDiscout = dp;
                                                    $('#total').val(discountedPrice);
                                                }

                                            }
                                        }


                                        // $('#total').val(price);
                                    }

                                }

                                // function isTrainer(value) {
                                //     console.log(value);
                                //     trainer = value;
                                //     if (value == "with trainer") {
                                //         $("#dvTrainerNo").show();

                                //     } else {
                                //         $("#dvTrainerNo").hide();
                                //         if (isPrice == 0) {
                                //             console.log('trainer fee is empty');
                                //         } else {
                                //             price = parseInt(price) - isPrice;
                                //             isPrice = 0;
                                //             console.log(isPrice);
                                //             document.getElementById("price").value = price;
                                //             $('#total').val(price);
                                //         }
                                //     }
                                // }

                                // function myTrainer(value) {
                                //     console.log(value);
                                //     if (trainer == "with trainer") {
                                //         isTrai = value;
                                //         if (isPrice == 0) {
                                //             isPrice = parseInt(value);
                                //             price = parseInt(price) + parseInt(value);
                                //             document.getElementById("price").value = price;
                                //             $('#total').val(price);
                                //         } else {
                                //             price = parseInt(price) - isPrice;
                                //             isPrice = parseInt(value);
                                //             price = parseInt(price) + parseInt(value);
                                //             document.getElementById("price").value = price;
                                //             $('#total').val(price);

                                //         }

                                //     }
                                // }
                            </script>
                            <script>
                                function GetTotal() {
                                    var discount = $('#discount').val();

                                    if (discount == "") {
                                        $('#total').val(price);

                                    } else {
                                        if (isDiscout == 0) {
                                            var dp = (discount / 100) * price;
                                            console.log(dp);

                                            var discountedPrice = price - dp;
                                            isDiscout = dp;
                                            $('#total').val(discountedPrice);
                                        } else {
                                            var dp = (discount / 100) * price;
                                            console.log(dp);
                                            var discountedPrice = price - dp;
                                            isDiscout = dp;
                                            $('#total').val(discountedPrice);
                                        }

                                    }
                                }
                            </script>

                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> Price </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="price" class="form-control" type="number " name="price" value="<?php echo $pricee; ?>" />

                                </div>
                            </div>

                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> Discount% </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="discount" onchange="GetTotal()" class="form-control" type="number " name="discount" value= "<?php echo $discountt;?>">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> Total price </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input readonly id="total" class="form-control" type="text " name="number" value= "<?php echo $total_price;?>">
                                    <br><br>
                                </div>
                            </div>



                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" class="btn btn-success" name="submit" value="submit">Update</button>
                                </div>
                            </div>

                        </form>
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
<!/-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
</script>



</body>

</html>
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
 <script>
    $(function() {
        $("input[name='trainer']").click(function() {
            if ($("#chkYes").is(":checked")) {
                $("#dvTrainerNo").show();
            } else {
                $("#dvTrainerNo").hide();
            }
        });
    });
</script>
<script>
$('#list option').filter(':selected').text();
// function getSelectedText(elementId) {
//     var elt = document.getElementById(elementId);

//     if (elt.selectedIndex == -1)
//         return null;

//     return elt.options[elt.selectedIndex].text;
// }

// var text = getSelectedText('test');



//         function getSelectValue()
//         {
//             var selectedValue = document.getElementById("list").value;
//             alert(selectedValue);
//         }
//         getSelectValue();
//         let selectElement = document.getElementById("selectElement");
// let valueSelected = selectElement.options[selectElement.selectedIndex].value; // get selected option value
// var text= selectElement.options[selectElement.selectedIndex].text; //get the selected option text

// // reference to 'scripts' select list 
// // used throughout the examples below
// var sel = document.getElementById('scripts');

// // display value property of select list (from selected option)
// console.log( sel.value );
    </script>


</body></html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cage</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
  <link href="../build/css/custom.css" rel="stylesheet">
</head>
<?php


$conn = mysqli_connect("localhost", "root", "", "mydata");
if(isset($_POST['submit'])) {
  
  $image_name=$_FILES['image']['name'];
  $image_size=$_FILES['image']['size'];
  $image_type=$_FILES['image']['type'];
  $image_tmp_name=$_FILES['image']['tmp_name'];	
  
  $move='data/'.$image_name;
  move_uploaded_file($image_tmp_name,$move);
    
    // echo "File has Uploaded";

 $video_name=$_FILES['video']['name'];
$video_size=$_FILES['video']['size'];
$video_type=$_FILES['video']['type'];
$video_tmp_name=$_FILES['video']['tmp_name'];	

$Vmove='data/'.$video_name;
move_uploaded_file($video_tmp_name,$Vmove);
	
	// echo "Video has Uploaded";

  $month = $_POST['months'];
  $week = $_POST['type'];
  $day = $_POST['day'];
  $title = $_POST['title'];
  $muscles_inv = $_POST['name'];
  $sets = $_POST['set'];
  $reps = $_POST['reps'];

  $data = array(
    'title'=>$_POST['title'],
    'sets'> $_POST['set'],
    'reps'=> $_POST['reps'],
    
    );
    foreach ($data as $key => $value){
    $k[]=$key;
    $v[]=" ".$value." ";
    
    }
    
    $k=implode(", ",$k);
    $v=implode(", ",$v);
    
    // echo $k;
    echo $v;

echo  $month . " " . $week . " " . $day . " " . $move . " " . $Vmove . " " . $title . " " . $muscles_inv . " " . $sets . " " . $reps;
 
  $sql="INSERT INTO `workout` (`month`,`week`,`day`,`move`,`Vmove`,`title`,`muscles_inv`,`sets`,`reps`) VALUES ('$month','$week','$day','$move','$Vmove','$title','$muscles_inv','$sets','$reps')";


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
            <a href="index.html" class="site_title"><img src="images/cage.png" alt="..." width="120px" height="98px"></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <!-- <img src="images/cage.png" alt="..." class="img-circle profile_img"> -->
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
                    <li><a href="view_package.php">View Packages </a></li>
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
                    <li><a href="view_meal.php">View Meal</a> </a></li>


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

                  <a class="dropdown-item" href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
              </li>

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
            <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                <div class="x_title">
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form class="" method="post" enctype="multipart/form-data">
                    <a href="form.html"></a>
                    </p>
                    <span class="section">WorkOut Days</span>


                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Month<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input id="month" class="form-control" type="month" name="months" type="months"  /></div>
                    </div>


                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Week<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <select name="type" class="form-control"  >
                          <option value="">Choose your option </option>
                          <option value="week 1" > Week 1</option>
                          <option value="week 2"> Week 2</option>
                          <option value="week 3"> Week 3</option>
                          <option value="week 4" > Week 4</option>
                       

                        </select>
                     
                      </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Day<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <select class="form-control" name="day"  >
                          <option value="" >Choose your option </option>
                          <option value="Day 1">Day 1</option>
                          <option value="Day 2">Day 2</option>
                          <option value="Day 3">Day 3</option>
                          <option value="Day 4">Day 4</option>
                          <option value="Day 5">Day 5</option>
                          <option value="Day 6">Day 6</option>
                          <option value="Day 7">Day 7</option>
                        </select>

                      </div>
                    </div>
                    <div class="x_content">
                      <form class="" action="" method="post">
                        <a href="form.html"></a>
                        </p>
                        <span class="section">WorkOut List</span>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3  label-align">Title</label>
                          <div class="col-md-6 col-sm-6">
                            <input id="title" class="form-control" name="title" type="name"  />
                          </div>
                        </div>


                        <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3  label-align">Image</label>
                          <div class="col-md-6 col-sm-6">
                            <input id="three" class="form-control" type="file" name="image"  accept="image/*" />

                          </div>
                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3  label-align">Video</label>
                          <div class="col-md-6 col-sm-6">
                            <input id="five" class="form-control" name="video" type="file" accept="video/*" />

                          </div>
                        </div>

                        <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3  label-align">Muscles Involved</label>
                          <div class="col-md-6 col-sm-6">
                            <input id="four" class="form-control" name="name" type="name" />
                          </div>
                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3  label-align">Sets</label>
                          <div class="col-md-6 col-sm-6">
                            <input id="sets" class="form-control" name="set" type="name" />
                          </div>
                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3  label-align">Reps</label>
                          <div class="col-md-6 col-sm-6">
                            <input id="reps" class="form-control" name="reps" type="name" />
                            <br>
                            <div class="col-md-3">
                              <button class="btn btn-md btn-primary" id="addBtn" onclick="addrow()" type="button">Add</button>
                            </div>





                            <div class="container pt-4">
                              <div class="table-responsive">
                                <table  id="table" class="table table-bordered">
                                  <thead>
                                    <tr>
                                      <th class="text-center">Title</th>
                                      <th class="text-center">Image</th>
                                      <th class="text-center">Video</th>
                                      <th class="text-center">Muscle Involved</th>
                                      <th class="text-center">Sets</th>
                                      <th class="text-center">Reps</th>
                                      <th class="text-center">Edit</th>
                                      <th class="text-center">Delete</th>
                                    </tr>
                                  </thead>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                        </div>
                        <button type="submit" class="btn btn-success" name="submit" value="submit">Submit</button>

                      </form>
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
            <h2> Developed By iKode Studio</h2>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="../vendors/validator/multifield.js"></script>
    <script src="../vendors/validator/validator.js"></script>
<script>
  // if (title == null || title == "", three == null || three == "", five == null || five == "", four == null || four == "", sets == null || sets == "", reps == null || reps == "") {
  //     alert("Please Fill All Required Field");
  // }
function addrow() {
var table = document.getElementById("table");
 var row = table.insertRow(1);
	// var id = row.insertCell(0);
  var Title = row.insertCell(0);
  var Images = row.insertCell(1);
  var Videos = row.insertCell(2);
  var Muscles = row.insertCell(3);
  var Sets = row.insertCell(4);
  var Reps = row.insertCell(5);
	var EditAction = row.insertCell(6);
	var DeleteAction = row.insertCell(7);
	
	var Titlevalue = document.getElementById("title").value;
	var Imagesvalue = document.getElementById("three").value;
  var Videosvalue = document.getElementById("five").value;
  var Musclesvalue = document.getElementById("four").value;
  var Setsvalue = document.getElementById("sets").value;
  var Repsvalue = document.getElementById("reps").value;
  // var z = q * a;
  

  document.getElementById("title").value = "";
	document.getElementById("three").value = "";
  document.getElementById("five").value = "";
  document.getElementById("four").value = "";
  document.getElementById("sets").value = "";
  document.getElementById("reps").value = "";
  
	Title.innerHTML = Titlevalue;
	Images.innerHTML = Imagesvalue;
  Videos.innerHTML = Videosvalue;
  Muscles.innerHTML = Musclesvalue;
  Sets.innerHTML = Setsvalue;
  Reps.innerHTML = Repsvalue;

  EditAction.innerHTML = "<input type='button'onclick=edittable(this) class='pull-right btn btn-success' Value='Edit'/>";
	DeleteAction.innerHTML = "<button onclick=myDeleteFunction(this) class='pull-right btn btn-danger'>Cancel</button>";
    }
    function myDeleteFunction(d) {
	  var e = d.parentNode.parentNode.rowIndex;
	//  var v = document.getElementById('myTable').row[e].cell(3).value
	//  alert(e);

  document.getElementById("table").deleteRow(e);
    }
    function edittable(dd) {
      var log = dd.parentNode.parentNode.rowIndex;

      var tit = dd.parentNode.parentNode.children[0].textContent;
      var img = dd.parentNode.parentNode.children[1].innerHTML;
      var vid = dd.parentNode.parentNode.children[2];
      var musc = dd.parentNode.parentNode.children[3].textContent;
      var set = dd.parentNode.parentNode.children[4].textContent;
      var rep = dd.parentNode.parentNode.children[5].textContent;
      




      console.log(log);
      console.log(img);
      console.log(vid);
      

document.getElementById("title").value = tit;
document.getElementById("three").innerHTML = img;
// document.getElementById("five").value = vid;
document.getElementById("four").value = musc;
document.getElementById("sets").value = set;
document.getElementById("reps").value = rep;

document.getElementById("table").deleteRow(log);

  }
</script>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <!-- <script src="../vendors/validator/validator.js"></script> -->

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

</body>

</html>







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
if(isset($_POST['search'])){
  $id = $_POST['id'];
  // $cell_no=$_POST['id'];

$sql="SELECT * FROM `package` WHERE `id` = '$id'";
echo $id;


 $result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0){
   while($row=mysqli_fetch_assoc($result)){
     
           $m_name =$row['mem_name'];
//     // $re_address =$row['res_address'];
//     // $res_no =$row['res_phone_no'];
    $cell_no =$row['cell_no'];
//     // $date_birth =$row['date_birth'];
//     // $nic =$row['nic_no'];
//     // $email =$row['email'];
//     // $occupation =$row['occupation'];

    if(mysqli_query($conn,$sql)){
	}

else{
	echo "Record can't fetch";
	}
 }
   }
  }
   ?>


<?php


$conn=mysqli_connect("localhost","root","","admin");
if(isset($_POST['submit'])){
// $id=$_POST['id'];
// $cell_no=$_POST['cellno'];
// $name=$_POST['name'];
$date=$_POST['date'];
$membership_no=$_POST['mem_no'];
$period=$_POST['period'];
$to=$_POST['text'];
$slip_no=$_POST['slip_no'];


$m_gym=$_POST['checka'];
$ruppess=$_POST['rs'];
$sales_tax=$_POST['sales_tax'];

$m_training=$_POST['checkb'];
$rupess=$_POST['rupees'];
$tot_amount=$_POST['total'];

$m_class=$_POST['checkc'];
$rps=$_POST['rpps'];
$paid_amount=$_POST['paid-amount'];

$registration_fee=$_POST['reg_fees'];
$rps_no=$_POST['rps_no'];
$balance_amount=$_POST['balance_number'];
$sitting=$_POST['textt'];
$rups=$_POST['numb_rs'];



echo $cell_no." ".$name." ".$date." ".$membership_no." ".$period." ".$to." ".$slip_no." ".$m_gym." ".$ruppess." ".$sales_tax." ".$m_training." ".$rupess." ".$tot_amount." ".$m_class." ".$rps." ".$paid_amount." ".$registration_fee." ".$rps_no." ".$balance_amount." ".$sitting." ".$rups;

// $sql="INSERT INTO `monthly_fee`(`name`, `cell_no`, `date`, `membership_no`, `period`, `to`, `slip_no`, `month_gym`, `ruppess`, `sales_tax`, `month_training`, `rupess`, `tot_amount`, `month_class`, `rps`, `paid_amount`, `registration_fee`, `rps_no`, `balance_amount`, `sitting`, `rups`) VALUES ('$cell_no','$name','$date','$membership_no','$period','$to','$slip_no','$m_gym','$ruppess','$sales_tax','$m_training','$rupess','$tot_amount','$m_class','$rps','$paid_amount','$registration_fee','$rps','$balance_amount','$sitting','$rups')";
// $sql="SELECT * FROM CARD `id`, `mem_name`, `res_address`, `res_phone_no`, `cell_no`, `date_birth`, `nic_no`, `email`, `occupation` FROM `personal_info` WHERE ('','$m_name','$re_address','$res_no','$cell_no','$date_birth','$nic','$email','$occupation')";
// if(mysqli_query($conn,$sql)){
// 	}
// else{
// 	echo "Record can't Inserted";
// 	}
}


// $result=mysqli_query($conn,$sql);
// if(mysqli_num_rows($result)>0){
// 	while($row=mysqli_fetch_assoc($result)){
    // $m_name =$row['mem_name'];
//     $re_address =$row['res_address'];
//     $res_no =$row['res_phone_no'];
//     $cell_no =$row['cell_no'];
//     $date_birth =$row['date_birth'];
//     $nic =$row['nic_no'];
//     $email =$row['email'];
//     $occupation =$row['occupation'];

?>

<?php
#MAX membership_no got here

$sql="SELECT MAX(`membership_no`) FROM `monthly_fee`";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
while ($row=mysqli_fetch_assoc($result)){
	$membership_no_get=$row["MAX(`membership_no`)"]+1;


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
                <li><a><i class="fa fa-edit"></i> Packages <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="add_package.php">Add Packages </a></li>
										<li><a href="addmission_form.php">Admission Form</a></li>
                     <li><a href="view_package.php">View Admission Form  </a></li>
								  <li><a href="update_package.php">Update Package</a></li>
								  <li><a href="monthly_fee.php"> Monthly Fee Collection</a></li>
										
									</ul>
								</li>
								
								<li><a><i class="fa fa-users"></i> Trainer<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
                    <li><a href="add_trainer.php">Add Trainer</a></li>
                    <li><a href="view_trainer.php">View Trainer</a></li>
										
									</ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i>Expense<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="daily_expense.php"> Daily Expense</a></li>
										<li><a href="cash_in.php">Cash In</a>  </a></li>
								
										
									</ul>
								</li>
                                <li><a><i class="fa fa-clone"></i> <span class="fa fa-chevron-down"></span></a>
                             <ul class="nav child_menu">
                           <li><a href="workouts.php"></a></li>
               
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
									<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Id</label>
											<div class="col-md-6 col-sm-6 ">
											<input class="form-control" type="text" class="btn" name="id" />
                      <input type="submit" name="search"  class="btn" value="Search" placeholder="Search" />
											</div>
                    </div>
                      		
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Cell No#</label>
											<div class="col-md-6 col-sm-6 ">
											<input class="form-control" type="cell_no" name="cellno" maxlength="11" value="<?php echo $row['cell_no'];?>"/>
               
                      <!-- <input type="text" name="id" placeholder="Search" /> -->
                     <!-- <input type="submit" class="btn btn-success" name="search" value="<?php echo $row['cell_no'];?>"/> -->
               
											</div>
                    </div>
                    <!-- <diV col-md-2> -->
                    <!-- <input type="text" name="id" placeholder="Search" />
                 <input type="submit" class="btn btn-success" name="search" value="search data"/> -->
                 <!-- </diV> -->
                    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="name" id="first-name" class="form-control " name="name"  value="<?php echo $row['mem_name'];?>" />
											</div>
										</div>
										<div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Date</label>
											<div class="col-md-6 col-sm-6 ">
											<input class="form-control" type="date"  name="date"  >
												
											</div>
										</div>

                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Membership No.FE 786-
											</label>
											<div class="col-md-6 col-sm-6 ">
                        <!-- <input type="mem_no" id="first-name"  class="form-control " name="mem_no"> -->
                        <input type="text" id="first-name" disabled class="form-control " value="<?php echo $membership_no_get ;?>"/>
                       <input type="text" id="first-name" hidden class="form-control " name="mem_no" value="<?php echo $membership_no_get;?>" />
                        
											</div>
										</div>
                     <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Period </label>
                      <div class="col-md-6 col-sm-6">
                        <div class="col-md-5">
                          <input class="form-control"  type="period" name="period">
                        </div>
                        <label class="col-form-label col-md-1 col-sm-1 label-align">To</label>
                        <div class="col-md-5">
                          <input class="form-control"  type="text" name="text" >
                        </div>
                      </div>
                    </div>
                                        	
										<div class="field item form-group">
                     <label class="col-form-label col-md-3 col-sm-3  label-align">Priv.Slip No:</label>
                    <div class="col-md-6 col-sm-6">
                      <input class="form-control" type="number"  name="slip_no" ></div>
                       </div>
                                        

                                        
                         <div class="field item form-group">
                         <label class="col-form-label col-md-3 col-sm-3  label-align">Month-Gym:</label>
                      <label class="col-form-label label-align">1</label>
                      <div class="col-md-3 col-sm-3">
                        <div class="col-md-2">
                          <input class="form-control"  type="checkbox" name="checka" value="1"/>
                        </div>

                        <label class="col-form-label col-md-1 col-sm-1 label-align">3</label>
                        <div class="col-md-2">
                          <input class="form-control" type="checkbox" name="checka" value="3"/>
                          </div>
                          <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Rs:</label>
                       <div class="col-md-8">
                    <input class="form-control" type="number_rs" name="rs">
                       </div>
                       <div class="field item form-group">
                          <label class="col-form-label col-md-6 col-sm-6 label-align">Sales Tax:Rs </label>
                        <div class="col-md-8 ">
                          <input class="form-control" type="number" name="sales_tax">
                        </div>
                        </div>
                     </div>
                     </div>
                    </div>
           
                    <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align"> Month-Training:</label>
                      <label class="col-form-label label-align">1</label>
                      <div class="col-md-3 col-sm-3">
                        <div class="col-md-2">
                          <input class="form-control"  type="checkbox" name="checkb" value="1"/>
                        </div>
                        <label class="col-form-label col-md-1 col-sm-1 label-align">3</label>
                        <div class="col-md-2">
                          <input class="form-control"  type="checkbox" name="checkb" value="3"/>
                          </div>
                          <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Rs:</label>
                     <div class="col-md-8 ">
                       <input class="form-control" type="rs_number" name="rupees">
                       </div>
                       <div class="field item form-group">
                          <label class="col-form-label col-md-7 col-sm-7 label-align">Total-Amount:Rs </label>
                        <div class="col-md-8 ">
                          <input class="form-control" type="tot_number" name="total">
                        </div>
                        </div>
                     </div>
                    </div>
                     </div>

                    <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align"> Month-Fitness Class:</label>
                      <label class="col-form-label label-align">1</label>
                      <div class="col-md-3 col-sm-3">
                        <div class="col-md-2">
                          <input class="form-control"  type="checkbox" name="checkc" value="1"/>
                        </div>
                        <label class="col-form-label col-md-1 col-sm-1 label-align">3</label>
                        <div class="col-md-2">
                          <input class="form-control"  type="checkbox" name="checkc" value="3"/>
                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-3 col-sm-3 label-align">Rs:</label>
                        <div class="col-md-8">
                          <input class="form-control" type="no_rpps" name="rpps">
                        </div>

                        <div class="field item form-group">
                          <label class="col-form-label col-md-7 col-sm-7 label-align">Paid-Amount:Rs </label>
                        <div class="col-md-8 ">
                          <input class="form-control" type="paid_number" name="paid-amount">
                        </div>
                        </div>
                        </div>
                      </div>
                    </div>


                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3 label-align">Registration Fees:</label>
                      <div class="col-md-4 col-sm-4">
                        <div class="col-md-4">
                          <input class="form-control"  type="numm" name="reg_fees">
                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-2 col-sm-2 label-align">Rs:</label>
                        <div class="col-md-6">
                          <input class="form-control" type="rs" name="rps_no">
                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-7 col-sm-7 label-align">Balance-Amount:Rs </label>
                        <div class="col-md-8 ">
                          <input class="form-control" type="balance_number" name="balance_number">
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>

                        <div class="field item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align">Sittings:Steam / Suana Bath</label>
                        <div class="col-md-4 col-sm-4">
                        <div class="col-md-4">
                          <input class="form-control"  type="text" name="textt" >
                        </div>
                        <div class="field item form-group">
                          <label class="col-form-label col-md-2 col-sm-2 label-align">Rs:</label>
                        <div class="col-md-6">
                          <input class="form-control" type="numb_rs" name="numb_rs">
                          </div>
                        </div>
                        </div>
                        </div>
                       


                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Trainer Name:</label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" type="name"  name="trainer_name" ></div>
                                        </div>
                                        

                                        

                                        <!-- <div class="form-check-inline">
  <label class="form-check-label">
    <input type="checkbox" class="form-check-input" value="">Option 2
  </label>
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
          
<?php
    // my connection here
    ?>
    <?php
        $query = $mysqli->query("SELECT * FROM package");
        echo '<select class="product">';
            while($obj = $query->fetch_object()){
                echo '
                    <option data-price="'.$obj->price.'" value="'.$obj->package.'">'.$obj->package.'</option>
            ';
        }
    echo '</select>';
    // if product1 is selected, the price is 100 and show in the textbox
    //
    ?>
    Price:<span class="price"></span>
   


<?php include 'connection.php'; ?>
<select class="ProductName">
    <?
    $query = $mysqli->query("SELECT * FROM package");
  while($obj = $query->fetch_object())
    {?>
    // I assumed '$product_price' as column name. Change it if different
    <option value="<?php echo $price->price; ?>"></option>

</select>


<span class="ShowPrice">
    <input type="text" value="">
</span>

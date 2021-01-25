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

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>
<?php

$conn = mysqli_connect("localhost", "root", "", "mydata");
if (isset($_POST['submit'])) {


  $image_name = $_FILES['image']['name'];
  $image_size = $_FILES['image']['size'];
  $image_type = $_FILES['image']['type'];
  $image_tmp_name = $_FILES['image']['tmp_name'];

  $move = 'pic/' . $image_name;
  move_uploaded_file($image_tmp_name, $move);

  // echo "File has Uploaded";


  $month = $_POST['month'];
  $week = $_POST['week'];
  $day = $_POST['list'];
  $meal = $_POST['meal'];
  $title = $_POST['name'];
  $select_rec = $_POST['abc'];
  // $hour = $_POST['hr'];
  // $minute = $_POST['min'];
  $prep_time = $_POST['hr'] . $_POST['min'];
  $ingredients = $_POST['text'];
  $quantity = $_POST['number'];
  $unit = $_POST['meter'];
  $recipe = $_POST['recipe'];

  // $data= array('$ingredients', '$quantity' ,'$unit');
  //     echo $data;



  echo  $month . " " . $week . " " . $day . " " . $meal . " " . $select_rec . " " . $prep_time . " " . $move . " " . $ingredients . " " . $quantity . " " . $unit . " " . $recipe . " " . $title;

  $sql="INSERT INTO `meal` (`month`,`week`,`day`,`meal`,`select_recipe`,`prep_time`,`move`,`ingredients`,`quantity`,`unit`,`recipe`) VALUES ('$month','$week','$day','$meal','$select_rec','$prep_time','$move', '$ingredients','$quantity','$unit','$recipe')";


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
              <!-- <img src="images/cage.png" alt="..." width="100px" height="100px" > -->

            </div>
            <!-- <div class="profile_info">
              </div>  -->
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">

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
            <div class="col-md-12 col-sm-12">
              <div class="x_panel">
                <div class="x_title">
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <form class="" method="post" enctype="multipart/form-data">
                    </p>
                    <span class="section">Add Meal</span>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Month<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="month" type="month" /></div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Week<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <select class="form-control" name="week">
                          <option value="">Choose your option </option>
                          <option value="Week 1"> Week 1</option>
                          <option value="Week 2"> Week 2</option>
                          <option value=" Week 3"> Week 3</option>
                          <option value=" Week 4"> Week 4</option>

                        </select>
                      </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Day<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <select name="list" class="form-control">
                          <option value="">Choose your option </option>
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
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Meal<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <!-- <input class="form-control" type="email" class='email' name="confirm_email" data-validate-linked='email' required='required' /> -->
                        <select name="meal" class="form-control">
                          <option value="">Choose your option </option>
                          <option value="Breakfast">Breakfast</option>
                          <option value="Lunch"> Lunch</option>
                          <option value="Dinner"> Dinner</option>

                        </select>
                      </div>
                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Title<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input id="title" class="form-control" data-validate-length-range="6" name="name" type="name" />
                      </div>
                    </div>


                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Select Recipe<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <select class="form-control" name="abc">
                          <option value="">Choose your option </option>
                          <option>Recipe 1</option>
                          <option>Recipe 2</option>
                          <option>Recipe 3</option>

                        </select>
                      </div>
                    </div>



                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Preparation Time <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <div class="col-md-2">
                          <input class="form-control" placeholder="hr" type="text" name="hr">
                        </div>
                        <div class="col-md-2">
                          <input class="form-control" placeholder="min" type="text" name="min" <?php echo 'min';   ?>>
                        </div>


                      </div>
                    </div>
                    <div class="field item form-group">

                      <label class="col-form-label col-md-3 col-sm-3  label-align">Recipe Images <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input id="image" class="form-control" type="file" name="image" accept="image/*" multiple>
                      </div>

                    </div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Add Ingredients <span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        
                        <div class="col-md-6">
                          <input id="one" class="form-control" value="" placeholder="Ingredients" type="text" name="text">
                        </div>


                        <div class="col-md-6">
                          <input id="two" class="form-control" value="" placeholder="Quantity" type="number" name="number">
                        </div>
                        <br> <br> <br>
                        <div class="col-md-6">
                          <select id="unit" class="form-control" name="meter">
                            <option value="">Choose your Option</option>
                            <option value="Unit">Unit</option>
                            <option value="Table Spoon">Table spoon</option>
                            <option value="Tea Spoon">Tea spoon</option>
                            <option value="Gram">Gram</option>
                            <option value="Kg">Kg</option>
                            <option value="Litre">Litre</option>

                          </select>
                        </div>
                        <div class="col-md-6">
                          <button class="btn btn-md btn-primary" type="button" onclick="addrow()">Add</button>
                        </div>



                        <div class="container pt-4">
                          <div class="table-responsive">
                            <table id="table" class="table table-bordered">
                              <thead>
                                <tr>
                                  <!-- <th class="text-center">Id</th> -->
                                  <th class="text-center">Ingredients</th>
                                  <th class="text-center">Quantity</th>
                                  <th class="text-center">Unit</th>
                                  <th class="text-center">Edit</th>
                                  <th class="text-center">Delete</th>

                                </tr>
                              </thead>
                              <!-- <tbody id="tb">

                              </tbody> -->

                            </table>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Preparation<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                 
                        <textarea id="middle-name" class="form-control" required="required" type="text" name="recipe" rows="4" cols="50">
                                                </textarea></div>
                    </div>

                    <div class="ln_solid">
                      <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                          <button type="submit" class="btn btn-success" name="submit" value="submit">Submit</button>

                        </div>
                      </div>



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
    $("#image").on("change", function() {
      if ($("#image")[0].files.length > 3) {
        alert("You can select only 3 images");
      } else {
        $("#imageUploadForm").submit();
      }
    });
  </script>





  <script>
    function addrow() {
      var table = document.getElementById("table");
      var row = table.insertRow(1);
      var Ingredient = row.insertCell(0);
      var Quantity = row.insertCell(1);
      var Unit = row.insertCell(2);
      var EditAction = row.insertCell(3);
      var DeleteAction = row.insertCell(4);

      var arr = [];
      var count = 0;

      var Ingredientvalue = document.getElementById("one").value;
      var Quantityvalue = document.getElementById("two").value;
      var Unitv = document.getElementById("unit").value;

      // store an external reference for each persons
      // for (var i = 0, l = count; i < l; i++) {
      //   arr[i].name = arr[i];
      //   count++;
      // }

      for(var i=0; i < 1; i++){
        var obj = arr.splice(i, 0,{
        'count': count,
        'ing': Ingredientvalue,
      });
      i++;
      }
      

      console.log(arr);
      console.log(count);


      // var count = '1';
      // var z = q * a;
      document.getElementById("one").value = "";
      document.getElementById("two").value = "";
      document.getElementById("unit").value = "";

      // id.innerHTML = count;
      Ingredient.innerHTML = Ingredientvalue;
      Quantity.innerHTML = Quantityvalue;
      Unit.innerHTML = Unitv;

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
      var ing = dd.parentNode.parentNode.children[0].textContent;
      var quantity = dd.parentNode.parentNode.children[1].textContent;
      var unit = dd.parentNode.parentNode.children[2].textContent;

      //  var v = document.getElementById('myTable').row[e].cell(3).value
      console.log(ing);

      document.getElementById("one").value = ing;
      document.getElementById("two").value = quantity;
      document.getElementById("unit").value = unit;

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
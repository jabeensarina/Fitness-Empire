<!DOCTYPE html>
<html lang="en">

<?php
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
        $price = $row['price'];
        //   $discount =$row['discount'];

?>
<?php
    }
}

?>



<?php
$add_package = "";
$pricee = "";
$discount = "";
$iden = "";


$conn = mysqli_connect("localhost", "root", "", "admin");
if (isset($_POST['submit'])) {
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

    $pricee= $_POST['price'];
    $discountt = $_POST['discount'];
    $total_price = $_POST['number'];


    echo $m_name . " " . $re_address . " " . $res_no . " " . $cell_no . " " . $date_birth . " " . $nic . " " . $email . " " . $occupation . " " . $sel_package . " " . $trainer . " " . $trainer_name . " " . $pricee . " " . $discountt . " " . $total_price;
    $sql  = "INSERT INTO `personal_info`(`id`, `mem_name`, `res_address`, `res_phone_no`, `cell_no`, `date_birth`, `nic_no`, `email`, `occupation`, `select_package`, `trainer`, `trainer_name`, `price`, `discount`, `total_price`) VALUES ('','$m_name','$re_address','$res_no','$cell_no','$date_birth','$nic','$email','$occupation','$sel_package','$trainer','$trainer_name','$pricee','$discountt','$total_price')";
    
    if (mysqli_query($conn, $sql)) {
    } else {
        echo "Record can't Inserted";
    }
}
?>


<?php include 'content/header.php' ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Admission Form</h3>
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
                                    <input type="name" id="first-name" class="form-control " name="name" required="required">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Res.Address <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="address" id="first-name" class="form-control " name="address" required="required">
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Res.Phone Number </label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" type="phone_number" name="phone_no" accept="number">
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Cell Number <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" id="cell_no" type="cell_number" name="cell_no" maxlength="11" required="required">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth. <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="birthday" name="dt_birth" class="date-picker form-control" placeholder="dd-mm-yyyy" type="dt_birth" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" required="required">
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
                                    <input class="form-control" id="cnic" type="cnic_number" name="nic" maxlength="13" required="required" >
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">E-Mail<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" id="email" name="email" class='email' type="email" type="text" required="required" />
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Occupation<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" class='optional' name="occupation" type="text" required="required" />
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Select Package
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select id=sel1 class="form-control" onchange="myPackage(this.value)" name="select_pkge">
                                        <?php

                                        $sql = "SELECT * FROM `package`";
                                        $result = mysqli_query($conn, $sql);
                                        if (mysqli_num_rows($result) > 0) {
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                // $iden = $row["id"];

                                        ?>

                                                <option value="<?php echo ($row["price"]); ?>"><?php echo ($row["add_package"]); ?></option>
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
                                        <label><input type="radio" id="chkYes" name="trainer" value="with trainer" /> With Trainer
                                        </label>
                                    </div>
                                    <div class="col-md-4 col-sm-4 pt-2">
                                        <label><input type="radio" id="chkNo" name="trainer" value="without trainer" /> Without Trainer
                                        </label>
                                    </div>

                                </div>
                            </div>

                            <div id="dvTrainerNo" style="display: none">
                                <div id="trainer" class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align " for="first-name">Trainer's Name
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control" name="select_trainer" >
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
                                // var trainer;
                                var isPrice = 0;
                                var isDiscout = 0;
                                var isPackage = 0;
                                // var myTrai = 0;
                             
                                function myPackage(value) {
                                   price = value;
                                    document.getElementById("price").value = value;
                                    $('#total').val(value);
                                }
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
                                    <input id="price" class="form-control" type="number " name="price"  />
                                </div>
                            </div>

                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> Discount% </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="discount" onchange="GetTotal()" class="form-control" type="number " name="discount">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> Total price </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input readonly id="total" class="form-control" type="text " name="number">
                                    <br><br>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                <button type="submit" class="btn btn-primary " name="submit" value="submit" onclick="window.print();" > Submit /Print</button>
                                    <button type="submit" class="btn btn-success" name="submit" value="submit">Submit</button>
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
<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
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
//     function validate(email) {

// var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
// //var address = document.getElementById[email].value;
// if (reg.test(email) == false) 
// {
//     alert('Invalid Email Address');
//     return (false);
// }
// }
// function validateEmail(emailField){
//         var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

//         if (reg.test(emailField.value) == false) 
//         {
//             alert('Invalid Email Address');
//             return false;
//         }

//         return true;

// }
</script>


</body>

</html>
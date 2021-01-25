<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">



<?php
$conn = mysqli_connect("localhost", "root", "", "admin");
$id="";
$date="";
$description= "";
$price = "";
$amount="";
$cash="";



$update = $_SESSION["upid"];
// echo $update;
 $upd_id="SELECT * FROM `cash_in` WHERE `id` = '$update'";
 $result=mysqli_query($conn,$upd_id);
 if(mysqli_num_rows($result)>0){
   while($row=mysqli_fetch_assoc($result)){

   $id = $row["id"];
   $date = $row["date"];
   $description = $row["description"];
   $price = $row["price"];
   $amount = $row["amount"];
  $cash=  $row["cash"];
}}
?>
<?php

$conn = mysqli_connect("localhost", "root", "", "admin");
if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $description = $_POST['text'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];
    $cash = $_POST['cash'];


    echo $date . " " . $description . " " . $price . " " . $amount. " " . $cash;

    $sql="UPDATE `cash_in` SET `date`='$date',`description`='$description',`price`='$price',`amount`='$amount',`cash`='$cash' WHERE `id`='$update'";


    if (mysqli_query($conn, $sql)) {
    } else {
        echo "Record can't Inserted";
    }
}

?>

<?php
$sql="SELECT * FROM `cash_in`";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	while($row=mysqli_fetch_assoc($result)){
     
    $amount =$row['amount'];
    
    }}
	 ?>
<?php include 'content/header.php'; ?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Update Cash In/Out:</h3>
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
                                <label class="col-form-label col-md-3 col-sm-3 label-align"  for="first-name" >Amount
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="amount" readonly="readonly" class="form-control " name="amount"  value="<?php echo $amount;?>"/>
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Date
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="date" id="first-name" class="form-control " name="date" value="<?php echo $date; ?>"  />
                                </div>
                            </div>


                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Description</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea  class="form-control" type="text" name="text" rows="3" cols="50"  ><?php echo $description; ?>
								</textarea>

                                </div>
                            </div>

                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> Price </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="price"  class="form-control" type="text " name="price" value="<?php echo $price; ?>" />
                                </div>
                            </div>


                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Cash  <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                        

                                    <div class="col-md-4 col-sm-4 pt-2">
                                        <label><input type="radio" id="cash1" name="cash" value="cash in" <?php if ($cash == 'cash in')  { echo "checked"; } ?>/> Cash In
                                        </label></div>
                                    <div class="col-md-4 col-sm-4 pt-2">
                                        <label><input type="radio" id="cash2"  name="cash" value="cash out" <?php if ($cash == 'cash out')  { echo "checked"; } ?>> Cash Out
                                        </label></div>
                                    
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
    </div>

    <!-- /page content -->

    <!-- Footer -->
    <?php include 'content/footer.php' ?>

  
    <!-- <script> -->











<script>
//         var amount = $('#amount').val();

//         $( "#price" ).change(function() {
//             debugger
//             var price = $('#price').val();
//             debugger
//   var total =parseInt(amount)+parseInt(price);
//   $('#amount').val(total);
// });
// abc
$(document).ready(function() {
    var total = 0
    $('input:radio[name=cash]').change(function() {
        if (this.value == 'cash in') {
            // if($('#cash1').is(':checked')) {
                // debugger
            var price = $('#price').val();
            var amount = $('#amount').val();
            // debugger
            total = parseInt(amount) + parseInt(price);
            console.log(total);
            console.log(amount);
            console.log(price);

            // debugger
  $('#amount').val(total);
        }
        else if (this.value == 'cash out') {
            // else if($('#cash2').is(':checked')) {
                // debugger
            var price = $('#price').val();
            var amount = $('#amount').val();
            // debugger
            var total =parseFloat(amount) - parseFloat(price);
            // debugger
  $('#amount').val(total); 
        }
    });
});









// $(document).ready(function(){
//     $('#cash1,#cash2').change(function(){
//     price = $('#price').text();
//     if($('#cash2').is(':checked')) {
//     debugger
//         // price = parseInt(price) + 40;

//         // ($('#cash2').is(':checked'))
//         var price = $('#price').val();
//   var total =parseInt(amount)-parseInt(price);
//   $('#amount').val(total);
//         // var total =parseInt(amount)-parseInt(price);
      
//     } else {
//         debugger
//         // price = parseInt(price) - 40;
//         ($('#cash1').is(':checked'))
//         var price = $('#price').val();
//   var total =parseInt(amount)-parseInt(price);
//   $('#amount').val(total);
//         // var total= parseInt(amount)-parseInt(price);
//     }
//     debugger
//     $('#price').text(price);
//     $('#amount').val(total);
//   });
// });







//   var amount = $('#amount').val();
// debugger
//   $( "#price" ).change(function() {

// //   var price = $('#price').val();

// if($('#cash1').is(':checked')) {
// debugger
//   var total =parseInt(amount)+parseInt(price)
// }
// //   $('#amount').val(total);}
//   else  {
//  debugger
//   ($('#cash2').is(':checked'))
//   debugger
//   var total =parseInt(amount)-parseInt(price);
//   $('#amount').val(total);
//   }
//         });

</script> 
</html>
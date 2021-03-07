<!DOCTYPE html>
<html lang="en">



<?php


include 'connection.php';
if (isset($_POST['submit'])) {
    $date = $_POST['date'];
    $description = $_POST['text'];
    $price = $_POST['price'];
    $amount = $_POST['amount'];
    $cash = $_POST['cash'];


    echo $date . " " . $description . " " . $price . " " . $amount. " " . $cash;

    $sql = "INSERT INTO `cash_in` (`id`,`date`,`description`,`price`,`amount`,`cash`) VALUES ('','$date','$description','$price','$amount','$cash')";


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
                <h3>Cash In/Out:</h3>
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
                                    <input type="text" id="amount" readonly="readonly" class="form-control " name="amount" value="<?php echo $amount;?>"  />
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Date
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="date" id="first-name" class="form-control " name="date" required="required" />
                                </div>
                            </div>


                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Description</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea id="txtName" class="form-control" type="text" name="text" rows="5" cols="40" required="required">
													</textarea>

                                </div>
                            </div>

                            <div class="item form-group">
                                <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align"> Price </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input id="price"  class="form-control" type="text " name="price" required="required"  onkeypress='return restrictAlphabets(event)'/>
                                </div>
                            </div>


                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Cash  <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                        

                                    <div class="col-md-4 col-sm-4 pt-2">
                                        <label><input type="radio" id="cash1" name="cash" value="cash in"> Cash In
                                        </label></div>
                                    <div class="col-md-4 col-sm-4 pt-2">
                                        <label><input type="radio" id="cash2"  name="cash" value="cash out"> Cash Out
                                        </label></div>       
                                </div>
                            </div>
                            <br>
                            <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" class="btn btn-success" name="submit" value="submit">Submit</button>
                                </div>
                        </form>
                        <div class="ln_solid"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /page content -->

    <!-- Footer -->
    <?php include 'content/footer.php' ?>
<script>
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
</script> 
<script type="text/javascript">
         /*code: 48-57 Numbers*/
         function restrictAlphabets(e) {
             var x = e.which || e.keycode;
             if ((x >= 48 && x <= 57))
                 return true;
             else
                 return false;
         }
      </script>
      <script>
      $('#dsTest').keyup(function() {
  if (this.value.match(/[^a-zA-Z0-9 ]/g)) {
    this.value = this.value.replace(/[^a-zA-Z0-9 ]/g, '');
  } 
});

$('#dsTest').focusout(function() {
  this.value = this.value.trim();
});
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

</html>
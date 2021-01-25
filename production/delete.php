<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Fitness Empire</title>
    </head>
    <body >
    echo '<td> <button type="button" class="btn btn-success" name="updid" value="<?php echo $row["id"];?> Edit</button></td>'; 
   echo '<td> <button type="submit" class="btn btn-danger btn-sm"  name="delid" value="<?php echo $row["id"];?>  Delete</button</td>';

       <?php
       include 'connection.php';
if(isset($_POST['delid'])){
  $iden=$_POST['delid'];

  
  $del="DELETE FROM `monthly_fee` WHERE `id` = '$iden'";
 
	
	
	if(mysqli_query($conn,$del)){

}

else{
	echo "  Record Can't Delete";
}
}
?> 
</body></html>"<tr>";
   echo "<td>" .$row['slip_no']. "</td>";
   echo "<td>" .$row["cell_no"]. "</td>";
   echo "<td>" .$row["name"]. "</td>";
   echo "<td>" .$row["date"]. "</td>";
   echo "<td>" .$row["membership_no"]. "</td>";
   echo "<td>" .$row["period"]. "</td>";
   echo "<td>" .$row["to"]. "</td>";
    
   echo "<td>" .$row["month_gym"]. "</td>";
   echo "<td>" .$row["ruppess"]. "</td>";
   echo "<td>" .$row["sales_tax"]. "</td>";
    
   echo "<td>" .$row["month_training"]. "</td>";
   echo "<td>" .$row["rupess"]. "</td>";
   echo "<td>" .$row["tot_amount"]. "</td>";
    
   echo "<td>" .$row["month_class"]. "</td>";
   echo "<td>" .$row["rps"]. "</td>";
   echo "<td>" .$row["paid_amount"]. "</td>";
    
   echo "<td>" .$row["registration_fee"]. "</td>";
   echo "<td>" .$row["rps_no"]. "</td>";
   echo "<td>" .$row["balance_amount"]. "</td>";
    
   echo "<td>" .$row["sitting"]. "</td>";
   echo "<td>" .$row["rups"]. "</td>";
   echo "<td>" .$row["trainer"]. "</td>";

   echo '<td> <button type="button" class="btn btn-success" name="updid" value="<?php echo $row["id"];?> Edit</button></td>'; 
   echo '<td> <button type="submit" class="btn btn-danger btn-sm"  name="delid" value="<?php echo $row["id"];?>  Delete</button</td>';
   echo "</tr>";

}}
?>
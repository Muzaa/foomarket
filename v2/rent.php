<?php
include 'config.php';

include 'header.php';

if(!empty($_POST))
{

  $sql="INSERT INTO `rental` (
          `rid` ,`Date` , `Description` ,
          `InventoryID` , `Owner` , `Renter` ,
          `Duration` ,  `Comment`
          )
          VALUES (
          NULL , Now(), '$_POST[Description]', '$_SESSION[iid]', '$_SESSION[owner]', '$_SESSION[uid]', '$_POST[Duration]', '$_POST[Comment]'
          )";

          echo $sql;
          exit;

	mysql_query($sql);
	header('Location: index.php');
	exit;
 }
  

?>
<h2> Rental</h2>

<table width='100%'>
<tr>
		<td>
		<form  method="POST" action="rent.php">

		Description  
		</td>
		<td><input type="text" name="Description" value="">	
		</td>

</tr>
<tr>
		<td>
		Duration
		</td>
				<td>
		<input type="text" name="Duration" value="">
		</td>
</tr>
<tr>

		<td>
	 Comment
		</td>
		<td>
		<input type="text" name="Comment" value="">
		</td>
</tr>


<tr>
		<td colspan='2' align='right'>
		<input type='button' onclick='history.go(-1)' value='Back'>   
		<input type="submit" name="submit" value="Rent">
		</form>
		</td>
</tr>
</table>



<?php
include 'footer.php';
?>

<?php
include 'config.php';


if(!empty($_POST))
{

  $sql="INSERT INTO `inventory` (
        `iid` , `userid` , `Description` ,
        `Rate` ,  `Deposit` , `latitude` ,
        `longitude`
        )
        VALUES (
        NULL , '$_SESSION[uid]', '$_POST[Description]', '$_POST[Rate]', '$_POST[Deposit]', '', ''
        );
        ";

	mysql_query($sql);
	header('Location: index.php');
	exit;
 }
  

include 'header.php';
?>



<h2> Insert Inventory </h2>

<table width='100%'>
<tr>
		<td>
		<form  method="POST" action="inventory.php">

		Description  
		</td>
		<td><input type="text" name="Description" value="">	
		</td>

</tr>
<tr>
		<td>
		Rate / Hour
		</td>
				<td>
		<input type="text" name="Rate" value="5">
		</td>
</tr>
<tr>

		<td>
	 Deposit
		</td>
		<td>
		<input type="text" name="Deposit" value="10">
		</td>
</tr>


<tr>
		<td colspan='2' align='right'>
		<input type='button' onclick='history.go(-1)' value='Back'>   
		<input type="submit" name="submit" value="Add">
		</form>
		</td>
</tr>
</table>
<?php
include 'footer.php';
?>

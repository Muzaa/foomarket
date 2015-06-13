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
          NULL , NOW(), '', '$_SESSION[iid]', '$_SESSION[owner]', '$_SESSION[uid]', '', ''
          )";

          echo $sql;
          exit;

	mysql_query($sql);
	header('Location: index.php');
	exit;
 }
  


?>




<?php
include 'footer.php';
?>

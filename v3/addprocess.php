<?php

//echo "success";
//exit;
include "config.php";


var_dump($_FILES);

var_dump($_GET);

var_dump($_POST);




  $sql="INSERT INTO `inventory` (
        `iid` , `userid` , `Description` ,
        `Rate` ,  `Deposit` , `latitude` ,
        `longitude`
        )
        VALUES (
        NULL , '1', '$_POST[Description]', '$_POST[Rate]', '$_POST[Deposit]', '$_POST[latadd]', '$_POST[longadd]'
        );
        ";
        
        
        //echo $sql;
        
        //exit;

	mysql_query($sql);
        
        
        
        
        $id = mysql_insert_id();
        
       //exit; 
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . $id . ".jpg";

//echo "<p>";

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
 // echo "File is valid, and was successfully uploaded.\n";
  header ("location: index.php#!/addsuccess.php?id=$id");
} else {
  // echo "Upload failed";
   header ("location: index.php#!/addfailed.php");
}
/*
echo "</p>";
echo '<pre>';
echo 'Here is some more debugging info:';
print_r($_FILES);
print "</pre>";

header ("location: index.php#!/addsuccess.php");
*/
?> 

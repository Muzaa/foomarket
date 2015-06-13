<?php

//echo "success";
//exit;

?>

<div class="error">
OK

<?php
/*
var_dump($_FILES);

var_dump($_GET);

var_dump($_POST);
*/
$uploaddir = 'uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

//echo "<p>";

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
 // echo "File is valid, and was successfully uploaded.\n";
  header ("location: index.html#!/addsuccess.php");
} else {
  // echo "Upload failed";
   header ("location: index.html#!/addfailed.php");
}
/*
echo "</p>";
echo '<pre>';
echo 'Here is some more debugging info:';
print_r($_FILES);
print "</pre>";

header ("location: index.html#!/addsuccess.php");
*/
?> 

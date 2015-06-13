<?php
include 'config.php';
include 'header.php';
 session_start();
 
if(isset($_POST['Email']))
 {
 
    header('location: login.php');
 
 }
 else
 {
?>



<h3>Welcome <?php echo $_SESSION['Name'] ?></h3>


<p><a href="logout.php">Logout</a></p>

<ul>
  <li>aa</li>
  <li>bb</li>  
  <li>cc</li>
</ul>

<ul>
  <li><a href="inventory.php">Insert Inventory</a></li>
  <li>bb</li>  
  <li>cc</li>
</ul>


<?php
}

include 'footer.php';
?>


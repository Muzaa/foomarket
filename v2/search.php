<?php
include "config.php";
 

include "header.php";



$Description = '';
if(!empty($_GET['Description']))
{
   $Description = $_GET['Description'];
}

$uid = '';
if(!empty($_SESSION['uid']))
{
   $uid = $_SESSION['uid'];
}

$page = 1;
if(!empty($_GET['page']))
{
$page = $_GET['page'];
}


$row = ($page-1) * 20;


$qid = mysql_query("select * from inventory where userid != '$uid' AND Description like '%$Description%' order by Description limit $row,20");

?>

<h2>List Of Inventory to Rent<h2>


<table>
<tr><td>

<form >
Search By Name
<input name='Description' type='text' value='<?php echo $Description; ?>'> <input type='submit' value='Search'>

</td></tr>
</table>

<table width='100%' border=1>

<thead>
<tr>

<th>
No
</th>

<th>
Description
</th>

<th>
Lat
</th>

<th>
Long
</th>

<th>
Price / Hour
</th>


<th>
Deposit
</th>

<th>
Option
</th>

</thead>

<?php

$i=$row+1;
while($data=mysql_fetch_array($qid)):
$mark = true;   
?>

<tr>

<td>
<?php echo $i ?>
</td>

<td>
<?php echo $data['Description'] ?>
</td>

<td>
<?php echo $data['latitude'] ?>
</td>

<td>
<?php echo $data['longitude'] ?>
</td>

<td>
<?php echo $data['Rate'] ?>
</td>

<td>
<?php echo $data['Deposit'] ?>
</td>

<td>
<a href="rent.php?id=<?php echo $data['iid'] ?>">Click To Rent This Item</a>
</td>

</tr>

<?php
$i++;

$_SESSION['iid'] = $data['iid'];

$_SESSION['owner'] = $data['userid'];

endwhile;


?>

</table>
 <br><br>
 
 
<?php
 
include "footer.php";
?>

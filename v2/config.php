<?php

 mysql_connect("localhost","root","");
 mysql_selectdb("foorental");
   session_start();
 //$_SESSION['email'] = 'dicky@mncsb.com';
 
 if(!isset($_SESSION['Email']))
 {
 
    header('location: login.php');
 
 }
 
?>
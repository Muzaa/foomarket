<?php
include 'config.php';
include 'header.php';
session_start();

if(isset($_POST['Email']))
{
 
$sql = "SELECT * FROM `user` WHERE Email = '$_POST[Email]' AND password = '$_POST[password]'";

//echo $sql;
//exit;

$qid = mysql_query($sql);



    if($data = mysql_fetch_array($qid))
    {
      $_SESSION['Email'] = $data['Email']; 
      $_SESSION['Name'] = $data['Name'];  

      
      header('location: index.php');
    }
    else
    {
       $error = "Invalid User OR Password";
       
                     echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Invalid User OR Password')
            window.location.href='login.php';
            </SCRIPT>");
       
    }
 
}


?>


      <h4>Login</h4>
            <div class="loginform">
            <form data-ajax="false" action="login.php" method="post" data-role="form" >
            <label>Email:</label>
            <input type="text" name="Email" id="Email" value="" class="form_input required" />
            <label>Password:</label>
            <input type="password" id="password" name="password" value="" class="form_input required" />
            <input type="submit" name="submit" class="form_submit" id="submit" value="Login" />
            
            
            </form>
            </div>
    <div ><a href="register.php">Register</a></div>
    
      <div class="close_popup_button_gray"><a href="#" class="close-popup">Close</a></div>


    <?php
    include 'footer.php';
    
    ?>
<?php
include 'config.php';
include 'header.php';


   session_start();
   
   
if(isset($_POST['Email']))
{

  
$sql = "SELECT * FROM `user` WHERE Email = '$_POST[Email]' AND password = '$_POST[password]'";
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
    }

  
}


?>

    <div class="popup popup-login">
    <div class="content-block">
      <h4>Login</h4>
            <div class="loginform">
            <form id="LoginForm" method="post">
            <label>Username:</label>
            <input type="text" name="Username" value="" class="form_input required" />
            <label>Password:</label>
            <input type="password" name="Password" value="" class="form_input required" />
            <input type="submit" name="submit" class="form_submit" id="submit" value="Login" />
            </form>
            </div>
      <div class="close_popup_button_gray"><a href="#" class="close-popup">Close</a></div>
    </div>
    </div>

    <?php
    include 'footer.php';
    
    ?>
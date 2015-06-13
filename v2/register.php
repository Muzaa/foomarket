<?php

include 'config.php';

   session_start();
   
   
if(isset($_POST['Email']))
{
    $sql = "SELECT * FROM `user` WHERE Email = '$_POST[Email]' LIMIT 1";
    $qid = mysql_query($sql);
    
    //echo $sql;
    //exit;
    
    if($data = mysql_fetch_array($qid))
    {
     		 echo "<script>
		 alert('Email Already Exists. Please Register with new email.');

		 </script>
		 ";	    
			
    }

    else
    {
        $sql = "INSERT INTO `foorental`.`user` (
                `uid` ,
                `Name` ,
                `Phone` ,
                `Email`,
                `password`
                )
                VALUES (
                NULL , '$_POST[Name]', '$_POST[Phone]', '$_POST[Email]', '$_POST[password]'
                )";
        
        $qid = mysql_query($sql);
        
        
        
              $_SESSION['Email'] = $_POST['Email']; 
              $_SESSION['Name'] = $_POST['Name'];  

              
              echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Succesfully Registered')
            window.location.href='index.html';
            </SCRIPT>");
        
        
    
      
    }
}

?>

<div class="pages">
  <div data-page="projects" class="page no-toolbar no-navbar">
    <div class="page-content">
    
     <div class="navbarpages">
       <div class="navbar_home_link"><a href="index.html"><img src="images/icons/white/home.png" alt="" title="" /></a></div>
       <div class="navbar_page_center">Contact</div>
       <div class="menu_open_icon_white"><a href="#" class="open-panel"><img src="images/menu_open.png" alt="" title="" /></a></div>
     </div>
     <div id="pages_maincontent">
      
      <h2 class="page_subtitle">Get in touch</h2>

            <h2 id="Note"></h2>
            <div class="contactform">
            <form data-ajax="false" action="register.php" method="post" data-role="form" >
            <label>Name:</label>
            <input type="text" name="Name" id="Name" value="" class="form_input required" />
            <label>Phone:</label>
            <input type="text" name="Phone" id="Phone" value="" class="form_input required phone" />            
            <label>Email:</label>
            <input type="text" name="Email" id="Email" value="" class="form_input required email" />
            <label>Password:</label>
            <input type="password" name="password" id="password" value="" class="form_input required password" />            
            <input type="submit" name="submit" class="form_submit" id="submit" value="Send" />
            <input class="" type="hidden" name="to"  value="youremail@yourwebsite.com" />
            <input class="" type="hidden" name="subject" value="Contacf form message" />
            <label id="loader" style="display:none;"><img src="images/loader.gif" alt="Loading..." id="LoadingGraphic" /></label>
            </form>
            </div>
            
      </div>
      
      
    </div>
  </div>
</div>
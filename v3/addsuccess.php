<?php
include "config.php";
?>
<div class="pages">
  <div data-page="projects" class="page no-toolbar no-navbar">
    <div class="page-content">
    
     <div class="navbarpages">
       <div class="navbar_home_link"><a href="index.php"><img src="images/icons/white/home.png" alt="" title="" /></a></div>
       <div class="navbar_page_center">Contact</div>
       <div class="menu_open_icon_white"><a href="#" class="open-panel"><img src="images/menu_open.png" alt="" title="" /></a></div>
     </div>
     <div id="pages_maincontent">
      
      <h2 class="page_subtitle">Thank you, your item is inserted into our database.</h2>
<div class="clear"></div>

<h5>
     <?php
     
     
     $qid = mysql_query("select * from inventory a , user b where a.userid = b.uid AND iid = $_GET[id]");

	      if($data = mysql_fetch_array($qid))
	      {
              //  var_dump($data);
                
                echo "<img src='uploads/$data[iid].jpg'> <Br>
                
              Item Description :  $data[Name]
              <br>

Rate : $data[Rate] USD
<br>

Deposit : $data[Deposit] USD

";
                
                
              }
     ?>
</h5>

     
      <br>
      <div class="clear"></div>
      <br>
        
          <div class="call_button"><a href="index.php">Back to Home</a></div>   
      </div>
      
      
    </div>
  </div>
</div>
<?php
         
     include "config.php";    
         
         ?>
<div class="pages">
  <div data-page="projects" class="page no-toolbar no-navbar">
    <div class="page-content">
    
     <div class="navbarpages">
       <div class="navbar_home_link"><a href="index.php"><img src="images/icons/white/home.png" alt="" title="" /></a></div>
       <div class="navbar_page_center">Rent Something</div>
       <div class="menu_open_icon_white"><a href="#" class="open-panel"><img src="images/menu_open.png" alt="" title="" /></a></div>
     </div>
     
     <div id="pages_maincontent">
      
      <h2 class="page_subtitle">People Trend Near You</h2><br><br>
               
       
   
      
      <?php
      //simple concept of the idea.
      $sql = "SELECT count(1),`searchterm` FROM `trend` GROUP BY searchterm ORDER BY count(1) DESC  LIMIT 10";
      
      $qid = mysql_query($sql);
      
      while($data = mysql_fetch_array($qid))
      {
        
        $random = rand(2,4);
         $random = $random * 10;
        echo "<span style='font-size:".$random."pt' ><a onclick=\"window.location = 'redirect.php?q=$data[searchterm]';\" href='#'>
        ".ucfirst (strtolower($data['searchterm']))." </a> </span>";
      }
      
      ?>
      
      
    </div>
  </div>
</div>
</div>
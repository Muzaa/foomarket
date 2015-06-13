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
      
      <h2 class="page_subtitle">Rental Trend Near You</h2><br><br>
               
       
   
      
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
      
       <div class="clear"></div><Br><Br>
        <h2 class="page_subtitle">Market Analysis</h2><br>
      
      <style>
        #footable td
        {
          border:1px solid black;
          text-align:center;
          
        }
      </style>
      <table width='100%' id='footable' border='1'>

<thead>
<tr>



<th>
Item Description
</th>

<th>
Popularity
</th>

<th>
Purchase Price
</th>

<th>
Average Price / Hour
</th>



</thead>

      
            <?php
            
            $qid = mysql_query("select * from inventory a , user b where a.userid = b.uid order by a.rate DESC");


$gotornot = mysql_num_rows ( $qid );

	      while($data = mysql_fetch_array($qid))
	      {
                ?>
              <tr>  
                <td>
<?php echo $data['Description'] ?>
</td>

<td>
<?php echo rand(1,100);?>%
</td>

<td>
$<?php echo rand(100,500);?>
</td>

<td>
$<?php echo $data['Rate'] ?>
</td>
              </tr>

                <?php
              }
  
      
      ?>
      </table>
    </div>
  </div>
</div>
</div>
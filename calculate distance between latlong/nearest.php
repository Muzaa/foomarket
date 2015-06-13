<?php
include "../config.php";        

$ref = array($_GET['lat'], $_GET['long']);
	      
	      $sql = "SELECT * FROM api ORDER BY api_id DESC LIMIT 1";
	      $qid = mysql_query($sql);
	      $data = mysql_fetch_array($qid);
	      
	      $cat_id = $data['cat_id'];
	      $date_id = $data['date_id'];
	      
	      $sql = "SELECT * FROM category WHERE cat_id = $cat_id";
	      $qid = mysql_query($sql);
	      $data = mysql_fetch_array($qid);
	      
	      $apitime = $data['cat_name'];
	      
	      
	      $sql = "SELECT * FROM date WHERE date_id = $date_id";
	      $qid = mysql_query($sql);
	      $data = mysql_fetch_array($qid);
	      
	      $apidate = @date("d M Y",strtotime($data['date_date']));
	      
	      
	      $sql = "SELECT * FROM location";
	      $qid = mysql_query($sql);
	      while($data = mysql_fetch_array($qid))
	      {
		
		  $location[$data['loc_id']]['lat']     = $data['loc_lat'];
                  $location[$data['loc_id']]['long']    = $data['loc_long'];
		  $location[$data['loc_id']]['name']    = "$data[loc_lokasi]";
		  $location[$data['loc_id']]['state']    = "$data[loc_state]";
		  
                  $distance[$data['loc_id']] = getdistance($_GET['lat'], $_GET['long'],  $data['loc_lat'], $data['loc_long'], "K");
	      }
	      
              
              asort($distance);
	      

              
              
              
                      function getdistance($lat1, $lon1, $lat2, $lon2, $unit) { 

  $theta = $lon1 - $lon2; 
  $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)); 
  $dist = acos($dist); 
  $dist = rad2deg($dist); 
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);

  if ($unit == "K") {
    return round($miles * 1.609344); 
  } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
        return $miles;
      }
}






        
	      
	      $sql = "SELECT * FROM api WHERE date_id = $date_id AND cat_id = $cat_id";
	      $qid = mysql_query($sql);
	      $coma = "";
	      while($data = mysql_fetch_array($qid))
	      {
                $api[$data['loc_id']] = $data['api_data'];
	      }
	     

             
             
             
             
                           //var_dump($distance);
              
              $i = 1;
              foreach($distance as $key => $kilometer)
              {
              //first item
              if($i == 1)
              {
                ?>
                                <div data-controltype="htmlblock">
				    <h3>MY NEAREST LOCATION</h3>
                                <div style="width:100%; min-height:100px;background-color:#d6e4ec;margin-bottom:5px;">
				
                                    <div style="background-color:<?php echo get_color($api[$key])?>;text-align:center; line-height: 100px; color:white; font-size:35px; height:100px; width:100px; float:right">
                    
                                            
                                            <?php echo $api[$key];?>&nbsp;
                                    </div>
                                
                                
                                 <div style="padding:5px;">
				    
                                      <span style="font-size:18px;font-weight:bold;">
                                            
                                        <a data-transition="slide" href="location.php?id=<?php echo $key?>">
			
                                        <?php echo $location[$key]['name']; ?> </a> 
                                        
                                        </span><br>
                                   
                                      
                
                                  
                                    <span style="font-size:12px;">
                                        <b> <?php echo $location[$key]['state']; ?></b>
                                         <br>
                                            <?php echo $apitime ?>, <?php echo $apidate;?><br> 
                                            <b><?php echo $kilometer." KM</b> from my location"; ?>
                                    </span>
                                    </div>
				    
                                      </div>
                                </div>
                            </div>
                   <?php
                   $i++;
              }	      
else
{
$bystate[$key] = $location[$key]['state'];
}
}

//order by state.
              asort($bystate);
              $i = 1;
	      $curstate = "";
              foreach($bystate as $key => $state)
              {
	       ?>   
                                <div data-controltype="htmlblock">
				    <?php
				    if($curstate != $state)
				    {
				    echo "<h3>$state</h3>";
				    $curstate = $state;
				    }
				    ?>
                                <div style="width:100%; min-height:80px;background-color:#e4ece5;margin-bottom:5px;">
				
                                    <div style="background-color:<?php echo get_color($api[$key])?>;text-align:center; line-height: 80px; color:white; font-size:35px; height:80px; width:100px; float:right">
                    
                                            
                                            <?php echo $api[$key];?>&nbsp;
                                    </div>
                                
                                
                                 <div style="padding:5px">
				    
                                      <span style="font-size:18px;font-weight:bold;">
                                            
                                        <a data-transition="slide"  href="location.php?id=<?php echo $key?>">       
                                        <?php echo $location[$key]['name']; ?></a>
                                        
                                        </span><br>
                                   
                                      
                
                                  
                                    <span style="font-size:12px;">
                                         
                                            <?php echo $apitime ?>, <?php echo $apidate;?><br> 
                                            <b><?php echo $distance[$key]." KM</b> from my location"; ?>
                                    </span>
                                    </div>
				    
                                      </div>
                                </div>
                            </div>
    
	    <?php 
	      } 
         
         
         function get_color($tx)
         {
            // color mengikut citarasa.. chewah!
if($tx == 0 )
{
 return "rgb(0, 0, 0)";
}
else if($tx >= 1 && $tx <= 50)
{
 return "rgb(0, 0, 255)";
}
else if($tx >= 51 && $tx <= 100)
{
 return "rgb(46, 139, 87)";
}
else if($tx >= 101 && $tx <= 200)
{
 return "rgb(255,205,0)";
}
else if($tx >= 201 && $tx <= 300)
{
 return "rgb(245,120,37)";
}
else 
{
 return "rgb(153,0,0)";
}
         }
         
         
         
                  function get_flabel($tx)
         {
            // color mengikut citarasa.. chewah!
if($tx == 0 )
{
 return "Good";
}
else if($tx >= 1 && $tx <= 50)
{
 return "Good";
}
else if($tx >= 51 && $tx <= 100)
{
 return "Morderate";
}
else if($tx >= 101 && $tx <= 200)
{
 return "Unhealthy";
}
else if($tx >= 201 && $tx <= 300)
{
 return "Very Unhealthy";
}
else 
{
 return "Hazardous";
}
         }
              
              
              
        
        ?>
        
        
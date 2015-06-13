<?php

include "config.php";

//var_dump($_GET);
//exit;

// calculate distance between 2 location foorental!!!
                      function getdistance($lat1, $lon1, $lat2, $lon2, $unit)
		      { 

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





$Description = $_GET['q'];

$qid = mysql_query("select * from inventory a , user b where a.userid = b.uid AND a.Description like '%$Description%' order by a.rate DESC");

	      while($data = mysql_fetch_array($qid))
	      {
		
		  $fooitem[$data['iid']]['Description']     	= $data['Description'];
                  $fooitem[$data['iid']]['Name']    		= $data['Name'];
		  $fooitem[$data['iid']]['Rate']    		= $data['Rate'];
		  $fooitem[$data['iid']]['Deposit']    		= $data['Deposit'];
		  $fooitem[$data['iid']]['latitude']    	= $data['latitude'];
		  $fooitem[$data['iid']]['longitude']    	= $data['longitude'];
		  
                  $distance[$data['iid']] = getdistance($_GET['lat'], $_GET['long'],  $data['latitude'], $data['longitude'], "N") * 1000;
	      }
	      
              
              asort($distance);
	      
	      
	      



              foreach($distance as $key => $meters)
              {
?>
  <li>
          <div class="feat_small_icon"><img src="uploads/<?php echo $key ?>.jpg" alt="" title="" /></div>
          <div class="feat_small_details">
          <h4><?php echo $fooitem[$key]['Description'] ?></h4>
          <p>Owner : <?php echo $fooitem[$key]['Name'];?>
	  
	  <?php
	  if(empty($fooitem[$key]['Deposit']))
	  {
	echo "<b>( No Deposit )</b>";	
	  }
	  else
	  {
	  ?>
	   <b>( $<?php echo $fooitem[$key]['Deposit'];?> Deposit )</b>
	   <?php
	  }
	   ?>
	   <br>
		Item Distance : <?php echo round($meters ,2) ?> Meters
	  </p>
          <a href="photos.html" class="button_small">$<?php echo $fooitem[$key]['Rate'];?> per hour
	  
	 </a>
          </div>
          </li>
  
  <?php
  
}
  ?>
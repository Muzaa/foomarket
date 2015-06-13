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
      
      <h2 class="page_subtitle">You have rent this item!</h2>
<div class="clear"></div>

<h5>
     <?php
     
     
     $qid = mysql_query("select * from inventory a , user b where a.userid = b.uid AND iid = $_GET[id]");

	      if($data = mysql_fetch_array($qid))
	      {
              //  var_dump($data);
                
                echo "<img height='100px' src='uploads/$data[iid].jpg'> <Br>
                
              Item Description :  $data[Name]
              <br>

Rate : $data[Rate] USD per hour.
<br>

Deposit : $data[Deposit] USD

";
                
                
              }
     ?>
</h5>

     
      <br>
      <div class="clear"></div>
      <br>

	<div class="call_button"><a onclick="window.location = 'whatsapp://send?text=Hi&abid=10'" >Contact Owner via Whatsapp! &rarr;</a></div>  <br>
          <div class="call_button"><a class='back' > &larr; Back</a></div>
	  <br><br>
	  <img src='tm.png'><br>
	  <divstyle='width:200px'>
	  POST https://192.168.1.39:8543/sandbox/rest/httpsessions/tts2Note/v1.0?app_key=iwfAykmQ9unP4sJawtxrfsg5LAMa&access_token=e2d06883b6ce4c8feb26775714f17477&format=json HTTP/1.1
{"calleeNbr":"+60136286815","displayNbr":"+601546010194","languageType":"0","replayTimes":"1","ttsContent":" VGhpcyBpc yBmb28gcmVudG FsIGRvdCBjb20sIHl vdSBoYXZlIG5ldyByZXF1 ZXN0IGZvciBpdGVtIG RyaWxsIHBsZWFzZSByZXNwb 25lIGltaWRpYX RlbHkuIHRo YW5rIHlvdQ=="}
	  </div>
      </div>
      
      
      
      
    </div>
  </div>
</div>
<div class="pages">
  <div data-page="projects" class="page no-toolbar no-navbar">
    <div class="page-content">
    
     <div class="navbarpages">
       <div class="navbar_home_link"><a href="index.php"><img src="images/icons/white/home.png" alt="" title="" /></a></div>
       <div class="navbar_page_center">Contact</div>
       <div class="menu_open_icon_white"><a href="#" class="open-panel"><img src="images/menu_open.png" alt="" title="" /></a></div>
     </div>
     <div id="pages_maincontent">
      
      <h2 class="page_subtitle">Insert new item to inventory</h2>

            <h2 id="Note"></h2>
            <div class="contactform">
            <form class="cmxform" id="add1" enctype="multipart/form-data"  onsubmit="copylatlong()" method="post" action="addprocess.php">
              
              <!-- <iframe src="mylocation.html" width="100%" height="200" frameborder="0" style="border:0"></iframe> 
      <br>-->
           <div class="clear"></div>
            <label>Upload Picture:</label>
              <img  id="blah" src="images/icons/black/photos.png" alt="Take Picture!"  />
              
                    <input type="file" id="imgInp"  name="userfile" accept="image/*;capture=camera">
                <div class="clear"></div>       
      <img src='lawn.jpg' height='100px'>
        
              <input type="hidden" id="latadd" name="latadd" value="" class="form_input required" />
                <input type="hidden" id="longadd" name="longadd" value="" class="form_input required" />
                             
                             
            <label>Description:</label>
            <input type="text" name="Description" value="Lawn Mower" class="form_input required" />
            <label>Rate per hour [USD]:</label>
            <input type="text" name="Rate" value="" placeholder="how much per hour?" class="form_input required" />
            <label>Deposit (if any) [USD]:</label>
            <input type="text" name="Deposit" value="" class="form_input required" />
            
            <label>You Remaining Credits:</label>
            <div class="clear"></div>
            <div style='background-color:#ffb5a2; padding: 10px;'>
            <span style="font-size:30pt;padding:5px:"><b>50</span> <span style="font-size:20pt;padding:5px:"> Credits</b> Remaining. <b><br>
            <a href="#" data-popup=".popup-social" class="open-popup" >(Top-up Your Credit)</a></b></span><br>
            <b>1 Credit</b> will be deducted for each advertisment.
            </div>
            <input type="submit" name="submit" class="form_submit" id="submit" value="Send" />
            <label id="loader" style="display:none;"><img src="images/loader.gif" alt="Loading..." id="LoadingGraphic" /></label>
            
            <input type='hidden' name='' value=''>
            </form>
            </div>
            

      <div class="call_button"><a href="index.php">Back to Home</a></div>    
      
      <div class="clear"></div>
      </div>
      
      
    </div>
  </div>
</div>
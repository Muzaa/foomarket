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
            <form class="cmxform" id="add1" enctype="multipart/form-data"  method="post" action="addprocess.php">
              
              <img  id="blah" src="images/icons/black/photos.png" alt="Take Picture!"  />
              
                    <input type="file" id="imgInp"  name="userfile" accept="image/*;capture=camera">
                            <script>
        function readURL(input) {
    if (input.files && input.files[0]) { 
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$("#imgInp").change(function(){
  alert("ok"),
    readURL(this);
});
       </script> 
            <label>Description:</label>
            <input type="text" name="description" value="" class="form_input required" />
            <label>Rate per hour [USD]:</label>
            <input type="text" name="rate" value="" placeholder="how much per hour?" class="form_input required" />
            <label>Deposit (if any) [USD]:</label>
            <input type="text" name="deposit" value="0" class="form_input required" />
            <input type="submit" name="submit" class="form_submit" id="submit" value="Send" />
            <label id="loader" style="display:none;"><img src="images/loader.gif" alt="Loading..." id="LoadingGraphic" /></label>
            </form>
            </div>
            

      <div class="call_button"><a href="index.php">Back to Home</a></div>    
      
      <div class="clear"></div>
      </div>
      
      
    </div>
  </div>
</div>
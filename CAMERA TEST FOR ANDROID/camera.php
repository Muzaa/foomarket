<html>
    
    
<head>

<!-- Include meta tag to ensure proper rendering and touch zooming -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Include jQuery Mobile stylesheets -->
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">

<!-- Include the jQuery library -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include the jQuery Mobile library -->
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>

    <body>
        
        <form enctype="multipart/form-data" action="upload.php" method="POST">
                        <input type="file" id="imgInp"  name="userfile" accept="image/*;capture=camera">
                            
                                <img id="blah" src="#" alt="Take Picture!" width="50%" />
                            

       <input type="submit" value="Send File" />
       
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
    readURL(this);
});
       </script>
</form>
        
        


         
        </form>
        
    </body>
</html>
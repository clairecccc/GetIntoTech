

<!DOCTYPE html>
<html>
    <body>
         <form action="UploadPage.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="10000000"/>
            <input type="file" name="file"/><br><br>
            <input type="submit" value="send">
        </form>
         
    <?php
        
        const InputKey='file';
        
        
        const AllowedTypes=['text/xml','text/xml'];
        
        if (empty($_Files[InputKey])) {
            
            die("File Missing!");
        }
         
        if ($_Files[InputKey]['error']>0) {
            
            die("Handle the error");
        }
        
        if (!in_array($_Files[InputKey]['type'],AllowedTypes)) {
            
            die("handle File Type Not Allowed");
        }
        
        $tmpFile = $_FILES[InputKey]['tmp_name'];
        
        $dstFile = 'uploads/'.$_Files[InputKey]['name'];
                
        if (!move_upload_file($tmpFile,$dstFile)) {
            
            die("Handle Error");
        }   
      
        if (file_exists($dstFile)){
       echo "Successful upload";
        
        }
       
       ?> 
    </body>  
        
</html>

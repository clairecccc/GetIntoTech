
<!DOCTYPE html>
<html>
    <form action="UploadPage.php"
    method="post"
    enctype="multipart/form-data">

        <input type="hidden"
               name="MAX_FILE_SIZE"
               value="10000000"/>

        <input type="file" name="myfile"/>
        <input type="submit" name="send"/>
    </form>
</html>

<?php
    const InputKey= 'myfile';
    const AllowedTypes = ['text/xml', 'image/jpeg', 'image/jpg'];
    if (empty($_FILES[InputKey])){
        die("File Missing!");
    }
    if($_FILES[InputKey]['error']>0){
        die ("Handle the error!");
    }
    if (!in_array ($_FILES[InputKey]['type'], AllowedTypes)){
        die ("Handle File Type Not Allowed");
    }
    
    $tmpFile = $_FILES[InputKey]['tmp_name'];

    $dstFile = 'Uploads/'.$_FILES[InputKey]['name'];
    

    if (!move_uploaded_file ($tmpFile, $dstFile)) {
        die ("Handle Error"); 
    }
    
          
    
      
    if (file_exists($dstFile)){
        echo "Successful upload";
        //            unlink($tmp);
    }
        
print_r($tmpFile);
print_r($dstFile);
print_r($_FILES);

<?php 
if($grade=10){
$teacher=mysqli_real_escape_string($connection,$_POST["Teacher"]);
$course=mysqli_real_escape_string($connection,$_POST["Course"]);
$description=mysqli_real_escape_string($connection,$_POST["Description"]);
$targetDir = "grade12_img/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $run ="INSERT into Grade12 (teacher,course,description,T_image,uploaded_on) VALUES ('$teacher','$course','$description','".$fileName."', NOW())";
            $insert=mysqli_query($connection,$run);
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
    }
?>
       
<?php
// Include the database configuration file
include 'dbConfig.php';
$statusMsg = '';

$targetDir = "C:\wamp64\www\Company_Maintenance_System\upload\ ";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir.$fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
$t_id=$_POST['t_id'];
$subject=$_POST['subject'];
$uploadOk = 1;

// Check if image file is a actual pdf or fake pdf
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType,$allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"],$targetFilePath)){
            // Insert file name into database
            $insert = $db->query("INSERT into submission(Task_Id,Submission_Subject,File_Name,Uploaded_On) VALUES ('".$t_id."','".$subject."','".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file  ".$fileName."  has been uploaded successfully.";
            
            }else{
                $statusMsg = "File upload failed, please try again.";
            }
       }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.";
    }
}else{
    $statusMsg = "Please select a file to upload.";
}
echo $statusMsg;
echo "<br>";
?>
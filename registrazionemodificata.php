<?php
  $host = "127.0.0.1:3307";
   $username = "root";
   $password = "";
   $database = "approcciavanzatiprogetto";
 
 $profile=$_REQUEST["profilo"];
 $fotoinserita= $_FILES["fileToUpload"]["name"];
 $conn = new mysqli($host,$username,$password,$database);

   $sql2="select * from profilo where usr=\"$profile\" ";
     $result = $conn->query($sql2);
	  $row = $result->fetch_assoc();
    $foto= $row["imgprofilo"];
$profiloagg=$row["usr"];
	$target_dir = "uploadimg/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
     $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
   $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 3000000000) {
    
$uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
 header("Location:profilo.php?profilopagina=$profiloagg");
	   exit();
	   }

	 
	 
	 // if everything is ok, try to upload file
else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    
     $host = "127.0.0.1:3307";
   $username = "root";
   $password = "";
   $database = "approcciavanzatiprogetto";
 
 $profile=$_REQUEST["profilo"];
 $fotoinserita= $_FILES["fileToUpload"]["name"];
 $conn = new mysqli($host,$username,$password,$database);

   $sql1="select * from profilo where usr=\"$profile\" ";
     $result = $conn->query($sql1);
	  $row = $result->fetch_assoc();
    $foto= $row["imgprofilo"];
  $profiloagg=$row["usr"];
	$sql="update profilo set imgprofilo='$fotoinserita' where usr='$profiloagg' ";
	   $result = $conn->query($sql);
	  
	 header("Location:profilo.php?profilopagina=$profiloagg");
 
} 
 
}
?>
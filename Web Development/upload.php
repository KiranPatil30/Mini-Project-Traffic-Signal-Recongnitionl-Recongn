<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    // echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";

//     echo '<script type="text/javascript">
//        window.onload = function () { alert("The file has been uploaded successfully ."); } 
// </script>';

    // this below line is for opening the same page again
    include("index.html");  
} else {
    echo "Sorry, there was an error uploading your file.";
}
?>
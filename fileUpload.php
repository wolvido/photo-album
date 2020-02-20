<?php
    session_start();
    $directry = $_SESSION["directory name"];

    $currentDir = getcwd();
    $uploadDirectory = "/{$directry}/";

    $errors = []; 

    $fileExtensions = ['jpeg','jpg','png']; 

    $fileName = $_FILES['myfile']['name'];
    $fileSize = $_FILES['myfile']['size'];
    $fileTmpName  = $_FILES['myfile']['tmp_name'];
    $fileType = $_FILES['myfile']['type'];
    $tmp = explode('.',$fileName);
    $fileExtension = strtolower(end($tmp));

    $uploadPath = $currentDir . $uploadDirectory . basename($fileName); 

    if (isset($_POST['submit'])) {

        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
        }

        if ($fileSize > 2000000) {
            $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        }
        else{

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

            if ($didUpload) {
                echo "The file " . basename($fileName) . " has been uploaded";
            } else {
                echo "something is wrong check the file size(must not exceed 2mb)";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
                }
            }
        }
    }

?>
<?php
include 'include/check.php';
include '../include/db.php';
$i = $_POST["id"];

$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$img = basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        //echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;

        $query2 = "UPDATE corder set imglink = '$img',status='4'  where transactionid = '$i'";
        mysqli_query($connect,$query2) or die('Error: ' . mysqli_error());
        echo '<script type="text/javascript">window.location = "'; echo 'order.php?id=';echo $i; echo '&s=t&img='; echo $img ;
        echo '"</script>';
    } else {
        echo '<script type="text/javascript">window.location = "'; echo 'order.php?id=';echo $i; echo '&s=f"</script>';
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo '<script type="text/javascript">window.location = "'; echo 'order.php?id=';echo $i; echo '&s=f"</script>';
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
   echo '<script type="text/javascript">window.location = "'; echo 'order.php?id=';echo $i; echo '&s=f"</script>';
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo '<script type="text/javascript">window.location = "'; echo 'order.php?id=';echo $i; echo '&s=f"</script>';
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
echo '<script type="text/javascript">window.location = "'; echo 'order.php?id=';echo $i; echo '&s=f"</script>';
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

           $query2 = "UPDATE corder set imglink = '$img', status='4'  where transactionid = '$i'";
        mysqli_query($connect,$query2) or die('Error: ' . mysqli_error());
         echo '<script type="text/javascript">window.location = "'; echo 'order.php?id=';echo $i; echo '&s=t&img='; echo $img ;
        echo '"</script>';
    } else {
        echo '<script type="text/javascript">window.location = "'; echo 'order.php?id=';echo $i; echo '&s=f"</script>';
    }
}
?>

<?php
session_start();
require_once "connection.php";
$msg="";
if(isset($_POST['upload']))
{
    $target="./images/". md5(uniqid(time())).basename($_FILES['image']['name']);
    $text=$_POST['text'];
    $sql="INSERT INTO images(title, image, uploader) VALUES('$text', '$target', '".$_SESSION['currentuser']."')";
    mysqli_query($con, $sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target))
    {
        header("Location: index.php");
    }
    else{
        $msg="Vai! Vai! Vai! Vai! Vai! Vai! Vai! Vai! Vai! Vai! Vai! Vai!";
        echo $msg;
    }
}
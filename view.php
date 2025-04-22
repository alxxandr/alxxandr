<?php
include 'connection.php';
$sql = "SELECT * FROM images WHERE id='($_GET['id'])'";
$query = mysqli_query($con, $sql) or die(mysqli_error($con));
$row=mysqli_fetch_array($query);
echo "Nume: ".$row['title']."<br>";
echo "Imagine: <img src=".$row['image']."><br>";
?>
<a href="index.php"></a>
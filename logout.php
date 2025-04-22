<?php
session_start();

setcookie('username', '', time() - 3600);
setcookie('password', '', time() - 3600);

unset($_SESSION['currentuser']);
header('Location: index.php');

?>
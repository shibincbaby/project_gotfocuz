<?php
session_start();
unset($_SESSION["username"]);
header_remove();
header("Location:../index.php#logd");
?>

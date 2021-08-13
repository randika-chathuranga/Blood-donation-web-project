<?php
session_start();
$user = unserialize($_COOKIE["user"]);
$user->delete();
setcookie("user", null ,1);
header("Location: /home");
?>
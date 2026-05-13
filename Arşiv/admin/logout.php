<?php

session_start();

session_destroy();

setcookie("admin_user", "", time() - 3600, "/");

header("Location: login.php");
exit;

?>
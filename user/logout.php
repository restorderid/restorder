<?php
session_start();
unset($_SESSION['email']);
session_destroy();

header("location: http://localhost/restorder/user/login.php");

?>
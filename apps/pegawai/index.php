<?php
	include "$_SERVER[DOCUMENT_ROOT]/restorder/control/User.php";
	$user = new User();
	$user->valhalaman();
    $email = $_SESSION['email'];
    $hak_akses = $_SESSION['hak_akses'];
    if($hak_akses != "manager"){
        header("location:../");
    }
    $_SESSION['business_name'] = $user->cek_business_name();
    $user->require_step();
    if(isset($_SESSION['requirestep']) && $_SESSION['requirestep'] == 1 && $hak_akses == "manager"){
        header("location:require_step.php");
    }
    else if($hak_akses==""){
        header("location:http://localhost/restorder/user/login.php");
    }
    
    
     
?>
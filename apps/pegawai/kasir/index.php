<?php
	include_once "$_SERVER[DOCUMENT_ROOT]/restorder/control/User.php";
	$user = new User();
	$user->valhalaman();
    $email = $_SESSION['email'];
    $hak_akses = $user->cek_role($email);
    if($hak_akses != "kasir"){
        header("location:http://localhost/restorder/user/login.php");
    }
?>

hai <?php echo $email; ?>
<br/>
<a href="http://localhost/restorder/user/logout.php">logout</a>
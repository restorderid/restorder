<?php
	include "../control/User.php";
	$user = new User();
	$user->valhalaman();
    $user->register_pegawai();
    $_SESSION['business_name'] = $user->cek_business_name();
    $access_rights = $_SESSION['access_rights'];
    $user->require_step();
    if(isset($_SESSION['requirestep']) && $_SESSION['requirestep'] == 0 && $access_rights=="manager"){
        header("location:dashboard.php");
    }else if($access_rights != "manager"){
        header("location:http://localhost/restorder/apps/pegawai/$access_rights/");
    }
    $email = $_SESSION['email'];
    
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title><?php echo $access_rights ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- CSS FORM LOAD -->
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="../asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="../asset/css/util-form.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="../asset/css/main-form.css">
        <!--===============================================================================================-->
        	<link rel="stylesheet" type="text/css" href="../asset/css/bootstrap.min.css">
        <!-- END CSS FORM -->
          
        
        <!-- NAVIGASI LINK & FONTSTYLE LOAD -->
        <!--===============================================================================================-->
        <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Oswald" rel="stylesheet">
        <!--===============================================================================================-->
        <link href="fonts/font-style.css" rel="stylesheet">
        <!--===============================================================================================-->
        <link href="../asset/css/navigasi.css" rel="stylesheet" type="text/css"/>    
        <!--===============================================================================================-->
        <!-- END NAVIGASI LINK & FONTSTYLE -->
    
    </head>
<body>
        <!--========== FORM ==========-->
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                
				<div class="login100-pic">
					<img src="../asset/img/medium/user-register.png" alt="IMG" width="30%;">
				</div>

				<form class="login100-form validate-form" method="GET" action="" onsubmit="return validasi_pass(this)">
					<span class="login100-form-warning">
						<small>Untuk dapat mengakses Aplikasi, Silahkan tambahkan setidaknya <b>1 Pegawai</b></small>
					</span>
                    
                    
                    <input type="text" name="business_name" value="<?php echo $user->cek_business_name(); ?>" hidden>
					<div class="wrap-input100 validate-input" data-validate = "Format email harus valid, contoh: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>
                    

					<div class="wrap-input100 validate-input" data-validate = "Kata sandi harus di inputkan">
						<input class="input100" type="password" name="password" placeholder="Kata sandi" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "hak akses">
						<select class="input100" type="text" name="access_rights" required>
						<span class="focus-input100"></span>
						<option class="symbol-input100" value="">
							Pilih Bagian / Divisi
						</option>
                            <option class="symbol-input100" value="supervisor">
							Supervisor
						</option>
                            <option class="symbol-input100" value="kasir">
							Kasir
						</option>
						    <option class="symbol-input100" value="pelayan">
							Pelayan
						</option>
					   </select>
                    </div>
                    
			            <br/>					
					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Daftarkan Pegawai
						</button>
					</div>
    
				</form>
				<!--========== END FORM ==========-->
			</div>
		</div>
	</div>

</body>
</html>

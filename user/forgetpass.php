<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1" name="viewport"/>
		<meta name="description" content="">
		<meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="format-detection" content="telephone=no">
		<title>Lupa Password</title>

        <!-- CSS FORM LOAD -->
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="../asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="../asset/css/util-form.css">
        <!--===============================================================================================-->
            <link rel="stylesheet" type="text/css" href="../asset/css/main-form.css">
        <!--===============================================================================================-->
        <!-- END CSS FORM -->
          
        
        <!-- NAVIGASI LINK & FONTSTYLE LOAD -->
        <!--===============================================================================================-->
        <link href="https://fonts.googleapis.com/css?family=Droid+Sans|Oswald" rel="stylesheet">
        <!--===============================================================================================-->
        <link href="../asset/fonts/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
        <!--===============================================================================================-->
        <link href="../asset/css/navigasi.css" rel="stylesheet" type="text/css"/>    
        <!--===============================================================================================-->
        <!-- END NAVIGASI LINK & FONTSTYLE -->
        
        
	</head>

	<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
                
				<div class="login100-pic">
					<img src="../asset/img/medium/forgetpassword.png" alt="IMG" width="30%;">
				</div>

				<form class="login100-form validate-form" method="POST" action="">
					<span class="login100-form-title">
						Lupa Password?
					</span>
                    
					<div class="wrap-input100 validate-input" data-validate = "Format email harus valid, contoh: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Ketik email anda">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user-circle" aria-hidden="true"></i>
						</span>
					</div>

					
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Reset Password
						</button>
					</div>

					
					<div class="text-center p-t-136">
						<a class="txt2" href="../">
							Kembali ke menu utama
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
    
				</form>
			</div>
		</div>
	</div>

<!-- load js script form -->
<!--===============================================================================================-->	
	<script src="../asset/form-vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../asset/form-vendor/bootstrap/js/popper.js"></script>
	<script src="../asset/form-vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../asset/form-vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../asset/form-vendor/tilt/tilt.jquery.min.js"></script>
<!--===============================================================================================-->
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="../asset/dashboard-libs/js/main-form.js"></script>
<!--===============================================================================================-->
<!-- end js script form -->
        
        
        
</body>
</html>
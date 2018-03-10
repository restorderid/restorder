<?php
	include_once "$_SERVER[DOCUMENT_ROOT]/anotero-platform/control/User.php";
	$user = new User();
	$user->valhalaman();
    $email = $_SESSION['email'];
    $hak_akses = $user->cek_role($email);
    if($hak_akses != "supervisor"){
        header("location:http://localhost/anotero-platform/user/login.php");
    }
?>


<!DOCTYPE html>
<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1" name="viewport"/>
		<meta name="description" content="">
		<meta name="author" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="format-detection" content="telephone=no">
		<title>Masuk Aplikasi</title>

        <!-- CSS -->
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="../../../asset/css/input-menu.css">
        <link rel="stylesheet" type="text/css" href="../../../asset/css/bootstrap.min.css">
        <!-- CSS  -->
          

 
        
	</head>

	<body>
        <div class="limiter">
        	<a href="http://localhost/restorder/user/logout.php">logout</a>	
        	<div class="container-menu">
			<div class="wrap-menu">
			<form class="form-menu">
				
				<br />
				<br />

				<div class="form-group">
					<label for="exampleInputFile">Upload Foto Menu</label>
					<input type="file" class="form-control-file" id="rounded-corner" aria-describedby="fileHelp">
				</div>
  				<div class="form-group">
    				<label for="inputAddress">Nama Menu</label>
    				<input type="text" class="form-control" id="rounded-corner" >
  				</div>
				<div class="form-group">
				    <label for="inputAddress2">Harga</label>
				    <input type="number	" class="form-control" id="rounded-corner" >
				</div>
				<div class="form-row">
					<div class="form-group col-md-6">
				    	<label for="inputState">Jenis Makanan</label>
				    	<select id="rounded-corner" class="form-control">
				     		<option selected>--</option>
				   			<option>Makanan</option>
				   			<option>Minuman</option>
				   		</select>
				    </div>
				    <div class="form-group col-md-6">
				    	<label for="inputState">Jenis Hidangan</label>
				    	<select id="rounded-corner" class="form-control">
				     		<option selected>--</option>
				   			<option>Appetizer</option>
				   			<option>Main Course</option>
				   			<option>Dessert</option>
				   		</select>
				    </div>
				</div>
				<div class="form-group">
			    	<label for="exampleFormControlTextarea1">Deskripsi Menu</label>
			    	<textarea class="form-control" id="rounded-corner" rows="3"></textarea>
			  	</div>
				<div class="form-group">
				    <label for="inputState">Status Makanan</label>
				    <select id="rounded-corner" class="form-control">
				     	<option selected>--</option>
				   		<option>Tersedia</option>
				   		<option>Kosong</option>
				   	</select>
				</div>
				<button type="submit" class="btn btn-primary" id="rounded-corner">Simpan</button>
			</form>
		</div>
		</div>
		</div>        
	</body>
</html>
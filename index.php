<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ANOTERO - PLATFORM</title>

    <link href="asset/css/custom/style.css" rel="stylesheet">

  </head>

  <body>
  	<ul class="topnav">
  		<div class="kiri">
  			<li><a href="#"> ANOTERO </a></li>
  		</div>
  		<div class="kanan">
  			<li class="right"><a href="user/login.php">Login</a></li>
  			<li class="right"><a href="#produk">Layanan</a></li>
  			<li class="right"><a href="#about">Tentang</a></li>
  			<li class="right"><a href="#home">Home</a></li>		
  		</div>
	</ul>

	<?php
        include "/control/User.php";
        $user = new User();
    ?>	
<html>
    <label>pilih resto</label>
	<form method="post" action="">
	    <select name="business_name">
		    <option>pilih</option>
		<?php $row = $user->nama_usaha();
            foreach($row as $rows) 
			{
            $usaha = $rows['business_name'];
		?>
		    <option value="<?php echo $usaha; ?>"><?php echo $usaha; ?></option>
		<?php } ?>
		</select>
		<input type="submit" value="cari">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
            <span class="login100-form-title">
						Daftar Menu
					</span>
                <div class="container-login100-form-btn">
					<table border="1">
                    <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th></th>
                    </tr>
					<?php
					    if(!isset($_POST['business_name'])){
                            $nama = "";
						    $harga = "";
						}else{
						    $menu = $user->menu($_POST['business_name']);
                            foreach($menu as $menus) 
			                {
                            $nama = $menus['menu_name'];
                            $harga = $menus['price'];   
					?>
					<tr align="center">
                        <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
                        <td><input type="text" name="harga" value="<?php echo $harga; ?>"</td>
                        <td><input type="number" name="jumlah"></td>
                        <td><input type="submit" value="tambah"></td>
                    </tr>
					<?php	}
						}
                    ?>
                    </table>
				</div>
                </form>
            </div>
        </div>
    </div>
</html>

    <footer class="foot bg-footer">
        <p class="m-0 text-center">Copyright &copy; ANOTERO.ID</p>
    </footer>

  </body>

</html>
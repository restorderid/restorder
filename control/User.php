<?php
/*
##########
File ini untuk jadi jembatan / penghubung supaya si user tidak langsung request data lewat model, tapi ke control dlu.
dari control nanti ambil nilai (return value) yang ada di objek model dari database
##########
*/

include "$_SERVER[DOCUMENT_ROOT]/restorder/model/User_model.php";

class User{
	
	public $email;
	public $password;
	public $business_name;
	public $type_business;
	public $city;
	public $status;
	public $address;
	
	public function register()
	{
		if($_POST)
		{
			$email 					= $_POST['email'];
			$encpass				= sha1($_POST['password']);
			$business_name 		    = $_POST['business_name'];
			$type_business 			= $_POST['type_business'];
			
			//menginisialisasi model usder
			$user 					= new User_model();
			
			//validasi untuk melihat nama usaha yang sama
			$valusaha = $user->lihat_business_name($business_name);			
			if($valusaha==0){
				//insert user
				$new_user				= $user->register_user($email,$encpass);	
				
				//insert profil
				$new_profil				= $user->register_profil($email, $business_name,$type_business);	
				
				if($new_user&&$new_profil)
				{			
					header("location: http://localhost/restorder/user/login.php");
				}
			}else{
				$msg = "nama usaha telah dipakai";
				return $msg;
			}
		}
	}
    
    public function register_pegawai()
	{
		if($_GET)
		{
			$email 					= $_GET['email'];
			$encpass				= sha1($_GET['password']);
            $access_rights              = $_GET['access_rights'];
			$business_name             = $_GET['business_name'];
            
			$user = new User_model();
            $new_user				= $user->register_pegawai($email,$encpass,$access_rights);				
			
			//insert profil
			$new_profil				= $user->register_profil($email, $business_name, null);	
			
			if($new_user&&$new_profil)
			{  
				header("location: http://localhost/restorder/user/dashboard.php");
			}
		}         
		}

    public function cek_business_name()
    {
        $user = new User_model();
        $email = $_SESSION['email'];
        return $user->cek_business_name($email);
    }
	
	public function validasi(){	
		if(isset($_POST['email']))
		{
			$email 					= $_POST['email'];
			$password 				= $_POST['password'];
			$encpass				= sha1($password);
			$user 					= new User_model();
				
			$validasi				= $user->validasi($email,$encpass);
            $access_rights          = $user->_role($email);
            
			if($validasi==0)
			{
				echo "username atau password salah";
			}
            else if($validasi==1 && $access_rights=="manager")
			{
				session_start();
				$_SESSION['email'] = $_POST['email'];
                $_SESSION['access_rights'] = $access_rights;
				header("location: http://localhost/restorder/user/require_step.php");
			}
            else if($validasi==1 && $access_rights=="kasir")
            {
                session_start();
				$_SESSION['email'] = $_POST['email'];
                $_SESSION['access_rights'] = $access_rights;
				header("location: http://localhost/restorder/apps/pegawai/kasir/");
            }
            else if($validasi==1 && $access_rights=="pelayan")
            {
                session_start();
				$_SESSION['email'] = $_POST['email'];
                $_SESSION['access_rights'] = $access_rights;
				header("location: http://localhost/restorder/apps/pegawai/pelayan/");
            }
            else if($validasi==1 && $access_rights=="supervisor")
            {
                session_start();
				$_SESSION['email'] = $_POST['email'];
                $_SESSION['access_rights'] = $access_rights;
				header("location: http://localhost/restorder/apps/pegawai/supervisor/");
            }
		}
	}
	
	public function valhalaman(){	
		session_start();
		if(!isset($_SESSION['email']))
		{
			header("location: http://localhost/user/login.php");
		}
	}	
	
	public function vallogin(){
        session_start();
		if(isset($_SESSION['email']))
		{		
			header("location: http://localhost/restorder/user/require_step.php");
		}
	}
    
	public function capca(){
	    $capcay = new User_model();
		$cap1 = $capcay->capca_register1();
		$cap2 = $capcay->capca_register2();
		$cap3 = $capcay->capca_register3($cap1,$cap2);
		$capca = array(
		    "cap1" => $cap1,
		    "cap2" => $cap2,
		    "cap3" => $cap3,
		);
		return $capca;
	}
    
    public function require_step()
    {
        $business_name = $_SESSION['business_name'];
        $user = new User_model();
        $validator = $user->require_step_($business_name);
        if($validator==1){
            $_SESSION['requirestep'] = 1;
        }else{
            $_SESSION['requirestep'] = 0;
        }
    }
    
    public function cek_role($email)
    {
        $user = new User_model();
        return $user->_role($email);
    }
    public function lihatpegawai($business_name)
    {
        $user = new User_model();
        return $user->lihat_data_pegawai($business_name);
    }
    public function cek_divisi($data,$email)
    {
        $user = new User_model();
        return $user->pegawaiby($data,$email);
    }
	public function menu($business_name){
	    $user = new User_model();
		return $user->lihat_menu($business_name);
	}
    public function nama_usaha()
	{
	    $user = new User_model();
		return $user->nama_usaha();
	}
}

?>
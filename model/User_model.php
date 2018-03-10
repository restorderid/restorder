<?php

/*
##########
File untuk pemodelan objek dari DATABASE USER - tb_user
##########
*/

//pemanggilan fungsi global database sehingga otomatis semua konek
include_once "$_SERVER[DOCUMENT_ROOT]/restorder/configuration/Database.php"; 

class User_model{
	
	public function __construct() //supaya semua kodingan di fungsi ini konek ke database global
	{
		$con = new Connection();
	}

	public function register_user($email,$password)
	{
		$con = new Connection();
		$con->setQuery("INSERT INTO `tb_user` (`id`, `email`, `password`, `access_rights`) VALUES (NULL, ?, ? ,'manager')");
		$con->bind(1, $email); //bind each value
		$con->bind(2, $password); // bind

		if($con->run()){
			return "Insert Berhasil";
		}else{
			return "Insert Gagal";
		}
	}
    
    public function register_pegawai($email,$password, $access_rights)
	{
		$con = new Connection();
		$con->setQuery("INSERT INTO `tb_user` (`id`, `email`, `password`, `access_rights`) VALUES (NULL, ?, ? ,?)");
		$con->bind(1, $email); //bind each value
		$con->bind(2, $password); // bind
		$con->bind(3, $access_rights); // bind

		if($con->run()){
			return "Insert Berhasil";
		}else{
			return "Insert Gagal";
		}
	}
    
   
    public function cek_business_name($email)
    {
		$con = new Connection();
		$con->setQuery("SELECT business_name FROM `tb_user_profil` where email=?");
		$con->bind(1, $email); //bind each value;
		$row = $con->SingleRow();
		return $row['business_name'];
		
    }
	
	public function register_profil($email, $business_name, $type_business)
	{
		$con = new Connection();
		$con->setQuery("INSERT INTO `tb_user_profil` (`id`, `email`, `business_name`, `type_business`, `city`, `status`, `address`) VALUES (NULL, ?, ?, ?, NULL, '0', NULL)");
		$con->bind(1, $email); //bind each value
		$con->bind(2, $business_name); // bind
		$con->bind(3, $type_business); // bind

		if($con->run()){
			return "Insert Berhasil";
		}else{
			return "Insert Gagal";
		}
	}
	
	public function cek_email($email)
	{
		$con = new Connection();
		$con->setQuery("SELECT COUNT(email) as _email FROM tb_user where email=?");
		$con->bind(1, $email); //bind each value;
		$row = $con->SingleRow();
		return $row;
	}
	

	public function lihat_data_pegawai($business_name)
	{
		$con = new Connection();
		$con->setQuery("SELECT * FROM `tb_user` join `tb_user_profil` on `tb_user`.email = `tb_user_profil`.email where business_name=?");
		$con->bind(1, $business_name); //bind each value;
		$row = $con->All();
		return $row;
		
	}
    
    public function pegawaiby($email)
    {
		$con = new Connection();
		$con->setQuery("SELECT email, access_rights FROM `tb_user` where email=?");
		$con->bind(2, $email); //bind each value;
		$row = $con->All();
		return $row;
    }
	
	public function validasi($email, $pass)
	{
		$con = new Connection();
		$con->setQuery("Select * from tb_user where email=? and password=?");
		$con->bind(1, $email); //bind each value;
		$con->bind(2, $pass); //bind each value;
		$row = $con->CountRow();
		return $row;
	}
    
    public function _role($email)
    {
		$con = new Connection();
		$con->setQuery("Select access_rights from tb_user where email=?");
		$con->bind(1, $email); //bind each value;
		$row = $con->SingleRow();
		return $row['access_rights'];		
    }
    
	public function capca_register1(){
	    $cap1 = (rand(0,10));
		return $cap1;
	}
	public function capca_register2(){
	    $cap2 = (rand(0,10));
		return $cap2;
	}
	public function capca_register3($a,$b){
		$hasil_capca= $a + $b;
	    return $hasil_capca;
	}
    
    public function require_step_($business_name)
    {
		$con = new Connection();
		$con->setQuery("SELECT count(business_name) as namausaha FROM tb_user_profil where business_name=?");
		$con->bind(1, $business_name); //bind each value;
		$row = $con->SingleRow();
		return $row['namausaha'];	
    }
	
	public function lihat_business_name($business_name){
		$con = new Connection();
		$con->setQuery("Select * from tb_user_profil where business_name=?");
		$con->bind(1, $business_name); //bind each value;
		$row = $con->CountRow();
		return $row;
	}
	public function lihat_menu($business_name){
	    $con = new Connection();
		$con->setQuery("Select * from `tb_menu` where business_name=?");
		$con->bind(1, $business_name); //bind each value;
		$row = $con->All();
		return $row;
	}
	public function nama_usaha(){
	    $con = new Connection();
		$con->setQuery("Select distinct business_name from `tb_menu`");
		$con->bind(1,""); //bind each value;
		$row = $con->All();
		return $row;
	}
	
	//tidak digunakan
	public function update($param1, $param2, $dst)
	{
		$sql = "";
		$query = mysql_query($sql);
		return $query;
	}
	//tidak digunakan
	public function _delete($param1)
	{
		$sql = "";
		$query = mysql_query($sql);
		return $query;
	}
	
}

?>
<?php 
	/**
	* 
	*/
	class LoginController
	{

		public function login(){
			$error='';
			require_once('views/pages/login.php');
		}

		public function error(){
			require_once('views/pages/error.php');
		}
		public function authentication(){
			$error='';
			if (!isset($_GET['username'])) {
				//return call('','error');
			}
			if(Login::find($_GET['username'],$_GET['password'])==0){
				$error="username atau password  tidak valid";
				require_once('views/pages/login.php');
			}else if(Login::find($_GET['username'],$_GET['password'])==1){
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=pelanggan_pemilik&action=pelangganPemilik");
			}else{
				$_SESSION['login_user']=$_GET['username'];
				header("location:index.php?controller=data_pelanggan&action=home");
			}
		}
		
}
?>
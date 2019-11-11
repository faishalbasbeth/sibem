<?php 
Class DataPelangganController{

	public function home(){
		$posts=Pelanggan::showAllPelanggan();
		require_once("views/pages/dataPelangganKasir.php");
		
	}

	public function deletePelanggan(){
		$posts=Pelanggan::deletePelanggan($_GET["id_pelanggan"]);
		header("location:index.php?controller=data_pelanggan&action=home");
	}

	public function addDataPelanggan(){
		$posts = Pelanggan::addDataPelanggan($_GET["nama_pelanggan"],$_GET["alamat_pelanggan"],$_GET["nohp_pelanggan"],$_GET["nopolisi"],$_GET["tipe"],$_GET["merk"],$_GET["nomesin"]);
		header("location:index.php?controller=data_pelanggan&action=home");
		
	}

	public function tampilAddPelanggan(){
		require_once("views/pages/formDataPelangganKasir.php");
	}

	public function editPelanggan(){
		$posts=Pelanggan::editPelanggan($_GET["id_pelanggan"]);
		require_once("views/pages/editDataPelangganKasir.php");
	}
	public function editDataPelanggan(){
		$posts=Pelanggan::editDataPelanggan($_GET["nama_pelanggan"],$_GET["alamat_pelanggan"],$_GET["nohp_pelanggan"],$_GET["nopolisi"],$_GET["tipe"],$_GET["merk"],$_GET["nomesin"],$_GET["id_pelanggan"]);
		header("location:index.php?controller=data_pelanggan&action=home");
	}


}

?>

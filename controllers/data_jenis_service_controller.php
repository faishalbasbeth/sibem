<?php 
Class DataJenisServiceController{

	public function jenis(){
		$posts=Jenisservice::showAllService();
		require_once("views/pages/dataJenisServicePemilik.php");
		
	}

	public function deleteJenisservice(){
		$posts=Jenisservice::deleteJenisservice($_GET["id_jenis"]);
		header("location:index.php?controller=data_jenis_service&action=jenis");
	}

	public function addJenisservice(){
		$posts = Jenisservice::addJenisservice($_GET["jenis_service"],$_GET["keterangan"],$_GET["harga"]);
		header("location:index.php?controller=data_jenis_service&action=jenis");
		
	}

	public function tampilJenisservice(){
		require_once("views/pages/formJenisServicePemilik.php");
	}

	public function editJenisservice(){
		$posts=Jenisservice::editJenisservice($_GET["id_jenis"]);
		require_once("views/pages/editJenisServicePemilik.php");
	}
	public function editDataJenisservice(){
		$posts=Jenisservice::editDataJenisservice($_GET["jenis_service"],$_GET["keterangan"],$_GET["harga"],$_GET["id_jenis"]);
		header("location:index.php?controller=data_jenis_service&action=jenis");
	}


}

?>

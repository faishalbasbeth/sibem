<?php 
Class DataPekerjaController{

	public function pekerja(){
		$posts=Pekerja::showAllPekerja();
		require_once("views/pages/dataPekerjaPemilik.php");
		
	}

	public function deletePekerja(){
		$posts=Pekerja::deletePekerja($_GET["id_user"]);
		header("location:index.php?controller=data_pekerja&action=pekerja");
	}

	public function addPekerja(){
		$posts = Pekerja::addPekerja($_GET["nama_user"],$_GET["hak_akses"],$_GET["level"],$_GET["password"]);
		header("location:index.php?controller=data_pekerja&action=pekerja");
		
	}

	public function tampilPekerja(){
		require_once("views/pages/formDataPekerjaPemilik.php");
	}

	// public function editJenisservice(){
	// 	$posts=Jenisservice::editJenisservice($_GET["id_jenis"]);
	// 	require_once("views/pages/editJenisServicePemilik.php");
	// }
	// public function editDataJenisservice(){
	// 	$posts=Jenisservice::editDataJenisservice($_GET["jenis_service"],$_GET["keterangan"],$_GET["harga"],$_GET["id_jenis"]);
	// 	header("location:index.php?controller=data_jenis_service&action=jenis");
	// }


}

?>

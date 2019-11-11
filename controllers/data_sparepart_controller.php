<?php 
Class DataSparepartController{

	public function sparepart(){
		$posts=Sparepart::showAllSparepart();
		require_once("views/pages/dataSparepartPemilik.php");
		
	}

	public function deleteSparepart(){
		$posts=Sparepart::deleteSparepart($_GET["id_sparepart"]);
		header("location:index.php?controller=data_sparepart&action=sparepart");
	}

	public function addSparepart(){
		$posts = Sparepart::addSparepart($_GET["nama_sparepart"],$_GET["stok"],$_GET["harga_satuan"]);
		header("location:index.php?controller=data_sparepart&action=sparepart");
		
	}

	public function tampilSparepart(){
		require_once("views/pages/formDataSparepartPemilik.php");
	}

	public function editSparepart(){
		$posts=Sparepart::editSparepart($_GET["id_sparepart"]);
		require_once("views/pages/editSparepartPemilik.php");
	}
	public function editDataSparepart(){
		$posts=Sparepart::editDataSparepart($_GET["nama_sparepart"],$_GET["stok"],$_GET["harga_satuan"],$_GET["id_sparepart"]);
		header("location:index.php?controller=data_sparepart&action=sparepart");
	}


}
?>

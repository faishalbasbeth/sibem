<?php 
Class DataServiceController{

	public function service(){
		$posts=Service::showAllService();
		require_once("views/pages/dataServiceKasir.php");
		
	}


	public function addService(){
		$posts = Service::addService($_GET["tanggal"],$_GET["nama_user"],$_GET["nama_pelanggan"],$_GET["keluhan"],$_GET["jenis_service"],$_GET["sparepart_satu"],$_GET["sparepart_dua"],$_GET["sparepart_tiga"],$_GET["harga_total"]);
		header("location:index.php?controller=data_service&action=service");
		
	}

	public function tampilService(){
		$posts1=Pekerja::showAllPekerja();
		$posts=Pelanggan::showAllPelanggan();
		$posts2=Jenisservice::showAllService();
		$posts3=Sparepart::showAllSparepart();
		require_once("views/pages/formDataServiceKasir.php");
	}

		public function servicePemilik(){
		$posts=Service::showAllService();
		require_once("views/pages/dataServicePemilik.php");
		
	}



}

?>

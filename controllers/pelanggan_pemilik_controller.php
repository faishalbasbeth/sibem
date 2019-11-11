<?php 
Class pelangganPemilikController{

	public function pelangganPemilik(){
		$posts=Pelanggan::showAllPelanggan();
		require_once('views/pages/dataPelangganPemilik.php');
	}


}

?>

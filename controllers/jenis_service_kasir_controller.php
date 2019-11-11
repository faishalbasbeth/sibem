<?php 
Class jenisServiceKasirController{

	public function jenisServiceKasir(){
		$posts=Jenisservice::showAllService();
		require_once('views/pages/dataJenisServiceKasir.php');
	}


}

?>

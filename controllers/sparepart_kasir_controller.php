<?php 
Class sparepartKasirController{

	public function sparepartKasir(){
		$posts=Sparepart::showAllSparepart();
		require_once('views/pages/dataSparepartKasir.php');
	}


}

?>

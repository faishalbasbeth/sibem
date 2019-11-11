<?php 
function call($controller, $action){
	require_once('controllers/'.$controller.'_controller.php');

	switch ($controller) {
		case 'login':
		$controller=new LoginController();
		require_once('models/login_model.php');
		break;
		case 'pelanggan_kasir':
		$controller=new pelangganKasirController();
		break;
		case 'pelanggan_pemilik':
		$controller=new pelangganPemilikController();
		require_once('models/pelanggan_model.php');
		break;
		case 'data_pelanggan':
		$controller=new DataPelangganController();
		require_once('models/pelanggan_model.php');
		break;
		case 'data_jenis_service':
		$controller=new DataJenisServiceController();
		require_once('models/jenisservice_model.php');
		break;
		case 'jenis_service_kasir':
		$controller=new jenisServiceKasirController();
		require_once('models/jenisservice_model.php');
		break;		
		case 'data_sparepart':
		$controller=new DataSparepartController();
		require_once('models/sparepart_model.php');
		break;		
		case 'sparepart_kasir':
		$controller=new sparepartKasirController();
		require_once('models/sparepart_model.php');
		break;		
		case 'data_pekerja':
		$controller=new DataPekerjaController();
		require_once('models/pekerja_model.php');
		break;		
		case 'data_service':
		$controller=new DataServiceController();
		require_once('models/service_model.php');
		require_once('models/pekerja_model.php');
		require_once('models/pelanggan_model.php');
		require_once('models/jenisservice_model.php');
		require_once('models/sparepart_model.php');
		break;	


	}
	$controller->{ $action }();
}

$controllers = array(
	'login' => ['login','error','authentication',],
	'pelanggan_kasir' => ['pelangganKasir',],
	'pelanggan_pemilik' => ['pelangganPemilik',],
	'data_pelanggan' => ['home','deletePelanggan','tampilAddPelanggan','addDataPelanggan','editPelanggan','editDataPelanggan',],
	'data_jenis_service' => ['jenis','deleteJenisservice','tampilJenisservice','addJenisservice','editJenisservice','editDataJenisservice'],
	'jenis_service_kasir' => ['jenisServiceKasir',],	
	'data_sparepart' => ['sparepart','deleteSparepart','tampilSparepart','addSparepart','editSparepart','editDataSparepart'],
	'sparepart_kasir' => ['sparepartKasir',],
	'data_pekerja' => ['pekerja','deletePekerja','tampilPekerja','addPekerja',],
	'data_service' => ['service','tampilService','addService','servicePemilik',],


	);
	
	

if (array_key_exists($controller, $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller,$action);
	} else {
		call($controller,'error');
	}

} else {
	call($controller,'error');
}

?>
<?php  
	/**
	* 
	*/
	class Jenisservice
	{
		public $id_jenis;
		public $jenis_service;
		public $keterangan;
		public $harga;
		

		function __construct($id_jenis,$jenis_service,$keterangan,$harga)
		{
			# code...
			$this->id_jenis=$id_jenis;
			$this->jenis_service=$jenis_service;
			$this->keterangan=$keterangan;			
			$this->harga=$harga;
		
		}
		public static function showAllService(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM jenisservice");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Jenisservice($post['id_jenis'],$post['jenis_service'],$post['keterangan'],$post['harga']
				);
		}


		return $list;
	}
	public static function deleteJenisservice($id_jenis){
		$db = DB::getInstance();

		$req = $db->query("DELETE from jenisservice where id_jenis=$id_jenis
			");

		return $req;
	}
	public static function addJenisservice($jenis_service,$keterangan,$harga){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO jenisservice (id_jenis, jenis_service, keterangan, harga) 
			VALUES (NULL, '".$jenis_service."', '".$keterangan."', '".$harga."');");

		return $req;
	}	
		public static function editJenisservice($id_jenis){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM jenisservice where id_jenis=$id_jenis");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Jenisservice($post['id_jenis'],$post['jenis_service'],$post['keterangan'],$post['harga']
				);
		}


		return $list;
	}
	public static function editDataJenisservice($jenis_service,$keterangan,$harga,$id_jenis){
		$db = DB::getInstance();

		$req = $db->query("UPDATE jenisservice set jenis_service='$jenis_service', keterangan='$keterangan', harga='$harga'
			where id_jenis='$id_jenis'
			");

		return $req;
	}


}
?>
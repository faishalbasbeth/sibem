<?php  
	/**
	* 
	*/
	class Service
	{
		public $id_service;
		public $tanggal;
		public $nama_user;
		public $nama_pelanggan;
		public $keluhan;
		public $jenis_service;
		public $sparepart_satu;												
		public $sparepart_dua;
		public $sparepart_tiga;
		public $harga_total;

		function __construct($id_service,$tanggal,$nama_user,$nama_pelanggan,$keluhan,$jenis_service,$sparepart_satu,$sparepart_dua,$sparepart_tiga,$harga_total)
		{
			# code...
			$this->id_service=$id_service;
			$this->tanggal=$tanggal;
			$this->nama_user=$nama_user;			
			$this->nama_pelanggan=$nama_pelanggan;
			$this->keluhan=$keluhan;
			$this->jenis_service=$jenis_service;
			$this->sparepart_satu=$sparepart_satu;									
			$this->sparepart_dua=$sparepart_dua;
			$this->sparepart_tiga=$sparepart_tiga;
			$this->harga_total=$harga_total;						
		
		}
		public static function showAllService(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM dataservice");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Service($post['id_service'],$post['tanggal'],$post['nama_user'],$post['nama_pelanggan'],$post['keluhan'],$post['jenis_service'],$post['sparepart_satu'],$post['sparepart_dua'],$post['sparepart_tiga'],$post['harga_total']
				);
		}


		return $list;
	}

	public static function addService($tanggal,$nama_user,$nama_pelanggan,$keluhan,$jenis_service,$sparepart_satu,$sparepart_dua,$sparepart_tiga,$harga_total){
		$db = DB::getInstance();

		$harga_jenis_service = $db->query("SELECT harga FROM jenisservice where jenis_service='$jenis_service' ");
		$hjs = 0;
		foreach ($harga_jenis_service->fetchAll() as $o_hjs) {
			$hjs=$o_hjs['harga'];
		}

		$harga_sparepart_satu = $db->query("SELECT harga_satuan FROM datasparepart where nama_sparepart='$sparepart_satu' ");
		$hss = 0;
		foreach ($harga_sparepart_satu->fetchAll() as $o_hss) {
			$hss=$o_hss['harga_satuan'];
		}

		$harga_sparepart_dua = $db->query("SELECT harga_satuan FROM datasparepart where nama_sparepart='$sparepart_dua' ");
		$hsd = 0;
		foreach ($harga_sparepart_dua->fetchAll() as $o_hsd) {
			$hsd=$o_hsd['harga_satuan'];
		}

		$harga_sparepart_tiga = $db->query("SELECT harga_satuan FROM datasparepart where nama_sparepart='$sparepart_tiga' ");
		$hst = 0;
		foreach ($harga_sparepart_tiga->fetchAll() as $o_hst) {
			$hst=$o_hss['harga_satuan'];
		}

		$harga_total=$hjs + $hss + $hsd + $hst;

		$req = $db->query("INSERT INTO dataservice (id_service, tanggal, nama_user, nama_pelanggan, keluhan, jenis_service, sparepart_satu, sparepart_dua, sparepart_tiga, harga_total) 
			VALUES (NULL, '".$tanggal."', '".$nama_user."', '".$nama_pelanggan."', '".$keluhan."', '".$jenis_service."', '".$sparepart_satu."', '".$sparepart_dua."', '".$sparepart_tiga."', '".$harga_total."');");

		$stok1 = $db->query("SELECT stok FROM datasparepart where nama_sparepart='$sparepart_satu' ");
		$s1 = 0;
		foreach ($stok1->fetchAll() as $o_s1) {
			$s1=$o_s1['stok'];
		}

		$stok = ($s1 - 1);

		$req = $db->query("UPDATE datasparepart set stok='$stok' where nama_sparepart='$sparepart_satu' ");

		$stok2 = $db->query("SELECT stok FROM datasparepart where nama_sparepart='$sparepart_dua' ");
		$s2 = 0;
		foreach ($stok2->fetchAll() as $o_s2) {
			$s2=$o_s2['stok'];
		}

		$stok = ($s2 - 1);

		$req = $db->query("UPDATE datasparepart set stok='$stok' where nama_sparepart='$sparepart_dua' ");

		$stok3 = $db->query("SELECT stok FROM datasparepart where nama_sparepart='$sparepart_tiga' ");
		$s3 = 0;
		foreach ($stok3->fetchAll() as $o_s3) {
			$s3=$o_s3['stok'];
		}

		$stok = ($s3 - 1);

		$req = $db->query("UPDATE datasparepart set stok='$stok' where nama_sparepart='$sparepart_tiga' ");

		return $req;
	}	



}
?>
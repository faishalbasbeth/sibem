<?php  
	/**
	* 
	*/
	class Sparepart
	{
		public $id_sparepart;
		public $nama_sparepart;
		public $stok;
		public $harga_satuan;
		

		function __construct($id_sparepart,$nama_sparepart,$stok,$harga_satuan)
		{
			# code...
			$this->id_sparepart=$id_sparepart;
			$this->nama_sparepart=$nama_sparepart;
			$this->stok=$stok;			
			$this->harga_satuan=$harga_satuan;
		
		}
		public static function showAllSparepart(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM datasparepart");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Sparepart($post['id_sparepart'],$post['nama_sparepart'],$post['stok'],$post['harga_satuan']
				);
		}


		return $list;
	}
	public static function deleteSparepart($id_sparepart){
		$db = DB::getInstance();

		$req = $db->query("DELETE from datasparepart where id_sparepart=$id_sparepart
			");

		return $req;
	}
	public static function addSparepart($nama_sparepart,$stok,$harga_satuan){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO datasparepart (id_sparepart, nama_sparepart, stok, harga_satuan) 
			VALUES (NULL, '".$nama_sparepart."', '".$stok."', '".$harga_satuan."');");

		return $req;
	}	
		public static function editSparepart($id_sparepart){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM datasparepart where id_sparepart=$id_sparepart");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Sparepart($post['id_sparepart'],$post['nama_sparepart'],$post['stok'],$post['harga_satuan']
				);
		}


		return $list;
	}
	public static function editDataSparepart($nama_sparepart,$stok,$harga_satuan,$id_sparepart){
		$db = DB::getInstance();

		$req = $db->query("UPDATE datasparepart set nama_sparepart='$nama_sparepart', stok='$stok', harga_satuan='$harga_satuan
			'
			where id_sparepart='$id_sparepart'
			");

		return $req;
	}


}
?>
<?php  
	/**
	* 
	*/
	class Pekerja
	{
		public $id_user;
		public $nama_user;
		public $hak_akses;
		public $level;
		public $password;		

		function __construct($id_user,$nama_user,$hak_akses,$level,$password)
		{
			# code...
			$this->id_user=$id_user;
			$this->nama_user=$nama_user;
			$this->hak_akses=$hak_akses;			
			$this->level=$level;
			$this->password=$password;			
		
		}
		public static function showAllPekerja(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM user");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Pekerja($post['id_user'],$post['nama_user'],$post['hak_akses'],$post['level'],$post['password']
				);
		}


		return $list;
	}
	public static function deletePekerja($id_user){
		$db = DB::getInstance();

		$req = $db->query("DELETE from user where id_user=$id_user
			");

		return $req;
	}
	public static function addPekerja($nama_user,$hak_akses,$level,$password){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO user (id_user, nama_user, hak_akses, level, password) 
			VALUES (NULL, '".$nama_user."', '".$hak_akses."', '".$level."', '".$password."');");

		return $req;
	}	
		public static function editPekerja($id_user){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM user where id_user=$id_user");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Sparepart($post['id_user'],$post['nama_user'],$post['hak_akses'],$post['level'],$post['password']
				);
		}


		return $list;
	}
	// public static function editDataSparepart($nama_sparepart,$stok,$harga_satuan,$id_sparepart){
	// 	$db = DB::getInstance();

	// 	$req = $db->query("UPDATE datasparepart set nama_sparepart='$nama_sparepart', stok='$stok', harga_satuan='$harga_satuan
	// 		'
	// 		where id_sparepart='$id_sparepart'
	// 		");

	// 	return $req;
	// }


}
?>
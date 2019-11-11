<?php  
	/**
	* 
	*/
	class Pelanggan
	{
		public $id_pelanggan;
		public $nama_pelanggan;
		public $alamat_pelanggan;
		public $nohp_pelanggan;
		public $nopolisi;
		public $tipe;
		public $merk;
		public $nomesin;		

		function __construct($id_pelanggan,$nama_pelanggan,$alamat_pelanggan,$nohp_pelanggan,$nopolisi,$tipe,$merk,$nomesin)
		{
			# code...
			$this->id_pelanggan=$id_pelanggan;
			$this->nama_pelanggan=$nama_pelanggan;
			$this->alamat_pelanggan=$alamat_pelanggan;			
			$this->nohp_pelanggan=$nohp_pelanggan;
			$this->nopolisi=$nopolisi;
			$this->tipe=$tipe;
			$this->merk=$merk;
			$this->nomesin=$nomesin;			
		}

		public static function showAllPelanggan(){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM datapelanggan");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Pelanggan($post['id_pelanggan'],$post['nama_pelanggan'],$post['alamat_pelanggan'],$post['nohp_pelanggan'],$post['nopolisi'],$post['tipe'],$post['merk'],$post['nomesin']
				);
		}


		return $list;
	}

	public static function deletePelanggan($id_pelanggan){
		$db = DB::getInstance();

		$req = $db->query("DELETE from datapelanggan where id_pelanggan=$id_pelanggan
			");

		return $req;
	}

	public static function addDataPelanggan($nama_pelanggan,$alamat_pelanggan,$nohp_pelanggan,$nopolisi,$tipe,$merk,$nomesin){
		$db = DB::getInstance();

		$req = $db->query("INSERT INTO datapelanggan (id_pelanggan, nama_pelanggan, alamat_pelanggan, nohp_pelanggan, nopolisi, tipe, merk, nomesin) 
			VALUES (NULL, '".$nama_pelanggan."', '".$alamat_pelanggan."', '".$nohp_pelanggan."', '".$nopolisi."', '".$tipe."', '".$merk."', '".$nomesin."');");

		return $req;
	}

	public static function editPelanggan($id_pelanggan){
		$list=[];

		$db = DB::getInstance();

		$req = $db->query("SELECT * FROM datapelanggan where id_pelanggan=$id_pelanggan");

		foreach ($req->fetchAll() as $post) {
			$list[] = new Pelanggan($post['id_pelanggan'],$post['nama_pelanggan'],$post['alamat_pelanggan'],$post['nohp_pelanggan'],$post['nopolisi'],$post['tipe'],$post['merk'],$post['nomesin']
				);
		}


		return $list;
	}

	public static function editDataPelanggan($nama_pelanggan,$alamat_pelanggan,$nohp_pelanggan,$nopolisi,$tipe,$merk,$nomesin,$id_pelanggan){
		$db = DB::getInstance();

		$req = $db->query("UPDATE datapelanggan set nama_pelanggan='$nama_pelanggan', alamat_pelanggan='$alamat_pelanggan', nohp_pelanggan='$nohp_pelanggan', nopolisi='$nopolisi', tipe='$tipe', merk='$merk', nomesin='$nomesin'
			where id_pelanggan='$id_pelanggan'
			");

		return $req;
	}

	}
?>
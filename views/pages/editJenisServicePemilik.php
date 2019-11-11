<!DOCTYPE html>
<html lang="en">
<head>
  <title>SIBEM</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="home/css/bootstrap.min.css">
  <link rel="icon" type="image/png" href="img/ttl.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="icon" type="image/png" href="img/logosaja.png">
  <script src="home/js/bootstrap.min.js"></script>
  <style>
  .navbar{
    background-color:rgba(0,0,0,.7)
  }
  body{
    background-image: url("img/4.jpeg"); 
    background-size: 100% 103%;
    background-attachment:fixed;
  }
  .rectangle {
    display: block; 
    max-width: 100%; 
    height: auto;
    padding: 14px 14px 10px;
    background-color:rgba(255,255,255,.8);
  }
</style>
</head>
<body>
  <div class="container">
    <h2 align="center"><img align="content" src="img/sibem.png"></h2>
    <div class="rectangle">
      <div class="panel-body">
  <!-- <div class="container">
    <h2 align="center"><img align="content" src="img/.png"></h2>
    <div class="rectangle">
      <div class="panel-body">
        <div class="form-group">
          <label for="idPelanggan" class="col-sm-2 control-label">ID Pelanggan</label>
          <div class="col-sm-10">
            <input class="form-control" id="idPelanggan" type="text" placeholder="ID Pelanggan" disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="namaPelanggan" class="col-sm-2 control-label">Nama Pelanggan</label>
          <div class="col-sm-10">
            <input class="form-control" id="namaPelanggan" type="text" placeholder="Nama Lengkap . .">
          </div>
        </div>
        <div class="form-group">
          <label for="Alamat" class="col-sm-2 control-label">Alamat</label>
          <div class="col-sm-10">
            <input class="form-control" id="Alamat" type="text" placeholder="Alamat . .">
          </div>
        </div>
        <div class="form-group">
          <label for="noHp" class="col-sm-2 control-label">No Hp</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="noHp" placeholder="No Hp . ." required>
        </div>
        <div class="form-group">
          <label for="noPolisi" class="col-sm-2 control-label">No Polisi</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="noPolisi" placeholder="No Polisi . ." required>
          </div>
        <div class="form-group">
          <label for="tipe" class="col-sm-2 control-label">Tipe</label>
          <div class="col-sm-10">
            <select id="tipe" class="form-control">
              <option selected>Bebek Kurang dari 150cc</option>
              <option>Matic Kurang dari 150cc</option>
              <option>Bebek Lebih dari 150cc</option>
              <option>Moge Lebih dari 250cc</option>
            </select>
          </div>
        <div class="form-group">
          <label for="Merk" class="col-sm-2 control-label">Merk</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="Merk" placeholder="Merk . ." required>
          </div>
        <div class="form-group">
          <label for="noMesin" class="col-sm-2 control-label">No Mesin</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="noPolisi" placeholder="No Polisi . ." required>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div style="margin: 10px" class="col-sm-12">
       <button style="margin-left: 4px; margin-right: 4px" type="submit" class="btn btn-primary pull-right">SIMPAN</button>
       <a style="margin-left: 4px; margin-right: 4px" href="dataPelangganKasir.html" class="btn btn-primary pull-right" role="button">BATAL</a>
     </div>
   </div>
 </div>
</div>
</div>
</div>
</div> -->


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Edit Data Pelanggan</h1>

          <form class="form-horizontal" method="GET">
                  <input type="hidden" name="controller" value="data_jenis_service">
            <input type="hidden" name="action" value="editDataJenisservice">
                      <?php foreach ($posts as $post){

         ?>
    
            <input type="hidden" name="id_jenis" value="<?php echo $post->id_jenis; ?>">

            <div class="row">
              <div class="nyoba">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="namabahan">Jenis Service</span>
                  <input type="text" class="form-control" name="jenis_service" placeholder="Jenis Service" value="<?php echo $post->jenis_service; ?>">
                </div>
              </div>
              </div>
            </div>
          </br>
            <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="warnabahan">Keterangan</span>
                  <input type="text" class="form-control" name="keterangan" placeholder="Keterangan" value="<?php echo $post->keterangan; ?>">
                </div>
              </div>
            </div>
          </br>
            <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="stokbahan">Harga</span>
                  <input type="Nomor" class="form-control" name="harga" placeholder="Harga" value="<?php echo $post->harga; ?>">
                </div>
              </div>
          </div>
          </br>
              <button class="btn btn-primary">Simpan</button>
              <a href="?controller=data_jenis_service&action=jenis" class="btn btn-danger">Batal</a>          
          
          <?php } ?>
         


          </form>
          <br>
<!--           <a href="?controller=data_pelanggan&action=home"><button class="btn btn-danger">Batal</button></a> -->
        </div>
      </div>
    </div>
</body>
</html>
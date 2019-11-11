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
                  <input type="hidden" name="controller" value="data_pelanggan">
            <input type="hidden" name="action" value="editDataPelanggan">
                      <?php foreach ($posts as $post){

         ?>
    
            <input type="hidden" name="id_pelanggan" value="<?php echo $post->id_pelanggan; ?>">

            <div class="row">
              <div class="nyoba">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="nama_pelanggan">Nama</span>
                  <input type="text" class="form-control" name="nama_pelanggan" placeholder="Nama Pelanggan" value="<?php echo $post->nama_pelanggan; ?>">
                </div>
              </div>
              </div>
            </div>
          </br>
            <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="alamat_pelanggan">Alamat</span>
                  <input type="text" class="form-control" name="alamat_pelanggan" placeholder="Alamat Pelanggan" value="<?php echo $post->alamat_pelanggan; ?>">
                </div>
              </div>
            </div>
          </br>
            <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="nohp_pelanggan">No HP</span>
                  <input type="Nomor" class="form-control" name="nohp_pelanggan" placeholder="No Hp Pelanggan" value="<?php echo $post->nohp_pelanggan; ?>">
                </div>
              </div>
          </div>
          </br>
          
            <div class="row">
              <div class="col-lg-3">
                <div class="input-group">
                  <span class="input-group-addon" id="nopolisi">No Polisi</span>
                  <input type="Nomor" class="form-control" name="nopolisi" placeholder="No Polisi" value="<?php echo $post->nopolisi; ?>">
                </div>
              </div>
            </div>
          </br>
          <div class="input-group">
          <span class="input-group-addon">Tipe : </span>
            <!-- <label for="Tipe">Tipe : </label> -->
            <select name="tipe" style="width: 18%; height: 40px;">
              <option  value="Bebek Kurang dari 150cc">Bebek Kurang dari 150cc</option>
              <option  value="Matic Kurang dari 150cc">Matic Kurang dari 150cc</option>
              <option  value="Bebek Lebih dari 150cc">Bebek Lebih dari 150cc</option>
              <option  value="Moge Lebih dari 250cc">Moge Lebih dari 250cc</option>
            </select>
          </div>
          </br>
          <!-- <div class="row"> -->
          <!-- <div class="col-lg-3"> -->
          <div class="row">
              <div class="col-lg-3">
                <div class="input-group">
                  <span class="input-group-addon" id="merk">Merk</span>
                  <input type="Nomor" class="form-control" name="merk" placeholder="Merk" value="<?php echo $post->merk; ?>">
                </div>
              </div>
            </div>
          <!-- </div> -->
          <!-- </div> -->
          </br>
          <div class="row">
              <div class="col-lg-3">
                <div class="input-group">
                  <span class="input-group-addon" id="nomesin">No Mesin</span>
                  <input type="Nomor" class="form-control" name="nomesin" placeholder="No Mesin" value="<?php echo $post->nomesin; ?>">
                </div>
              </div>
            </div>
          </br>
          </br>
        </br>

              <button class="btn btn-primary">Simpan</button>
              <a href="?controller=data_pelanggan&action=home" class="btn btn-danger">Batal</a>
              
              <?php } ?>

          </form>
          <br>
<!--           <a href="?controller=data_pelanggan&action=home"><button class="btn btn-danger">Batal</button></a> -->
        </div>
      </div>
    </div>

</body>
</html>

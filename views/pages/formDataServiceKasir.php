

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

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Tambah Service</h1>
          <form class="form-horizontal" method="GET">
            <input type="hidden" name="controller" value="data_service">
            <input type="hidden" name="action" value="addService">
        
            <div class="row">
              <div class="nyoba">
              <div class="col-lg-5">
                <div class="input-group">
          <label for="tanggal" class="col-sm-2 control-label">Tanggal</label>
          <div class="col-sm-9">
            <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
              <input class="form-control" type="date" name="tanggal" required>
              <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <br>
            <div class="row">
              <div class="nyoba">
              <div class="col-lg-5">
                <div class="input-group">
                  <label for="n_kasir">Nama Kasir : </label>
                  <select name="nama_user">
                    <?php foreach ($posts1 as $post) { ?>
                      <option value="<?php echo $post->nama_user; ?>"><?php echo $post->nama_user; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              </div>
            </div>
          </br>
            <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <label for="n_pelanggan">Nama Pelanggan : </label>
                  <select name="nama_pelanggan">
                    <?php foreach ($posts as $post) { ?>
                      <option value="<?php echo $post->nama_pelanggan; ?>"><?php echo $post->nama_pelanggan; ?></option>
                    <?php } ?>
                    
                  </select> 
                </div>
              </div>
            </div>
          </br>
            <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="stokbahan">Keluhan</span>
                  <input type="Nomor" class="form-control" name="keluhan" placeholder="Hmmmm" aria-describedby="stokbahan1">
                </div>
              </div>
          </div>
          </br>
            <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <label for="j_servis">Jenis Servis : </label>
                  <select name="jenis_service">
                    
                    <?php foreach ($posts2 as $post) { ?>
                      <option value="<?php echo $post->jenis_service; ?>"><?php echo $post->jenis_service; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
          </div>
          </br>
          <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <label for="j_servis">Data Sparepart 1 : </label>
                  <select name="sparepart_satu">
                    <?php foreach ($posts3 as $post) { ?>
                      <option value="<?php echo $post->nama_sparepart; ?>"><?php echo $post->nama_sparepart; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
          </div>
          </br>
          <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <label for="j_servis">Data Sparepart 2 : </label>
                  <select name="sparepart_dua">
                    <?php foreach ($posts3 as $post) { ?>
                      <option value="<?php echo $post->nama_sparepart; ?>"><?php echo $post->nama_sparepart; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
          </div>
          </br>
          <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <label for="j_servis">Data Sparepart 3 : </label>
                  <select name="sparepart_tiga">
                    <?php foreach ($posts3 as $post) { ?>
                      <option value="<?php echo $post->nama_sparepart; ?>"><?php echo $post->nama_sparepart; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
          </div>
          </br>


              <button class="btn btn-primary">Simpan</button>
              <a href="?controller=data_service&action=service" class="btn btn-danger">Batal</a>          
          

          </br>

          </br>

          </br>

          </br>
          </br>
        </br>


              


          </form>
          <br>
<!--           <a href="?controller=data_pelanggan&action=home"><button class="btn btn-danger">Batal</button></a> -->
        </div>
      </div>
    </div>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script>
  $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
</script>

</body>
</html>

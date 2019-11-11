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
          <h1 class="page-header">Tambah Pekerja</h1>
          <form class="form-horizontal" method="GET">
            <input type="hidden" name="controller" value="data_pekerja">
            <input type="hidden" name="action" value="addPekerja">
            <div class="row">
              <div class="nyoba">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="namabahan">Nama User</span>
                  <input type="text" class="form-control" name="nama_user" placeholder="Nama User" aria-describedby="namabahan1">
                </div>
              </div>
              </div>
            </div>
          </br>
            <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="warnabahan">Hak Akses</span>
                  <input type="text" class="form-control" name="hak_akses" placeholder="Hak Akses" aria-describedby="warnabahan1">
                </div>
              </div>
            </div>
          </br>
            <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="stokbahan">Level</span>
                  <input type="Nomor" class="form-control" name="level" placeholder="Level" aria-describedby="stokbahan1">
                </div>
              </div>
          </div>
          </br>
            <div class="row">
              <div class="col-lg-5">
                <div class="input-group">
                  <span class="input-group-addon" id="stokbahan">Password</span>
                  <input type="Nomor" class="form-control" name="password" placeholder="Password" aria-describedby="stokbahan1">
                </div>
              </div>
          </div>
          </br>          
              <button class="btn btn-primary">Simpan</button>
              <a href="?controller=data_pekerja&action=pekerja" class="btn btn-danger">Batal</a>          
          

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
</body>
</html>
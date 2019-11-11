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
    background-image: url("img/2.jpeg"); 
    background-color: #cccccc;
    background-size: 100% 103%;
    background-attachment:fixed;
  }
  #login-dp{
    min-width: 250px;
    padding: 14px 14px 0;
    overflow:hidden;
    background-color:rgba(255,255,255,.8);
  }

  #login-dp .bottom{
    background-color:rgba(255,255,255,.8);
    border-top:1px solid #ddd;
    clear:both;
    padding:14px;
  }
  .rectangle {
    display: block; 
    max-width: 100%; 
    height: auto;
    padding: 14px 14px 10px;
    background-color: white;
  }
  .sewa{
    padding: 14px 14px 14px;
  }
</style>

</head>
<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" ><img src="img/sibem.png"></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="?controller=pelanggan_pemilik&action=pelangganPemilik"><span class="glyphicon glyphicon-user"></span> Data Pelanggan</a></li>
        <li><a href="?controller=data_pekerja&action=pekerja"><span class="glyphicon glyphicon-user"></span> Data Pekerja</a></li>
        <li class="active"><a href="?controller=data_jenis_service&action=jenis"><span class="glyphicon glyphicon-cog"></span> Data Jenis Service</a></li>
        <li><a href="?controller=data_service&action=servicePemilik"><span class="glyphicon glyphicon-wrench"></span> Data Service</a></li>
        <li><a href="?controller=data_sparepart&action=sparepart"><span class="glyphicon glyphicon-list-alt"></span> Data Sparepart</a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Pemilik Keluar</a></li>
      </ul>
    </div>
  </nav>

  <!-- crud driver -->
  <div class="container">
    <div class="row">

      <div class="col-md-11">
        <div class="panel panel-default">
          <div class="panel-body">
            <a href="?controller=data_jenis_service&action=tampilJenisservice" class="btn btn-success btn-sm" title="Add New driver">
              <i></i> Add New
            </a>
            <form method="GET" action="#" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
              <div class="input-group">
                <input  class="form-control" id="myInput" type="text" placeholder="Search">
              </div>
            </form>

            <br/>
            <br/>
            <div class="rectangle">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Jenis Service</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                    <th>Actions</th>
                                        <?php $i=1; ?>
                     <?php foreach ($posts as $post) {
                        ?>
                  </tr>
                </thead>
                <tbody id="myTable">
                  <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $post->jenis_service; ?></td>
                  <td><?php echo $post->keterangan; ?></td>
                  <td><?php echo $post->harga; ?></td>
                  <td>
                     <a href="?controller=data_jenis_service&action=editJenisservice&id_jenis=<?php echo $post->id_jenis ?>" title="Edit driver"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
<!--                      <form method="POST" action="#" accept-charset="UTF-8" style="display:inline"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="FEl9jLiZgc3BVOsYTzUt7ReWMBYPxTVZGa4crtre">
                      <button type="submit" class="btn btn-danger btn-xs" title="Delete driver" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form> -->
                    <a href="?controller=data_jenis_service&action=deleteJenisservice&id_jenis=<?php echo $post->id_jenis ?>" title="Edit driver"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Hapus</button></a>                    
                  </td>
                  </tr>  <?php $i++;} ?>  
                  
                             </tbody>
            </table>
            <div class="pagination-wrapper">  </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.content -->
</div>
<!-- script auto search -->
<script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>

</body>
</html>
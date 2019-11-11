<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang di SIBEM - Silahkan Login</title>

	<link rel="stylesheet" type="text/css" href="home/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="home/Js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="home/js/jquery.js"></script>
	<script type="text/javascript" src="home/js/bootstrap.js"></script>
	<script type="text/javascript" src="home/js/jquery-ui/jquery-ui.js"></script>
	<link rel="icon" type="image/png" href="img/logosaja.png">
	<style type="text/css">
	body {
		background-image: url("img/1.jpeg");
		    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
        width: 100%;
    height: 100%;
	background-position:center;
	}
	.kotak{	
		margin-top: 150px;
	}

	.kotak .input-group{
		margin-bottom: 20px;
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
	</style>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <!-- <a class="navbar-brand" href="index.html"><img display: block height: auto src="img/.png"></a> -->
      </div>

</div>
</nav>	
	<div class="container">
	<div class="row">
		  <div class="col-xs-12 col-sm-4 col-md-4">&nbsp;</div>
		  <div class="col-xs-12 col-sm-4 col-md-4">
		  	
		  	<div style="margin-top: 100px;" class="panel panel-default">
		  	<div class="panel-body">


		<div class="panel panel-default">
		<div class="text-center"><h4><img src="img/logo.png" class="img-responsive"></h4></div>

			<form class="form-signin" role="form" method="get">
				<!-- <div class="col-md-4 col-md-offset-4 kotak"> -->
					<h3 align="center"> SILAHKAN LOGIN</h3>

					<input type="hidden" name="controller" value="login">
        			<input type="hidden" name="action" value="authentication">

					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
						<input id="name" type="text" class="form-control" placeholder="username" value="<?=isset($_GET["username"]) ? $_GET["username"] : NULL?>" name="username" required>
					</div>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
						<input id="password" type="password" class="form-control" placeholder="password" name="password" value="<?=isset($_GET["password"]) ? $_GET["password"] : NULL?>" required>
					</div>
					<div class="input-group">			
						<input type="submit" class="btn btn-primary" value="Login">
					</div>
				<!-- </div> -->
			</form>
		</div>
	</div>
	</div>
	</div>
	</div>
	</div>
</body>
</html>
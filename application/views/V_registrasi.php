<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Daftar Cermat Institute</title>

   <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/dist/css/bootstrap.css'); ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('assets/dist/font-awesome/font-awesome.css'); ?>" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/dist/css/style.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/dist/css/style-responsive.css'); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-daftar" action="<?php echo site_url('daftar');?>" method="post">
		        <h2 class="form-daftar-heading">Registrasi</h2>
		        
		        <div class="login-wrap">
		        <div class="row">
		        <div class="col-md-6">
		            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>
		            <input type="number" class="form-control" name="umur" placeholder="Usia" required>
		            <div class="radio">
					  <label>
					    <input type="radio" name="jeniskel" id="optionsRadios1" value="pria" checked>
					    Pria 
					  </label>
					  <label>
					    <input type="radio" name="jeniskel" id="optionsRadios2" value="wanita">
					    Wanita
					  </label>
					</div>
		            <input type="number" class="form-control" name="lama-mengajar" placeholder="Lama Mengajar(Tahun)" required>
		            <!-- <input type="mail" class="form-control" name="email" placeholder="E-mail" required>
		            <input type="text" class="form-control" name="alamat" placeholder="Alamat" required> -->
		            <br>
		            </div><!-- col 6 -->

		            <div class="col-md-6">
		        	<input type="text" class="form-control" name="username" placeholder="New Username" required>
		            <input type="password" class="form-control" name="password" placeholder="New Password" required>
		            <input type="password" class="form-control" name="password2" placeholder="Re-Type Password" required>
		        	</div>

		        	</div><!-- row -->    
		            <!-- <label class="checkbox" required>
		                <span class="pull-right">
		                    <input type="checkbox"> Saya Bersedia</input>
		                </span>
		            </label> -->
		            
		            <button class="btn btn-daftar btn-block" href="index.html" type="submit"><i class="fa fa-sign-up"></i> Daftar</button>
		            <hr>
		            <div class="registration">
		                Kembali ke <br/>
		                <a class="" href="<?php echo site_url('halaman-login'); ?>">
		                    <b>Halaman Login</b>
		                </a>
		            </div>
		       
		        

		        </div>
		
		      </form>	  	
	  	
	  	</div>
	  </div>

   <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url('assets/dist/js/jquery.js'); ?>"></script>
    <script src="<?php echo base_url('assets/dist/js/bootstrap.min.js'); ?>"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo base_url('assets/dist/js/jquery.backstretch.min.js'); ?>"></script>
    <script>
        $.backstretch("<?php echo base_url('assets/dist/img/bg-9.jpg'); ?>", {speed: 500});
    </script>


  </body>
</html>

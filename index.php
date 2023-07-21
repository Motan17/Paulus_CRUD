<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>CRUD SISWA</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- awesome fontfamily -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <div class="header">
            <div class="container-fluid">
               <div class="row d_flex">
                  <div class=" col-md-2 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                             <!-- <a href="index.html"><img src="images/logo.png" alt="#" /></a>-->
                           </div>
                        </div>
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
      </header>
	  
	        <!-- end header -->
      <!-- start slider section -->
      <div id="top_section" class=" banner_main">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <!--<div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                     </ol>-->
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1 style="color:#F0B51E ">SELAMAT DATANG <br>DI Aplikasi CRUD SISWA </h1>
                                    <p style="color:#F0B51E ">Anda dapat melihat, menghapus,mengedit, serta mencetak data siswa <br>by. Paulus Zalukhu
                                    </p>
									
									<nav>
	<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Submit data baru berhasil!";
            } else {
                echo "Submit data baru gagal!";
            }
        ?>
    </p>
<?php endif; ?>

        <center><ul>
            <li><a class="read_more" href="form-daftar.php">TAMBAH DATA</a></li>
			
            <li><a a class="read_more" href="list-siswa.php">DATA SISWA</a></li>
        </ul></center>
    </nav>
	
                                    <!--<a class="read_more"  href="form-daftar.php">About Company </a><a class="read_more" href="list-siswa.php">Contact </a>-->
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!--<div class="carousel-item">
                           <div class="container-fluid">
                              <div class="carousel-caption relative">
                                 <div class="bluid">
                                    <h1>Creative  <br>Work Idea </h1>
                                    <p>There are many variations of passages of Lorem Ipsum <br>available, but the majority have suffered alteration
                                    </p>-->
                                  
     
      <script src="js/jquery.min.js"></script>
      <!--<script src="js/bootstrap.bundle.min.js"></script>-->
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>






<!--<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
    <header>
        <h3>Pendaftaran Siswa Baru</h3>
        <h1>SMK Coding</h1>
    </header>

    <h4>Menu</h4>
    <nav>
	<?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran data baru berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
<?php endif; ?>

        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    </body>
</html>-->
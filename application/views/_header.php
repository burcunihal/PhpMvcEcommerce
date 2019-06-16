<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <meta name="description" content="<?=$veri[0]->aciklama?>">
	<meta name="keywords" content="<?=$veri[0]->keywords?>">
    <meta name="author" content="">
    <title><?=$veri[0]->adi?></title>
    <link href="<?=base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url() ?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url() ?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url() ?>assets/css/animate.css" rel="stylesheet">
	<link href="<?=base_url() ?>assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url() ?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?=base_url() ?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url() ?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url() ?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url() ?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url() ?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<?php if ($this->session->flashdata("login_hata"))
							     {
								?>
						 <div class="alert alert-success">
							<button type="button" class="close" data-dismiss="alert">x</button>
							<strong> işlem :</strong> <?=$this->session->flashdata("login_hata")?>
                       </div>
					   <?php 
					    } 
					   ?>

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?=base_url() ?>"><img src="<?=base_url() ?>assets/images/home/logo.png" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
							    <li><a href="<?=base_url() ?>" class="active">Anasayfa</a></li>
								<li><a href="#"><i class="fa fa-user"></i> Hesabım</a></li>
								
								<li><a href="<?=base_url()?>home/bize_yazin?>"><i class="fa fa-crosshairs"></i> Bize Ulaşın</a></li>
							
								
							<?php
							if ($this->session->musteri_odata['adsoy'])
							{
                             ?>								
							<li><a href="<?=base_url() ?>home/hesabim/<?=$this->session->oturum_data['id']?>"><i class="fa fa-lock"method="post"></i> <?=$this->session->musteri_odata['adsoy']?></a></li>
							<li><a href="<?=base_url() ?>home/log_out/<?=$this->session->oturum_data['id']?>">Çıkış Yap</a></li>
							<?php
							}
							else
							{
							?>
							<li><a href="<?=base_url()?>home/login_formu">Giriş Yap</a></li> 
							<li><a href="<?=base_url() ?>home/musteri_kayit"><i class="fa fa-star"></i> Kayıt Ol</a></li>
							<?php
							}
							?>
							
							<?php
							if($this->session->musteri_odata['id'])
							{
								$query=$this->db->query($this->session->musteri_data("SELECT count(Id) as say FROM 'sepet' where musteri_id=".$this->session->musteri_odata['id']));
								$sepet=$query->result();
							?>
								<li><a href="<?=base_url() ?>home_sepet_liste"><i class="fa fa-shopping-cart"></i>(<?=$sepet->say?>) Adet Ürün  </a>
								</li>
								<?php
							}
							else
							{
							?>
							<li><a href="cart.html">(0) Adet Ürün </a></li> 
								
							
							<?php
							}
							?>
							
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
						<?php
						$home="";
						$kategoriler="";
						$hakkimizda="";
						$bize_yazin="";
					    $iletisim="";
						switch ($menu)
						{
						   case "home":
							  $home='active';
							  break;
							 
						   case "bize_yazin":
							   $bize_yazin='active';
							   break;
							 
						   case "about":
							    $iletisim='active';
							     break;
						}
						?>
						
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?=base_url() ?>" class="<?=$home?>">Anasayfa</a></li>
								<li><a href="<?=base_url() ?>home/kategori" class="<?=$kategoriler?>">Kategoriler</a></li>
								<li class="dropdown"><a href="<?=base_url() ?>home/incele">İncele</a>
                                    <ul role="menu" class="sub-menu">
										<li><a href="<?=base_url() ?>home/urun_detay">Ürün Detay</a></li>
										<li><a href="cart.html">Sepetim</a></li> 
                                    </ul>
                                </li> 
								<li class="<?=$hakkimizda?>"><a href="<?=base_url() ?>home/hakkimizda">Hakkımızda</a></li>
								<li class="<?=$bize_yazin?>"><a href="<?=base_url() ?>home/bize_yazin" >Bize Ulaşın</a></li>
								<li class="<?=$iletisim?>"><a href="<?=base_url() ?>home/iletisim" >İletişim</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="search_box pull-right">
							<input type="text" placeholder="Search"/>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Busca Ofertas</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url('/assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('/assets/css/style.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('/assets/css/all.min.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('/assets/slick/slick.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('/assets/slick/slick-theme.css')?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('/assets/css/aos.css')?>">
	<link rel="shortcut icon" type="image/jpg" href="<?=base_url('assets/img/icones/favicon.png')?>"/>
	<script type="text/javascript" src="<?=base_url('assets/js/jquery-3.3.1.js')?>"></script>
	<script>
		$(document).ready(function(){
			$(".dropdown, .btn-group").hover(function(){
				var dropdownMenu = $(this).children(".dropdown-menu");
				if(dropdownMenu.is(":visible")){
					dropdownMenu.parent().toggleClass("open");
				}
			});
		});		
	</script>
</head>
<body data-spy="scroll">
	<header>
		<div id="redes-topo">
			<div class="container">
				<div class="row w-100 align-items-center py-5 justify-content-end">
					<div class="col-md-1 col-12">					
						<a href="https://www.facebook.com/" target="_blank" class="icon-sociais" onmouseover="changePic1()" onmouseout="backPic1()">
							<img id="facebook" width="75%" src="<?=base_url('assets/img/icones/fb-branco.png')?>" alt="Facebook">
						</a>
					</div>
					<div class="col-md-1 col-12">
						<a href="https://www.instagram.com/" target="_blank" class="icon-sociais" onmouseover="changePic2()" onmouseout="backPic2()">
							<img id="instagram" width="75%" src="<?=base_url('assets/img/icones/insta-branco.png')?>" alt="Instagram">
						</a>
					</div>
				</div>
			</div>
		</div>
		<nav id="nav-menu" class="navbar navbar-expand-lg p-0 px-3">
			<button class="navbar-toggler custom-toggler float-right my-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="container">
				<div class="row w-100 m-0 align-items-center justify-content-center">
					<div class="col-md-12 col-12 collapse navbar-collapse m-0" id="navbarSupportedContent">
						<ul class="navbar-nav row w-100 justify-content-center align-items-center">
							<li class="dropdown nav-item mx-2">
								<a href="<?=base_url('home/sobre')?>" class="nav-link">Quem Somos</a>
							</li>
							<a class="navbar-brand text-center m-0" href="<?=base_url()?>">
								<h1>B.O.</h1>
							</a>
							<li class="nav-item mx-2">
								<a href="<?=base_url('home/contato')?>" class="nav-link">Contato</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</header>
	<div class="text-center whatsapp" style="">
		<a href="https://wa.me/55" target="_target" style="font-weight: bold; line-height: 70px; color: #fff; font-size: 2.5em"><i class="fab fa-whatsapp"></i></a>
	</div>
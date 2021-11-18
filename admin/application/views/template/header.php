<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="<?=base_url('assets/img/favicon.png')?>" type="image/x-icon">
	<title>Busca Oferta - ADMIN</title>
	<link href="<?=base_url('assets/css/all.min.css');?>" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="<?=base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet">
	<link href="<?=base_url('assets/css/custom.css')?>" rel="stylesheet">
	<style type="text/css">
		#accordionSidebar, .card-header {
			background-image: url("<?=base_url('assets/img/bg-admin.jpg');?>");
		}
	</style>
</head>
<body id="page-top">
	<div id="wrapper">
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
			<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?=base_url('dashboard')?>">
				<div class="col-12 sidebar-brand-text">
					<img src="<?=base_url('assets/img/undraw_profile.svg');?>" style="width: 30%">
				</div>
			</a>
			<hr class="sidebar-divider my-0">
			<li class="nav-item active">
				<a class="nav-link py-1" href="<?=base_url('dashboard')?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span>
				</a>
			</li>
			<hr class="sidebar-divider">
			<div class="sidebar-heading">
				CONTEÚDOS
			</div>			
			<li class="nav-item active">
				<a class="nav-link py-1" href="<?=base_url('dashboard/gerenciar_produtos')?>">
					<i class="nav-icon fas fa-dolly"></i>
					<span>PRODUTOS</span>
				</a>
			</li>
			<hr class="sidebar-divider">
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>
		</ul>
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>
					<ul class="navbar-nav ml-auto">
						<li class="nav-item dropdown no-arrow d-sm-none">
							<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-search fa-fw"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
							</div>
						</li>
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								
								<img class="img-profile rounded-circle" src="<?=base_url('assets/img/undraw_profile.svg')?>">
							</a>
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#">
									<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i> Perfil
								</a>
								<a class="dropdown-item" href="#">
									<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i> Log de Atividades
								</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Sair
								</a>
							</div>
						</li>
					</ul>
				</nav>
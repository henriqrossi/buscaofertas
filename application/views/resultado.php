<?php $this->load->view('template/header');?>
<div class="conteudo row w-100 m-0">
	<div class="col-md-12 col-12 d-flex align-items-center">
		<div class="container py-5">
			<form class="col-12" action="<?=base_url('home/busca_produtos')?>" method="POST">
				<p class="font-weight-bold text-center">Nova Busca</p>
				<div class="form-group row justify-content-center">
					<div class="col-md-6 col-12">
						<label for="busca">Buscar produtos</label>
						<input type="text" class="form-control" name="busca" id="busca" required placeholder="Pesquise por produtos (ex: arroz, alface, ...)">
					</div>
					<div class="col-md-3 col-12">
						<label for="dia">Escolha uma data</label>
						<input type="date" class="form-control" name="dia" id="dia" required>
					</div>
				</div>
				<div class="row w-100 m-0 justify-content-center">
					<button type="submit" class="btn btn-dark my-2">Buscar</button>
				</div>
			</form>
			<h1 class="text-center mt-4">Busca Ofertas</h1>
			<h2 class="text-center">Resultados da pesquisa</h2>
			<div class="container">
				<?php if ($result): ?>					
					<?php foreach ($result as $r) : ?>
						<div class="row w-100 mx-0 justify-content-center align-items-center my-3 box-produto">
							<div class="col-md-6 col-12 my-3">
								<p class="font-weight-bold m-0"><?=$r->titulo?></p>
								<?=$r->descricao?><br>
								<small>Oferta válida de <strong><?php echo date('d/m/Y', strtotime($r->dataini))?></strong> até <strong><?php echo date('d/m/Y', strtotime($r->datafim))?></strong></small>
							</div>
							<div class="col-md-2 col-12 text-center my-3">
								<p class="font-weight-bold m-0">Valor:</p>
								<p>R$ <?php echo str_replace('.', ',', $r->valor);?></p>
							</div>
							<div class="col-md-4 col-12 text-center my-3">
								<p>Supermercado:</p>
								<?php if ($r->codigo_loja == 0) : ?>
									<img class="w-50" src="<?=base_url('assets/img/brands/logo-delta.jpg')?>">								
								<?php elseif ($r->codigo_loja == 1) : ?>
									<img class="w-50" src="<?=base_url('assets/img/brands/logo-favetta.jpg')?>">
								<?php elseif ($r->codigo_loja == 2) : ?>
									<img class="w-50" src="<?=base_url('assets/img/brands/logo-spani.jpg')?>">
								<?php elseif ($r->codigo_loja == 3) : ?>
									<img class="w-50" src="<?=base_url('assets/img/brands/logo-tonin.jpg')?>">
								<?php elseif ($r->codigo_loja == 4) : ?>
									<img class="w-50" src="<?=base_url('assets/img/brands/logo-paguemenos.jpg')?>">
								<?php endif; ?>
							</div>					
						</div>
					<?php endforeach;?>
				<?php else : ?>
					<p class="text-center">Nenhum resultado encontrado. Refaça sua busca.</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('template/footer');?>
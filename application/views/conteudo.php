<div class="container py-5">
	<h1 class="text-center">Busca Ofertas</h1>
	<h2 class="text-center">A plataforma ideal para você procurar as melhores ofertas dos supermercados de Araras-SP.</h2>
	<p class="text-center">Trabalho de Projeto Integrador - Cursos de Computação - UNIVESP - 2021</p>
	<form class="col-12" action="<?=base_url('home/busca_produtos')?>" method="POST">
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
</div>
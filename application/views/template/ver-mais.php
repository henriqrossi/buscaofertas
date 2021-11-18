<section class="veja-tambem">
	<div class="container py-5">
		<div class="row w-100 m-0 align-items-center">
			<h3 class="col-md-3 m-0 text-center" style="color: #FCB900">VEJA TAMBÉM</h3>
			<span class="col-md-9 linha"></span>
		</div>
		<div class="multiple-items my-3">
			<?php foreach ($related as $rel): ?>
				<div class="text-center m-3">
					<div class="box-produto-detail mb-3">
						<img class="mx-auto my-2 img-produto" src="<?=base_url('assets/img/produtos/'.$rel->imagem)?>" alt="Produto" />
						<p class="font-weight-bold"><?=$rel->titulo?></p>
					</div>
					<div class="row w-100 m-0 justify-content-center align-items-center">
						<a class="btn-vermais" href="<?=base_url('home/detalhe_produto/').$rel->id?>">VER MAIS</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
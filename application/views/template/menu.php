<nav id="navsidemenu" class="sidemenu navbar navbar-expand-lg py-5 px-3">
	<div class="row justify-content-center w-100 m-0">
		<button class="navbar-toggler custom-toggler my-3" type="button" data-toggle="collapse" data-target="#navbarSidemenu" aria-controls="navbarSidemenu" aria-expanded="false" aria-label="Toggle navigation">
			<span>Produtos</span>
		</button>
	</div>
	<section class="collapse navbar-collapse" id="navbarSidemenu">
		<ul class="d-flex flex-column m-0 p-0" style="list-style: none">
			<?php foreach ($depart as $dep): ?>
				<li class="dropdown nav-item hover-produto">
					<!-- <a class="link-produto-home" href="<?=base_url('home/buscaDepto/'.$dep->id)?>"><?=$dep->descricao?></a> -->
					<a class="link-produto-home" href="#"><?=$dep->descricao?></a>
					<?php if($cats): ?>
						<ul class="dropdown-menu dropdown-menu-custom">
							<?php foreach ($cats as $cat): 
								if($cat->id_depart == $dep->id): ?>
									<!-- <li><a href="<?=base_url('home/buscaCategoria/'.$cat->id_categ)?>" class="nav-link"><?=$cat->descricao?></a></li> -->
									<li><a href="#" class="nav-link"><?=$cat->descricao?></a></li>
									<hr class="line-dropdown">
									<?php 
								endif;
							endforeach; ?>
						</ul>
					<?php endif;?>
				</li>
			<?php endforeach; ?>
		</ul>
	</section>
</nav>
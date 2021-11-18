<?php $this->load->view('template/header');?>
<div id="content-wrapper" class="d-flex flex-column">
	<div id="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-4 col-md-6 my-4">
					<div class="card border-left-warning shadow h-100 py-2">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-2">
									<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Produtos Cadastrados</div>
									<div class="h5 mb-0 font-weight-bold text-gray-800"><?=$produtos?></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('template/footer');?>
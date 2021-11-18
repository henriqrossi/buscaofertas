<?php $this->load->view('template/header');?>
<style type="text/css">
	.estrela-destaque {
		cursor: pointer;
		color: #EC7025;
	}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">GERENCIAR PRODUTOS</h6>
				</div>
				<div class="card-body">
					<!-- <?php echo $this->session->flashdata('result');?> -->
					<a href="<?=base_url('dashboard/cadastrar_produto')?>"><b><i class="fas fa-plus"></i></i> CADASTRAR NOVO PRODUTO</b></a>
					<div id="prods" class="table mt-3">
						<?=$produtos?>
					</div>
					<div class="row text-center">
						<div class="col py-4">
							<button class="btn btn-info" onclick="window.history.back()"><b>VOLTAR</b></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('template/footer');?>
<script src="<?=base_url('assets/js/jquery.dataTables.min.js');?>"></script>
<script src="<?=base_url('assets/js/dataTables.bootstrap4.min.js');?>"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#dataTable').DataTable();
	});

	function excluir(id) {
		if (confirm("Deseja excluir o produto ID: "+id+" ?")) {
			$.ajax({
				type: 'POST',
				url: '<?=base_url('dashboard/excluir_prod')?>',
				data: {id:id},
				success: function(retorno) {
					document.getElementById('prods').innerHTML = retorno;
				}
			});
		}
	}

	function destaca(tipo,id) {
		if(tipo == 0) {
			message = "Deseja remover o destaque  do produto ID: "+id+" ?"
		} else {
			message  = "Deseja destacar o produto ID: "+id+" ?";
		}
		if (confirm(message)) {
			$.ajax({
				type: 'POST',
				url: '<?=base_url('dashboard/destacaProd')?>',
				data: {id:id,tipo:tipo},
				success: function(retorno) {
					document.getElementById('prods').innerHTML = retorno;
				}
			});
		}
	}
</script>
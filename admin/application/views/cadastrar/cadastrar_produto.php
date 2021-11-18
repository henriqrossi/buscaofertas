<?php $this->load->view('template/header');?>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<style type="text/css">
	.note-editable {
		height: 150px !important;
	}

	.panel-heading {
		background-color: #f1f1f1;
	}

	.aba {
		background-color: black;
		color: #ff9800;
		text-align: center;
		padding: 10px 0 10px 0;
		line-height: 20px;
		font-weight: bold;
		border-radius: 15px 15px 0 0;
	}

	.abaAtiva {
		background-color: #ff9800;
		color: black;
		text-align: center;
		padding: 10px 0 10px 0;
		line-height: 20px;
		font-weight: bold;
		border-radius: 15px 15px 0 0;
	}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<div class="card shadow mb-4">
				<div class="card-header py-3">
					<h6 class="m-0 font-weight-bold text-primary">CADASTRAR PRODUTO</h6>
				</div>
				<div class="card-body">
					<div class="row offset-md-1">
						<form action="<?=base_url('dashboard/grava_prod');?>" class="col-12" method="post" enctype="multipart/form-data">
							<div class="row mb-3">
								<div class="col-2 abaAtiva" onclick="cores(1)" id="dp" style="cursor: pointer;">DADOS PRINCIPAIS</div>
								<div class="col-2 aba" onclick="cores(2)" id="dc" style="cursor: pointer;">DATAS DE OFERTA</div>
								<div class="col-2 aba" onclick="cores(3)" id="da" style="cursor: pointer;">INFORMAÇÕES DE VENDA</div>
							</div>
							<div id="principal">
								<div class="row col-11">
									<div class="form-group col-6">
										<label class="col" for="titulo">
											<b>DEPARTAMENTO<span class="required">*</span></b> <small>(Departamento do seu produto)</small>
										</label>
										<div class="col-md-12">
											<input type="radio" name="dept" value="1" onclick="existe()" checked> Departamento Existente &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<input type="radio" name="dept" value="2" onclick="nova()"> Novo departamento
											<div id="dept" class="mt-1">
												<?=$depart;?>
											</div>
										</div>
									</div>
									<div class="form-group col-6">
										<label class="col" for="titulo">
											<b>CATEGORIA<span class="required">*</span></b> <small>(Categoria do seu produto)</small>
										</label>
										<div class="col-md-12">
											<input type="radio" name="categ" value="1" onclick="existe2()" checked> Categoria existente &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<input type="radio" name="categ" value="2" onclick="nova2()"> Nova categoria
											<div id="categ" class="mt-1">
												<?=$categ;?>
											</div>
										</div>
									</div>
								</div>
								<div class="row col-11">
									<div class="form-group col-3">
										<label class="col" for="codigo_loja">
											<b>Supermercado</b> <small>(Código do supermercado)</small>
										</label>
										<div class="col-md-12">
											<!-- <input type="text" id="codigo_loja" name="codigo_loja" class="form-control" maxlength="10" required> -->
											<select id="codigo_loja" name="codigo_loja" class="form-control" required>
												<option value="" selected>Selecione o mercado</option>
												<option value="0">Delta</option>
												<option value="1">Favetta</option>
												<option value="2">Spani</option>
												<option value="3">Tonin</option>
												<option value="4">Pague Menos</option>
											</select>
										</div>
									</div>
									<div class="form-group col-7">
										<label class="col" for="titulo">
											<b>NOME DO PRODUTO</b> <small>(Nome do seu produto)</small>
										</label>
										<div class="col-md-12">
											<input type="text" id="titulo" name="titulo" class="form-control" maxlength="150" required>
										</div>
									</div>
									<div class="form-group col-2">
										<label class="col" for="titulo">
											<b>Un. Medida</b>
										</label>
										<div class="col-md-12">
											<select name="uMedida" class="form-control">
												<option value="UN">UN</option>
												<option value="CT">CT - (cartela)</option>
												<option value="CX">CX - (Caixa)</option>
												<option value="DZ">DZ - (Dúzia)</option>
												<option value="GS">GS - (Grosa)</option>
												<option value="PÇ">PÇ - (PEÇA)</option>
												<option value="PR">PR - (PAR)</option>
												<option value="PT">PT - (PACOTE)</option>
												<option value="RL">RL - (ROLO)</option>
												<option value="M">M - (Metro)</option>
												<option value="CM">CM - (Centímetro)</option>
												<option value="KG">KG - (Quilo)</option>
												<option value="G">G - (Grama)</option>
												<option value="SC">SC - (Saca)</option>
												<option value="L">L - (Litro)</option>
												<option value="M3">M³ - (Metro Cúbico)</option>
												<option value="ML">ML - (Mililitro)</option>
												<option value="M2">M² - (Metro Quadrado)</option>
												<option value="CM2">CM² - (Centimetro Quadrado)</option>
											</select>
										</div>
									</div>
								</div>
								<div class="row col-11">
									<div class="form-group col-4">
										<label class="col" for="titulo">
											<b>MARCA<span class="required">*</span></b> <small>(Marca do seu produto)</small>
										</label>
										<div class="col-md-12">
											<input type="radio" name="brand" value="1" onclick="existe3()" checked> Marca existente &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<input type="radio" name="brand" value="2" onclick="nova3()"> Nova marca
											<div id="brand" class="mt-1">
												<?=$brands;?>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group col-11">
									<label class="col" for="texto">
										<b>DESCRIÇÃO</b>
										<small>(Texto de descrição de seu produto)</small>
									</label>
									<label class="col">
										<textarea id="summernote" name="descricao" style="display: none" maxlength="500"></textarea>
									</label>
								</div>
							</div>
							<div id="comp" style="display: none">
								<div class="form-group col-11">
									<div class="row">
										<div class="col-md-6 col-12">
											<label for="dataini">Data Inicial</label>
											<input type="date" class="form-control" name="dataini" id="dataini" required>
										</div>
										<div class="col-md-6 col-12">
											<label for="datafim">Data Final</label>
											<input type="date" class="form-control" name="datafim" id="datafim" required>
										</div>
									</div>
								</div>
							</div>
							<div id="add" style="display: none">
								<div class="row col-12">
									<div class="form-group col-4">
										<label class="col" for="valor">
											<b>VALOR</b> <small>(Valor total do produto)</small>
										</label>
										<div class="col-md-12">
											<input type="text" id="valor" name="valor" class="form-control" maxlength="10">
										</div>
									</div>
								</div>
							</div>
							<div class="row text-center">
								<div class="col py-4">
									<button class="btn btn-info" onclick="window.history.back()"><b>VOLTAR</b></button>
									<button type="submit" class="btn btn-success"><b>GRAVAR</b></button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('template/footer');?>
<script src="<?=base_url('assets/js/summernote.js')?>"></script>
<script type="text/javascript">
	function cores(tipo) {
		document.getElementById('dp').className = 'col-2 aba';
		document.getElementById('dc').className = 'col-2 aba';
		document.getElementById('da').className = 'col-2 aba';
		document.getElementById('principal').style.display = 'none';
		document.getElementById('comp').style.display = 'none';
		document.getElementById('add').style.display = 'none';
		if(tipo == 1) {
			document.getElementById('dp').className = 'col-2 abaAtiva';
			document.getElementById('principal').style.display = 'block';
		}
		if(tipo == 2) {
			document.getElementById('dc').className = 'col-2 abaAtiva';
			document.getElementById('comp').style.display = 'block';
		}
		if(tipo == 3) {
			document.getElementById('add').style.display = 'block';
			document.getElementById('da').className = 'col-2 abaAtiva';
		}
	}

	$(document).ready(function() {
		$('#summernote').summernote();
	});

	function nova() {
		document.getElementById('dept').innerHTML = '<small>(Descrição de seu departamento)</small><input type="text" name="nomeDept" class="form-control" required>';
	}

	function existe() {
		$.ajax({
			type: 'POST',
			url: '<?=base_url('dashboard/buscaDept')?>',
			data: {},
			success: function(retorno) {
				document.getElementById('dept').innerHTML = retorno;
			}
		});
	}

	function nova2() {
		document.getElementById('categ').innerHTML = '<small>(Descrição de sua categoria)</small><input type="text" name="nomeCateg" class="form-control" required>';
	}

	function existe2() {
		$.ajax({
			type: 'POST',
			url: '<?=base_url('dashboard/buscaCateg')?>',
			data: {},
			success: function(retorno) {
				document.getElementById('categ').innerHTML = retorno;
			}
		});
	}

	function nova3() {
		document.getElementById('brand').innerHTML = '<small>(Descrição de sua marca)</small><input type="text" name="nomeBrand" class="form-control" required>';
	}

	function existe3() {
		$.ajax({
			type: 'POST',
			url: '<?=base_url('dashboard/buscaBrands')?>',
			data: {},
			success: function(retorno) {
				document.getElementById('brand').innerHTML = retorno;
			}
		});
	}

	function excluiCateg() {
		var idCateg = document.getElementById('idCateg').value;
		if(idCateg != '' && idCateg != null) {
			$.ajax({
				type: 'POST',
				url: '<?=base_url('dashboard/excluiCateg')?>',
				data: {idCateg:idCateg},
				success: function(retorno) {
					if(retorno == -7) {
						alert('Há produto(s) vinculado(s) a este departamento!');
					} else if(retorno == -8) {
						alert('Houve um erro, tente novamente!');
					} else {
						existe();
					}
				}
			});
		} else {
			alert('Selecione uma categoria para excluir');
		}
	}

	function excluiDept() {
		var idDept = document.getElementById('idDept').value;
		if(idDept != '' && idDept != null) {
			$.ajax({
				type: 'POST',
				url: '<?=base_url('dashboard/excluiDept')?>',
				data: {idDept:idDept},
				success: function(retorno) {
					if(retorno == -7) {
						alert('Há produto(s) vinculado(s) a este departamento!');
					} else if(retorno == -8) {
						alert('Houve um erro, tente novamente!');
					} else {
						existe();
					}
				}
			});
		} else {
			alert('Selecione um departamento para excluir');
		}
	}

	function excluiBrand() {
		var idBrand = document.getElementById('idBrand').value;
		if(idBrand != '' && idBrand != null) {
			$.ajax({
				type: 'POST',
				url: '<?=base_url('dashboard/excluiBrand')?>',
				data: {idBrand:idBrand},
				success: function(retorno) {
					if(retorno == -7) {
						alert('Há produto(s) vinculado(s) a este departamento!');
					} else if(retorno == -8) {
						alert('Houve um erro, tente novamente!');
					} else {
						existe();
					}
				}
			});
		} else {
			alert('Selecione uma profissão para excluir');
		}
	}
</script>
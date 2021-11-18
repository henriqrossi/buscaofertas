<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		// is_logged_in();
		$this->load->model('general_model');
	}

	public function index()
	{
		$data['produtos'] = $this->general_model->contaProd();
		$this->load->view('dashboard',$data);
	}

	public function gerenciar_produtos($id = false)
	{
		$data['produtos'] = $this->general_model->buscaProdutos();
		if($id) {
			$data['ident'] = $id;
		} else {
			$data['ident'] = -1;
		}
		$this->load->view('gerenciar/gerenciar_produtos',$data);
	}

	public function excluir_prod()
	{
		$id = $this->input->post('id');
		$grava = $this->general_model->excluir('produtos',$id);
		if($grava) {
			echo $this->general_model->buscaProdutos();
		}
	}

	public function cadastrar_produto()
	{
		$data['depart'] = $this->general_model->buscaDeparts();
		$data['categ'] = $this->general_model->buscaCateg();
		$data['brands'] = $this->general_model->buscaBrands();
		$this->load->view('cadastrar/cadastrar_produto',$data);
	}

	public function grava_prod()
	{
		$data = $this->input->post();
		if($data['dept'] == 2) {
			$dept['descricao'] = $data['nomeDept'];
			$grava_dept = $this->general_model->gravaDados('departamento',$dept);
			$prod['id_depart'] = $grava_dept;
		} else {
			$prod['id_depart'] = $data['nomeDept'];
		}
		if($data['categ'] == 2) {
			$dept['descricao'] = $data['nomeCateg'];
			$grava_categ = $this->general_model->gravaDados('categoria',$dept);
			$prod['id_categ'] = $grava_categ;
		} else {
			$prod['id_categ'] = $data['nomeCateg'];
		}
		if($data['brand'] == 2) {
			$dept['descricao'] = $data['nomeBrand'];
			$grava_brand = $this->general_model->gravaDados('brand',$dept);
			$prod['id_brand'] = $grava_brand;
		} else {
			$prod['id_brand'] = $data['nomeBrand'];
		}
		$prod['codigo_loja'] = $data['codigo_loja'];
		$prod['titulo'] = $data['titulo'];
		$prod['uMedida'] = $data['uMedida'];
		$prod['descricao'] = $data['descricao'];
		$prod['valor'] = $data['valor'];
		$prod['estoque'] = 0;
		$prod['dataini'] = $data['dataini'];
		$prod['datafim'] = $data['datafim'];
		$id = $this->input->post('id');
		if($id) {
			$grava =$this->general_model->gravaDados('produtos',$prod,$id);
		} else {
			$grava =$this->general_model->gravaDados('produtos',$prod);
		}
		if($grava) {
			if($id) {
				$message = array('message_heading' => 'Produto alterado com sucesso','class_result'  => 'success');
			} else {
				$message = array('message_heading' => 'Produto cadastrado com sucesso','class_result'  => 'success');
			}
		} else {
			$message = array('message_heading' => 'Erro ao cadastrar produto!','class_result'  => 'danger');
		}
		$this->session->set_flashdata('result', $this->parser->parse('template/result_message.php', $message));
		redirect(base_url('dashboard/gerenciar_produtos/'.$grava));
	}

	public function buscaDept()
	{
		echo $this->general_model->buscaDeparts();
	}

	public function buscaCateg()
	{
		echo $this->general_model->buscaCateg();
	}

	public function buscaBrands()
	{
		echo $this->general_model->buscaBrands();
	}

	public function buscaLogo()
	{
		echo $this->general_model->buscaLogo($this->input->post('idBrand'));
	}

	public function excluiCateg()
	{
		echo $this->general_model->excluiCateg($this->input->post('idCateg'));
	}
	
	public function excluiDept()
	{
		echo $this->general_model->excluiDept($this->input->post('idDept'));
	}

	public function excluiBrand()
	{
		echo $this->general_model->excluiBrand($this->input->post('idBrand'));
	}

	public function editar_produto($id = false)
	{
		if($id) {
			$data['prod'] = $prod =$this->general_model->busca_geral('produtos',$id);
			$data['depart'] = $this->general_model->buscaDeparts($prod[0]->id_depart);
			$data['categ'] = $this->general_model->buscaCateg($prod[0]->id_categ);
			$data['brands'] = $this->general_model->buscaBrands($prod[0]->id_brand);
			$this->load->view('editar/editar_produto',$data);
		} else {
			redirect(base_url('dashboard/gerenciar_produtos'));
		}
	}

	// public function cadastrarImagens($idGal)
	// {
	// 	if($idGal) {
	// 		$data['id'] = $idGal;
	// 		$this->load->view('cadastrar/cadastrar_fotos',$data);
	// 	} else {
	// 		redirect(base_url('dashboard/gerenciar_galerias'));
	// 	}
	// }

	// public function upload($id)
	// {
	// 	if($_FILES['file']['name'] != '') {
	// 		$curl = $this->session->userdata(APP_NAME.'site')."/api_busca/setUpload";
	// 		$data['idProd'] = $id;
	// 		$data['imagem'] = $_FILES['file']['name'];
	// 		$data['arq'] = base64_encode(file_get_contents($_FILES['file']['tmp_name']));
	// 		$params = json_encode($data);
	// 		$ch = curl_init($curl);
	// 		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	// 		curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
	// 		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// 		curl_setopt($ch, CURLOPT_VERBOSE, true);
	// 		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	// 		$content = curl_exec($ch);
	// 		$content = json_decode($content);
	// 		if($content->message == 'SUCESSO') {
	// 			echo 'Sucesso';
	// 		} else {
	// 			echo 'erro';
	// 		}
	// 	} else {
	// 		echo 'erro';
	// 	}
	// }

	// public function gerenciar_fotos($id)
	// {
	// 	if($id) {
	// 		$data['idd'] = $id;
	// 		$data['fotos'] = $this->general_model->buscaFotos($id);
	// 		$this->load->view('gerenciar/gerenciar_fotos',$data);
	// 	} else {
	// 		redirect(base_url('dashboard/gerenciar_galerias'));
	// 	}
	// }

	// public function excluir_foto()
	// {
	// 	$grava = $this->general_model->excluirB('imgGaleria',$this->input->post('id'));
	// 	if($grava) {
	// 		echo $this->general_model->buscaFotos($this->input->post('idGal'));
	// 	}
	// }

	// public function destacaProd()
	// {
	// 	$data['destaque'] = $tipo = $this->input->post('tipo');
	// 	$id = $this->input->post('id');
 //    	echo $this->general_model->destacaProd($id,$data);
	// }

}
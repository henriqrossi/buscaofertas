<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class General_model extends CI_Model {
	public function contaProd()
	{
		$this->db->select('*');
		$this->db->from('produtos');
		$this->db->where('excluido',0);
		return count($this->db->get()->result());
	}

	public function busca_geral($tabela,$id = false)
	{
		$this->db->select('*');
		$this->db->from($tabela);
		if($id) {
			$this->db->where('id',$id);
		}
		$this->db->where('excluido',0);
		return $this->db->get()->result();
	}

	public function excluir($tabela,$id)
	{
		$data['excluido'] = 1;
		$this->db->where('id',$id);
		return $this->db->update($tabela,$data);
	}

	public function gravaGeral($tabela,$data)
	{
		return $this->db->insert($tabela,$data);
	}

	public function buscaProdutos()
	{
		$this->db->select('pd.*,dp.descricao as depart,ct.descricao as categ,bd.descricao as brand,pd.destaque');
		$this->db->from('produtos as pd');
		$this->db->join('departamento as dp','dp.id = pd.id_depart');
		$this->db->join('categoria as ct','ct.id = pd.id_categ');
		$this->db->join('brand as bd','bd.id = pd.id_brand');
		$this->db->where('pd.excluido',0);
		$prods = $this->db->get()->result();
		$return = '<div class="table-responsive"><table class="table table-bordered table-striped table-hover text-center" id="dataTable">
						<thead>
							<tr>
								<th>ID</th>
								<th>CÓD</th>
								<th>DEPARTAMENTO</th>
								<th>CATEGORIA</th>
								<th>MARCA</th>
								<th>NOME PROD.</th>
								<th>UN. MED.</th>
								<th>VALOR</th>
								<th>AÇÃO</th>
							</tr>
						</thead>
						<tbody>';
		if($prods) {
			foreach ($prods as $prod):
				$return .= '<tr>
								<td>'.$prod->id.'</td>
								<td>'.$prod->codigo_loja.'</td>
								<td>'.$prod->depart.'</td>
								<td>'.$prod->categ.'</td>
								<td>'.$prod->brand.'</td>
								<td>'.$prod->titulo.'</td>
								<td>'.$prod->uMedida.'</td>
								<td>'.$prod->valor.'</td>
								<td><a href="'.base_url('dashboard/editar_produto/').$prod->id.'" class="btn btn-info">EDITAR</a> <button type="button" class="btn btn-danger" onclick="excluir('.$prod->id.')">Excluir</button></td>
							</tr>';
			endforeach;
		} else {
			$return .= '<tr>
			<td colspan="4">Não há registros</td>
			</tr>';
		}
		return $return.'</tbody></table></div>';
	}

	public function buscaDeparts($id = false)
	{
		$this->db->select('*');
		$this->db->from('departamento');
		$this->db->where('excluido',0);
		$departs = $this->db->get()->result();
		$dept = "<div class='row'><div class='col-10'><select name='nomeDept' id='idDept' class='form-control' required>
					<option value='' disabled selected> - SELECIONE - </option>";
		if($departs) {
			foreach ($departs as $row) {
				$dept .= "<option value='".$row->id."' ".($row->id == $id ? 'selected' : '').">".$row->descricao."</option>";
			}
		} else {
			$dept .= "<option value='' disabled>Não há opções</option>";
		}
		return $dept."</select></div><div class='col-2'><button type='button' class='btn btn-danger form-control' onclick='excluiDept()'><i class='fas fa-trash-alt'></i></button></div></div>";
	}
	
	public function buscaCateg($id = false)
	{
		$this->db->select('*');
		$this->db->from('categoria');
		$this->db->where('excluido',0);
		$categorias = $this->db->get()->result();
		$categs = "<div class='row'><div class='col-10'><select name='nomeCateg' id='idCateg' class='form-control' required>
					<option value='' disabled selected> - SELECIONE - </option>";
		if($categorias) {
			foreach ($categorias as $row) {
				$categs .= "<option value='".$row->id."' ".($row->id == $id ? 'selected' : '').">".$row->descricao."</option>";
			}
		} else {
			$categs .= "<option value='' disabled>Não há opções</option>";
		}
		return $categs."</select></div><div class='col-2'><button type='button' class='btn btn-danger form-control' onclick='excluiCateg()'><i class='fas fa-trash-alt'></i></button></div></div>";
	}

	public function buscaBrands($id = false)
	{
		$this->db->select('*');
		$this->db->from('brand');
		$this->db->where('excluido',0);
		$brands = $this->db->get()->result();
		$bds = "<div class='row'><div class='col-10'><select name='nomeBrand' class='form-control' id='idBrand' required onchange='trocaImgGal(this.value)'>
					<option value='' disabled selected> - SELECIONE - </option>";
		if($brands) {
			foreach ($brands as $row) {
				$bds .= "<option value='".$row->id."' ".($row->id == $id ? 'selected' : '').">".$row->descricao."</option>";
			}
		} else {
			$bds .= "<option value='' disabled>Não há opções</option>";
		}
		return $bds."</select></div><div class='col-2'><button type='button' class='btn btn-danger form-control' onclick='excluiBrand()'><i class='fas fa-trash-alt'></i></button></div></div>";
	}

	public function gravaDados($tabela,$data,$id = false)
	{
		if($id) {
			$this->db->where('id',$id);
			$this->db->update($tabela,$data);
			return $id;
		} else {
			$this->db->insert($tabela,$data);
			return $this->db->insert_id();
		}
	}

	public function excluiCateg($id)
	{
		if($id) {
			$this->db->select('*');
			$this->db->from('produtos');
			$this->db->where('id_categ',$id);
			$this->db->where('excluido',0);
			$categs = $this->db->get()->result();
			if($categs) {
				return -7;
			} else {
				$data['excluido'] = 1;
				$this->db->where('id',$id);
				$this->db->update('categoria',$data);
				return true;
			}
		} else {
			return -8;
		}
	}

	public function excluiDept($id)
	{
		if($id) {
			$this->db->select('*');
			$this->db->from('produtos');
			$this->db->where('id_depart',$id);
			$this->db->where('excluido',0);
			$categs = $this->db->get()->result();
			if($categs) {
				return -7;
			} else {
				$data['excluido'] = 1;
				$this->db->where('id',$id);
				$this->db->update('departamento',$data);
				return true;
			}
		} else {
			return -8;
		}
	}

	public function excluiBrand($id)
	{
		if($id) {
			$this->db->select('*');
			$this->db->from('produtos');
			$this->db->where('id_brand',$id);
			$this->db->where('excluido',0);
			$categs = $this->db->get()->result();
			if($categs) {
				return -7;
			} else {
				$data['excluido'] = 1;
				$this->db->where('id',$id);
				$this->db->update('brand',$data);
				return true;
			}
		} else {
			return -8;
		}
	}

	public function destacaProd($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('produtos',$data);
		return $this->buscaProdutos();
	}

}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class General_model extends CI_Model {

	public function buscaTudo($data,$busca = false)
	{
		$this->db->select('*');
		$this->db->from('produtos');
		if($busca) {
			$this->db->like('titulo', $busca);
		}
		$this->db->where('dataini <=', $data['dia']);
		$this->db->where('datafim >=', $data['dia']);
		$this->db->where('excluido', 0);
		$this->db->order_by('valor', 'ASC');
		return $this->db->get()->result();
	}

}
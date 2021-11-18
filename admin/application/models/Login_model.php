<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {
	public function verifica_login($data) 
	{
		$this->db->select('*');
		$this->db->from('usuarios');
		$this->db->where('usuario', $data['usuario']);
		$this->db->where('senha', $data['senha']);
		return $this->db->get()->result();
	}
}
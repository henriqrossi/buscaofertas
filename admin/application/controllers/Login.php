<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function logar() 
	{
		$data['usuario'] = $this->input->post('usuario');
		$data['senha'] = encryptPass($this->input->post('senha'));
		$usuario = $this->login_model->verifica_login($data);
		if($usuario){
			$this->session->set_userdata(APP_NAME.'id', $usuario[0]->id); //cria session
			redirect(base_url('dashboard'));
		} else {
			$message = array('message_heading' => 'Usuário e/ou senha incorretos, verifique!','class_result' => 'danger');
			$this->session->set_flashdata('result', $this->parser->parse('template/result_message.php', $message));
			redirect(base_url());
		}
	}
	
	public function logout()
    {
        /* Ao clicar em "Sair" na header a sessão é destruída e o usuário redirecionado */
        $this->session->sess_destroy();
        redirect(base_url("login"));
    }
}

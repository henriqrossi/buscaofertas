<?php 
function is_logged_in() {
    $CI =& get_instance();
    if (empty($CI->session->userdata(APP_NAME.'id'))) redirect(base_url());
    return true;
}

function encryptPass($senha) {
    $CI =& get_instance();
    $h1 = md5($senha);
    $h2 = hash('sha256', 'BUSCA_OFERTA');
    $h3 = hash('sha256', $CI->config->item('encryption_key'));
    $h4 = md5($h3.$h1.$h2);
    return $h4;
}

function envia_email($mail, $sub, $msg) {
	$ci =& get_instance();
	$ci->load->library('email');
	$ci->email->from(emailpadrao);
	$ci->email->to($mail);
	$ci->email->subject($sub);
	$ci->email->message($msg);
	$ci->email->set_mailtype('html');
	$result = $ci->email->send();
	//if (!$result) { echo  $ci->email->print_debugger(); exit;} else {echo 'ok';}
}

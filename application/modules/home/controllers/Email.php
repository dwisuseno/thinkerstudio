<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Email extends CI_Controller {
	function __construct(){
		parent::__construct();
	}

	function sendMail(){
		$ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "alajiseno@gmail.com";
        $config['smtp_pass'] = "sasukevsnaruto9";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        
        
        $ci->email->initialize($config);
 
        $ci->email->from('thinker.stu@gmail.com', 'Thinker Studio');
        $list = array('thinker.stu@gmail.com');
        $ci->email->to($list);
        $ci->email->subject('judul email');
        $ci->email->message('isi email');
        if ($this->email->send()) {
            echo 'Email sent.';
        } else {
            show_error($this->email->print_debugger());
        }
	}
}
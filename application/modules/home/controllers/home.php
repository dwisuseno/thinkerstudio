<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index(){
		$this->ci->load->view('template/head');
		$this->ci->load->view('template/header');
		$this->load->view('home');
	}

	
}
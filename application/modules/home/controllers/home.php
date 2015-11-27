<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view('template/head');
		$this->load->view('template/header');
		$this->load->view('template/footer');
		$this->load->view('home');
	}

	
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view('template/head');
		$this->load->view('template/header');
		
		$this->load->view('home');
	}

	// public function error(){
	// 	$this->load->view('template/head');
	// 	$this->load->view('template/header');
	// 	$this->load->view('error');
	// }

	// public function about(){
	// 	$this->load->view('template/head');
	// 	$this->load->view('template/header');
	// 	$this->load->view('about');
	// }
	
	// public function contact(){
	// 	$this->load->view('template/head');
	// 	$this->load->view('template/header');
	// 	$this->load->view('contact');
	// }
}
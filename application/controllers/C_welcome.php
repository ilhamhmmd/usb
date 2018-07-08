<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_welcome extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('m_users');

		if($this->m_users->loginUser()) {
			redirect('user');			
		} elseif($this->m_users->loginAdmin()) {
			redirect('admin');			
		}
	}

	public function index()	{
		$this->load->view('home/welcome');
	}
}

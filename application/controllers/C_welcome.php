<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_welcome extends CI_Controller {

	public function index()	{
		$this->load->view('dashboard/welcome');
	}
}

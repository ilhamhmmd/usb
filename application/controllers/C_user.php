<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class C_user extends CI_Controller {

        public function __construct() {
            parent::__construct();        
            $this->load->model('m_users');
        }

        public function index() {
            $data['user'] = $this->m_users->get_user('nik', $_SESSION['loginUser']);
            $this->load->view('dashboard_user/header');
            $this->load->view('dashboard_user/body', $data);
            $this->load->view('dashboard_user/footer');
        }
    }
?>
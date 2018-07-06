<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class C_user extends CI_Controller {

        public function __construct() {
            parent::__construct();        
            $this->load->model('m_users');

            if(!$this->m_users->loginUser()) {
                redirect('login');			
            }
        }

        public function index() {
            $data['user'] = $this->m_users->get_user('nik', $_SESSION['data_user']);
            $this->load->view('dashboard_user/header');
            $this->load->view('dashboard_user/body', $data);
            $this->load->view('dashboard_user/footer');
        }
    }
?>
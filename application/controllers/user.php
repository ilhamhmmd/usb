<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class user extends CI_Controller {

        public function __construct() {
            parent::__construct();        
            $this->load->model('m_users');
            $this->load->model('m_uploads');

            if(!$this->m_users->loginUser()) {
                redirect('login');			
            }
        }

        public function index() {
            $data['user'] = $this->m_users->get_user('nik', $_SESSION['data_user']);
            
            $this->load->view('dashboard_user/dashboard', $data);
        }

        public function upload() {

            $data['user'] = $this->m_users->get_user('nik', $_SESSION['data_user']);
            
            $this->load->view('dashboard_user/upload', $data);
        }

        public function buat_ktp() {
            $data['user'] = $this->m_users->get_user('nik', $_SESSION['data_user']);
            
            $this->load->view('dashboard_user/buat_ktp', $data);
        }

        
        
    }
?>
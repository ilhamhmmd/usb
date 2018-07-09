<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class c_user extends CI_Controller {

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
            $this->load->view('dashboard_user/header');
            $this->load->view('dashboard_user/dashboard', $data);
        }

        public function upload() {

            $data['user'] = $this->m_users->get_user('nik', $_SESSION['data_user']);
            $this->load->view('dashboard_user/header');
            $this->load->view('dashboard_user/upload', $data);
        }

        public function buat_ktp() {
            $data['user'] = $this->m_users->get_user('nik', $_SESSION['data_user']);
            $this->load->view('dashboard_user/header');
            $this->load->view('dashboard_user/buat_ktp', $data);
        }

        public function panduan() {
            $data['user'] = $this->m_users->get_user('nik', $_SESSION['data_user']);
            $this->load->view('dashboard_user/header');
            $this->load->view('dashboard_user/panduan', $data);
        }

        public function pengumuman() {
            $data['user'] = $this->m_users->get_user('nik', $_SESSION['data_user']);
            $this->load->view('dashboard_user/header');
            $this->load->view('dashboard_user/pengumuman', $data);
        }

        public function supeng() {
            $data['user'] = $this->m_users->get_user('nik', $_SESSION['data_user']);
            $this->load->view('dashboard_user/header');
            $this->load->view('dashboard_user/supeng', $data);
        }

        public function suket() {
            $data['user'] = $this->m_users->get_user('nik', $_SESSION['data_user']);
            $this->load->view('dashboard_user/header');
            $this->load->view('dashboard_user/suket', $data);
        }
       
    }
?>
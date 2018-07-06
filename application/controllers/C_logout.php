<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class C_logout extends CI_Controller {

        public function __construct() {
            parent::__construct();        
            $this->load->model('m_users');
        }

        public function logout() {
            unset($_SESSION['data_user'], $_SESSION['loginUser'], $_SESSION['loginAdmin'], $_SESSION['loginAdminRT'], $_SESSION['loginAdminKL'], $_SESSION['loginAdminKC'], $_SESSION['loginAdminMaster']);
            redirect('login');
        }

    }

?>
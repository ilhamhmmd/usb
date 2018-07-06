<?php

    class M_users extends CI_Model {

        public function get_user($key, $value) {
            $query = $this->db->get_where('penduduk', array($key => $value));
            if(!empty($query->row_array())) {
                return $query->row_array();
            }
            return false;
        }

        public function get_login($key, $value) {
            $query = $this->db->get_where('login', array($key => $value));
            if(!empty($query->row_array())) {
                return $query->row_array();
            }
            return false;
        }

        public function get_loginAdmin($key, $value) {
            $query = $this->db->get_where('admin', array($key => $value));
            if(!empty($query->row_array())) {
                return $query->row_array();
            }
            return false;
        }

        public function register()	{
            $this->load->helper('string');
                $_SESSION['token'] = random_string('alnum', 16);
                
                $data = [
                    'nik'           => $this->input->post('nik'),
                    'email'         => $this->input->post('email'),                    
                    'password'      => $this->input->post('password'),
                    'token'         => $_SESSION['token']
                ];
    
                $this->db->insert('login', $data);
        }

        public function update_role($nik, $role_nr) {
            $data = array('role' => $role_nr);
            $this->db->where('nik', $nik);
            return $this->db->update('login', $data);
        }

        public function loginUser() {
            if(!isset($_SESSION['loginUser'])) {
                return false;
            }
    
            return true;
        }

        public function loginAdminRT() {
            if(!isset($_SESSION['loginAdminRT'])) {
                return false;
            }
    
            return true;
        }

        public function loginAdminKC() {
            if(!isset($_SESSION['loginAdminKC'])) {
                return false;
            }
    
            return true;
        }

        public function loginAdminKL() {
            if(!isset($_SESSION['loginAdminKL'])) {
                return false;
            }
    
            return true;
        }

        public function loginAdmin() {
            if(!isset($_SESSION['loginAdmin'])) {
                return false;
            }
    
            return true;
        }

        public function loginAdminMaster() {
            if(!isset($_SESSION['loginAdminMaster'])) {
                return false;
            }
    
            return true;
        }

        public function verified() {
            if(!isset($_SESSION['verified'])) {
                return false;
            }
    
            return true;
        }

    }

?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    public function __construct() {
        parent::__construct();        
        $this->load->model('m_users');
    }

	public function index()	{
        $this->load->view('masuk/login');        
    }
    
    public function login() {
            
        $validator = array('success' => false, 'messages' => array());

        $validate_data = array(
            array(
                'field' => 'nik',
                'label' => 'Nomor Induk Kependudukan',
                'rules' => 'required|callback_checkNIK|callback_checkRole|integer'
            ),
            array(
                'field' => 'password',
                'label' => 'Kata Sandi',
                'rules' => 'required|callback_checkPassword'
            )
        );

        $this->form_validation->set_rules($validate_data);
        $this->form_validation->set_message('required', '{field} harus di isi');        
        $this->form_validation->set_message('integer', '{field} harus berupa digit angka');		
        $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

        if($this->form_validation->run() === true) {

            // retrieve data user (table login)
            $user = $this->m_users->get_login('nik', $this->input->post('nik'));
            $admin = $this->m_users->get_loginAdmin('id_admin', $this->input->post('nik'));

            //dashboard user
            if($user['role'] == 1) {
                //set session
                $_SESSION['data_user'] = $user['nik'];
                $_SESSION['loginUser'] = true;

                $validator['success'] = true;
                $validator['messages'] = 'c_user'; 
                                    
            } 
            
            //dashboard admin
            if($admin['role'] == 2) {
                $_SESSION['data_admin'] = $admin['id_admin'];
                $_SESSION['loginAdminRT'] = true;
                $_SESSION['loginAdmin'] = true;

                $validator['success'] = true;
                $validator['messages'] = 'c_admin';

            } elseif($admin['role'] == 3) {
                $_SESSION['data_admin'] = $admin['id_admin'];
                $_SESSION['loginAdminKC'] = true;
                $_SESSION['loginAdmin'] = true;

                $validator['success'] = true;
                $validator['messages'] = 'c_admin';

            } elseif($admin['role'] == 4) {
                $_SESSION['data_admin'] = $admin['id_admin'];
                $_SESSION['loginAdminKL'] = true;
                $_SESSION['loginAdmin'] = true;

                $validator['success'] = true;
                $validator['messages'] = 'c_admin';
            }
        } 
        else {
            $validator['success'] = false;
                foreach ($_POST as $key => $value) {
                    $validator['messages'][$key] = form_error($key);
                }
        }

        echo json_encode($validator);
    }

    public function checkRole($nik) {
        $user = $this->m_users->get_login('nik',$nik);
        if($user['role'] == 0) {
            $this->form_validation->set_message('checkRole','{field} belum aktif');
            return false;
        } else {
            return true;
        }
    }

    public function checkNIK($nik) {
        if($nik == "") { 
            $this->form_validation->set_message('checkNIK','{field} harus di isi');
            return false;
        }

        if(!$this->m_users->get_login('nik',$nik)) { 
            $this->form_validation->set_message('checkNIK','{field} Salah/Tidak Sesuai');
            return false;
        }            

        return true;
    }

    public function checkPassword($password) {
        $user = $this->m_users->get_login('password', $this->input->post('password'));
        
        if($password == "") { 
            $this->form_validation->set_message('checkPassword','{field} harus di isi');
            return false;
        }
        if(!$user) {
            $this->form_validation->set_message('checkPassword','Kata Sandi anda salah');
            return false;
        }

        return true;
    }



}

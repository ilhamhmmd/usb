<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class C_buat_ktp extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('m_users');
        }

        public function buat() {
            $validator = array('success' => false, 'messages' => array());

            $validate_data = array(
                array(
                    'field' => 'nama',
                    'label' => 'Nama Lengkap',
                    'rules' => 'required'
                ),                
                array(
                    'field' => 'email',
                    'label' => 'Alamat Email',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'alamat',
                    'label' => 'Alamat Lengkap',
                    'rules' => 'required'
                )
            );

            $this->form_validation->set_rules($validate_data);
            $this->form_validation->set_message('required', '{field} harus di isi');            
            $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

            if($this->form_validation->run() === true) {

                // pesan sukses setelah register (AJAX - json )
                $validator['success'] = true;                
                $validator['messages'] = 'Pembuatan data pemohon pembuatan KTP berhasil, lebih lanjut silahkan cek status pemhon secara berkala';  

                // input data after input data pemohon
                $this->m_users->buat_ktp();                          

            } 
            else {
                $validator['success'] = false;
                foreach ($_POST as $key => $value) {
                    $validator['messages'][$key] = form_error($key);
                }
            }

            echo json_encode($validator);

        }
    }

?>
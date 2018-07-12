<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class C_supeng extends CI_controller {
        public function __construct() {
            parent::__construct();
            
            $this->load->model('m_users');
            if(!$this->m_users->loginUser()) {
                redirect('login');
            }
        }

        function supeng() {
            
            $validator = array('success' => false, 'messages' => array());

            $validate_data = array(
                
                array(
                    'field' => 'keperluan_supeng',
                    'label' => 'Keperluan',
                    'rules' => 'required'
                )
            );

            $this->form_validation->set_rules($validate_data);
            $this->form_validation->set_message('required', 'Silahkan isi {field} terlebih dahulu');
            $this->form_validation->set_error_delimiters('<small class="text-right text-danger">', '</small>');
            
            
            
            if($this->form_validation->run() === true) {

                // pesan sukses setelah register (AJAX - json )
                $validator['success'] = true;                
                $validator['messages'] = 'Keperluan anda berhasil terkirim, lebih lanjut silahkan <b>Cek Status Pemohon</b> dalam 1x12 Jam';

                // input data after register
                $this->m_users->supeng();                
                
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
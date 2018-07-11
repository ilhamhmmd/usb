<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class C_suket extends CI_controller {

        public function __construct() {
            parent::__construct();
            
            $this->load->model('m_users');
            if(!$this->m_users->loginUser()) {
                redirect('login');			
            }
        }

        function suket_tidakmampu() {
            
            $validator = array('success' => false, 'messages' => array());

            $validate_data = array(
                
                array(
                    'field' => 'keperluanSKTM',
                    'label' => 'Keperluan',
                    'rules' => 'required'
                )
            );

            $this->form_validation->set_rules($validate_data);
            $this->form_validation->set_message('required', 'Silahkan isi {field} terlebih dahulu');            
            $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
            
            
            
            if($this->form_validation->run() === true) {

                // pesan sukses setelah register (AJAX - json )
                $validator['success'] = true;                
                $validator['messages'] = 'Keperluan anda berhasil terkirim, lebih lanjut silahkan <b>Cek Status Pemohon</b> dalam 1x12 Jam';

                // input data after register
                $this->m_users->suket_tidakmampu();                
                
            } 
            else {
                $validator['success'] = false;
                foreach ($_POST as $key => $value) {
                    $validator['messages'][$key] = form_error($key);
                }
            }

            echo json_encode($validator);
        }

        function suket_kematian() {
            
            $validator = array('success' => false, 'messages' => array());

            $validate_data = array(
                
                array(
                    'field' => 'kematian_nik',
                    'label' => 'Nomor NIK',
                    'rules' => 'required|exact_length[18]|integer'
                ),
                array(
                    'field' => 'kematian_nama',
                    'label' => 'Nama Lengkap',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'kematian_tanggal',
                    'label' => 'Tanggal Kematian',
                    'rules' => 'required'
                )
            );

            $this->form_validation->set_rules($validate_data);
            $this->form_validation->set_message('integer', '{field} harus berupa digit angka NIK (Sesuai KK)');
            $this->form_validation->set_message('exact_length', '{field} harus berisi {param} digit angka NIK (Sesuai KK)');
            $this->form_validation->set_message('required', 'Silahkan isi {field} terlebih dahulu');            
            $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
            
            
            
            if($this->form_validation->run() === true) {

                // pesan sukses setelah register (AJAX - json )
                $validator['success'] = true;                
                $validator['messages'] = 'Keperluan anda berhasil terkirim, lebih lanjut silahkan <b>Cek Status Pemohon</b> dalam 1x12 Jam';

                // input data after register
                $this->m_users->suket_kematian();                
                
            } 
            else {
                $validator['success'] = false;
                foreach ($_POST as $key => $value) {
                    $validator['messages'][$key] = form_error($key);
                }
            }

            echo json_encode($validator);
        }

        function suket_usaha() {
            
            $validator = array('success' => false, 'messages' => array());

            $validate_data = array(
                
                array(
                    'field' => 'usaha_nama',
                    'label' => 'Nama Usaha',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'usaha_jenis',
                    'label' => 'Jenis Usaha',
                    'rules' => 'required'
                )
            );

            $this->form_validation->set_rules($validate_data);            
            $this->form_validation->set_message('required', 'Silahkan isi {field} terlebih dahulu');            
            $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
            
            
            
            if($this->form_validation->run() === true) {

                // pesan sukses setelah register (AJAX - json )
                $validator['success'] = true;                
                $validator['messages'] = 'Keperluan anda berhasil terkirim, lebih lanjut silahkan <b>Cek Status Pemohon</b> dalam 1x12 Jam';

                // input data after register
                $this->m_users->suket_usaha();                
                
            } 
            else {
                $validator['success'] = false;
                foreach ($_POST as $key => $value) {
                    $validator['messages'][$key] = form_error($key);
                }
            }

            echo json_encode($validator);
        }


        function suket_kelahiran() {
            
            $validator = array('success' => false, 'messages' => array());

            $validate_data = array(
                
                array(
                    'field' => 'kelahiran_nama',
                    'label' => 'Nama Lengkap',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'gender',
                    'label' => 'Jenis Kelamin',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'kelahiran_tanggal',
                    'label' => 'Tanggal Kelahiran',
                    'rules' => 'required'
                ),
                
                array(
                    'field' => 'kelahiran_tempat',
                    'label' => 'Tempat Lahir',
                    'rules' => 'required'
                )
            );

            $this->form_validation->set_rules($validate_data);            
            $this->form_validation->set_message('required', 'Silahkan isi {field} terlebih dahulu');            
            $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
            
            
            
            if($this->form_validation->run() === true) {

                // pesan sukses setelah register (AJAX - json )
                $validator['success'] = true;                
                $validator['messages'] = 'Keperluan anda berhasil terkirim, lebih lanjut silahkan <b>Cek Status Pemohon</b> dalam 1x12 Jam';

                // input data after register
                $this->m_users->suket_kelahiran();                
                
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
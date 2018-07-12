<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class C_buatktp extends CI_Controller {

        public function __construct() {
            parent::__construct();
            $this->load->model('m_users');
        }

        public function buat() {
            $validator = array('success' => false, 'messages' => array());

            $validate_data = array(
                array(
                    'field' => 'nik_pemohon',
                    'label' => 'Nomor Induk Kependudukan',
                    'rules' => 'required|exact_length[18]|is_unique[warga.nik]|integer'
                ),
                array(
                    'field' => 'nama_pemohon',
                    'label' => 'Nama Lengkap',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'alamat_pemohon',
                    'label' => 'Alamat Lengkap',
                    'rules' => 'required'
                )
            );

            $this->form_validation->set_rules($validate_data);
            $this->form_validation->set_message('integer', '{field} harus berupa digit angka NIK (Sesuai KK)');            
            $this->form_validation->set_message('is_unique', '{field} yang dimasukkan telah terdaftar memiliki KTP');
            $this->form_validation->set_message('required', '{field} harus di isi');            
            $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

            if($this->form_validation->run() === true) {

                // pesan sukses setelah register (AJAX - json )
                $validator['success'] = true;                
                $validator['messages'] = 'Data pemohon pembuatan KTP berhasil terkirim, lebih lanjut silahkan <b>Cek Status Pemohon</b> dalam 1x12 Jam';

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
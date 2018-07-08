
<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class C_upload extends CI_Controller {

        public function __construct() {
            parent::__construct();        
            $this->load->model('m_users');
            $this->load->model('m_uploads');
            
        }
                
        public function upload_filektp() {

        $status = "";
        $msg = "";
        $file_element_name = 'ktp';            

        if ($status != "error")
        {
            $config['upload_path'] = 'assets/berkas/ktp/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 1024 * 2;
            $config['encrypt_name'] = FALSE;                

            $this->load->library('upload', $config);
            $this->upload->initialize($config);                

            if (!$this->upload->do_upload($file_element_name))
            {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            }
            else
            {
                $data = $this->upload->data();
                
                $file_id = $this->m_uploads->insert_filektp($data['file_name']);
                if($file_id)
                {
                    $status = "success";
                    $msg = "Berkas KTP berhasil terkirim";
                }
                else
                {
                    unlink($data['full_path']);
                    $status = "error";
                    $msg = "Terjadi kesalahan, silahkan coba kembali nanti.";
                }
            }
            @unlink($_FILES[$file_element_name]);
        }
        echo json_encode(array('status' => $status, 'msg' => $msg));
        }

        public function upload_filekk() {

        $status = "";
        $msg = "";
        $file_element_name = 'kk';            

        if ($status != "error")
        {
            $config['upload_path'] = 'assets/berkas/kk/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 1024 * 2;
            $config['encrypt_name'] = FALSE;                

            $this->load->library('upload', $config);
            $this->upload->initialize($config);                

            if (!$this->upload->do_upload($file_element_name))
            {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            }
            else
            {
                $data = $this->upload->data();
                
                $file_id = $this->m_uploads->insert_filekk($data['file_name']);
                if($file_id)
                {
                    $status = "success";
                    $msg = "Berkas KK berhasil terkirim";
                }
                else
                {
                    unlink($data['full_path']);
                    $status = "error";
                    $msg = "Terjadi kesalahan, silahkan coba kembali nanti.";
                }
            }
            @unlink($_FILES[$file_element_name]);
        }
        echo json_encode(array('status' => $status, 'msg' => $msg));
        }

        public function upload_fileopsi() {

        $status = "";
        $msg = "";
        $file_element_name = 'opsi';            

        if ($status != "error")
        {
            $config['upload_path'] = 'assets/berkas/opsional/';
            $config['allowed_types'] = 'pdf';
            $config['max_size'] = 1024 * 2;
            $config['encrypt_name'] = FALSE;                

            $this->load->library('upload', $config);
            $this->upload->initialize($config);                

            if (!$this->upload->do_upload($file_element_name))
            {
                $status = 'error';
                $msg = $this->upload->display_errors('', '');
            }
            else
            {
                $data = $this->upload->data();
                
                $file_id = $this->m_uploads->insert_fileopsi($data['file_name']);
                if($file_id)
                {
                    $status = "success";
                    $msg = "Berkas opsional berhasil terkirim";
                }
                else
                {
                    unlink($data['full_path']);
                    $status = "error";
                    $msg = "Terjadi kesalahan, silahkan coba kembali nanti.";
                }
            }
            @unlink($_FILES[$file_element_name]);
        }
        echo json_encode(array('status' => $status, 'msg' => $msg));
    }

}
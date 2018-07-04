<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class C_registrasi extends CI_Controller {

        public function __construct() {
            parent::__construct();
            
            $this->load->model('m_users');
    	}

        public function index() {
            $this->load->view('register/registrasi');
        }

        public function register() {
            $validator = array('success' => false, 'messages' => array());

            $validate_data = array(
                array(
                    'field' => 'nik',
                    'label' => 'Nomor Induk Kependudukan',
                    'rules' => 'required|callback_checkNIK|integer|is_unique[login.nik]'
                ),                
                array(
                    'field' => 'email',
                    'label' => 'Email',
                    'rules' => 'required|is_unique[login.email]'
                ),
                array(
                    'field' => 'password',
                    'label' => 'Kata Sandi',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'password2',
                    'label' => 'Konfirmasi Kata Sandi',
                    'rules' => 'required|matches[password]'
                )
            );

            $this->form_validation->set_rules($validate_data);
            $this->form_validation->set_message('required', '{field} harus di isi');
            $this->form_validation->set_message('is_unique', '{field} sudah teregistrasi');
            $this->form_validation->set_message('integer', '{field} harus berupa digit angka');		
            $this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

            if($this->form_validation->run() === true) {

                // pesan sukses setelah register (AJAX - json )
                $validator['success'] = true;                
                $validator['messages'] = 'Registrasi berhasil, silahkan cek email untuk aktivasi';  

                // input data after register
                $this->m_users->register();
                
                //verifikasi email
                $this->send_email_verification();

                // redirect user                

            } 
            else {
                $validator['success'] = false;
                foreach ($_POST as $key => $value) {
                    $validator['messages'][$key] = form_error($key);
                }
            }

            echo json_encode($validator);

        }

        public function send_email_verification() {
            // retrieve data user (table login)
            $user = $this->m_users->get_login('nik', $this->input->post('nik'));

            //set session
            $_SESSION['data_user'] = $user['nik'];

            //passing post data dari view            
            $nik        = $user['nik'];
            $nama       = $user['nama'];
            $alamat     = $user['alamat'];
            $j_kelamin  = $user['jenis_kelamin'];
            $pekerjaan  = $user['pekerjaan'];            
            $email      = $this->input->post('email');
            $password   = $this->input->post('password');
            $token      = $_SESSION['token'];            

            // load library email
            $this->load->library('email');
            $config = array();
            $config['charset'] = 'utf-8';
            $config['useragent'] = 'Codeigniter';
            $config['protocol']= "smtp";
            $config['mailtype']= "html";
            $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
            $config['smtp_port']= "465";
            $config['smtp_timeout']= "400";
            $config['smtp_user']= "ilham.aplikasi@gmail.com"; // isi dengan email kamu
            $config['smtp_pass']= "ilham.aplikasi.gmail"; // isi dengan password kamu
            $config['crlf']="\r\n";
            $config['newline']="\r\n";
            $config['wordwrap'] = TRUE;

            
            $this->email->initialize($config);
            $this->email->from($config['smtp_user']);
            $this->email->to($email);
            $this->email->subject('Verifikasi Email');
            $this->email->message(
                "<p><b>Halo</b>, dibawah ini merupakan data anda berdasarkan E-KTP</p>
                <br><br>
                <table style='text-align:left;'>
                    <tr>
                        <th>NIK</th>
                        <td>:</td>
                        <td>$nik</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>:</td>
                        <td>$nama</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>:</td>
                        <td>$alamat</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>:</td>
                        <td>$j_kelamin</td>
                    </tr>
                    <tr>
                        <th>Pekerjaan</th>
                        <td>:</td>
                        <td>$pekerjaan</td>
                    </tr>
                </table>
                <br>
                <p>Silahkan login dengan data berikut :</p>
                <br>
                <table style='text-align:left;'>
                    <tr>
                        <th>NIK</th>
                        <td>:</td>
                        <td>$nik</td>
                    </tr>
                    <tr>
                        <th>Kata Sandi</th>
                        <td>:</td>
                        <td>$password</td>
                    </tr>                
                </table>
                <br><br>
                Untuk melakukan verifikasi silahkan mengklik link berikut <a href='http://localhost/bismillah/verify/$email/$token' target='_blank'>Konfirmasi Email.</a><br><br> Atau jika tidak bisa silahkan klik http://localhost/bismillah/verify/$email/$token <br>
                <small><code>Setelah anda masuk ke link berikut, sudah otomatis terverifikasi dan silahkan login dengan data diatas</code></small>"
            );
            
            $this->email->send();
             
        }

        public function verify_register($email, $token) {
            $user = $this->m_users->get_login('email', $email);

            //cek email
            if(!$user) {
                die('email tidak ada');
            }

            if($user['token'] !== $token) {
                die('token tidak cocok');
            }
            
            //update role user
            $this->m_users->update_role($user['nik'], 1);

            //set session            
            //$_SESSION['verified'] = true;
            
            //redirect ke halaman verify 
            redirect('login');
        }

        public function checkNIK($nik) {
            if($nik == "") { 
                $this->form_validation->set_message('checkNIK','{field} harus di isi');
                return false;
            }

            if(!$this->m_users->get_user('nik',$nik)) { 
                $this->form_validation->set_message('checkNIK','{field} Salah/Tidak Sesuai');
                return false;
            }            

            return true;
        }

    }
?>
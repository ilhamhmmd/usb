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
                    'rules' => 'required|is_unique[login.nik]|callback_checkNIK'
                ),                
                array(
                    'field' => 'email',
                    'label' => 'Alamat Email',
                    'rules' => 'required|is_unique[login.email]'
                ),
                array(
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'required|min_length[6]'
                ),
                array(
                    'field' => 'password2',
                    'label' => 'Konfirmasi Password',
                    'rules' => 'required|matches[password]'
                )
            );

            $this->form_validation->set_rules($validate_data);
            $this->form_validation->set_message('required', '{field} harus di isi');
            $this->form_validation->set_message('is_unique', '{field} sudah diregistrasi');
            $this->form_validation->set_message('min_length', '{field} harus berisi minimal 6 karakter');
            $this->form_validation->set_message('matches', '{field} harus sama dengan password');
            $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

            if($this->form_validation->run() === true) {

                // pesan sukses setelah register (AJAX - json )
                $validator['success'] = true;                
                $validator['messages'] = 'Registrasi berhasil, silahkan cek email untuk aktivasi/verifikasi';  

                // input data after register
                $this->m_users->register();
                $this->m_users->nik_upload();
                
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
            $user = $this->m_users->get_user('nik', $this->input->post('nik'));

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

            //ngambil nama user sebelum spasi
            $preg = explode(" ", $user['nama']);

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
            $this->email->subject('Verifikasi Email | SIAP');
            $this->email->message(
                "<b>Halo $preg[0]</b>, dibawah ini merupakan data anda berdasarkan E-KTP
                <br><br>
                <div style='text-align:left;'>
                    <table>
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
                </div>
                <br>
                Silahkan login dengan data berikut :
                <br><br>
                <div style='text-align:left;'>
                    <table>
                        <tr>
                            <th>NIK</th>
                            <td>:</td>
                            <td>$nik</td>
                        </tr>
                        <tr>
                            <th>Password</th>
                            <td>:</td>
                            <td>$password</td>
                        </tr>                
                    </table>
                </div>
                <hr>
                Untuk melakukan aktivasi/verifikasi akun silahkan mengklik link berikut <a href='http://localhost/bismillah/verify/$email/$token' target='_blank'>Konfirmasi Email.</a> dan login dengan data di atas<br>"
            );
            
            $this->email->send();
             
        }

        public function verify_register($email, $token) {
            $user = $this->m_users->get_login('email', $email);

            //cek email
            if(!$user) {
                redirect(base_url());
            }

            if($user['token'] !== $token) {
                redirect(base_url());
            }
            
            //update role user
            $this->m_users->update_role($user['nik'], 1);

            //set session            
            //$_SESSION['verified'] = true;
            
            //redirect ke halaman verify(login) 
            redirect('login');
        }

        public function checkNIK($nik) {
            if($nik == "") { 
                $this->form_validation->set_message('checkNIK','{field} harus di isi');
                return false;
            }

            if(!$this->m_users->get_user('nik',$nik)) { 
                $this->form_validation->set_message('checkNIK','{field} salah / tidak sesuai');
                return false;
            }            

            return true;
        }

    }
?>
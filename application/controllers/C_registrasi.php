<?php 
    defined('BASEPATH') OR exit('No direct script access allowed');

    class C_registrasi extends CI_Controller {

        public function __construct() {
            parent::__construct();
            
            $this->load->model('m_users');
            if($this->m_users->loginUser()) {
                redirect('user');			
            } elseif($this->m_users->loginAdmin()) {
                redirect('admin');			
            }
    	}

        public function index() {
            $this->load->view('register/registrasi');
        }

        public function register() {
            $gender = $this->input->post('gender');
            $validator = array('success' => false, 'messages' => array());

            $validate_data = array(
                array(
                    'field' => 'nik',
                    'label' => 'Nomor Induk Kependudukan',
                    'rules' => 'required|exact_length[18]|is_unique[warga.nik]|integer'
                ),
                array(
                    'field' => 'nama_depan',
                    'label' => 'Nama Depan',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'alamat',
                    'label' => 'Alamat',
                    'rules' => 'required'
                ),
                array(
                    'field' => 'jobs',
                    'label' => 'Pekerjaan',
                    'rules' => 'required|callback_checkJobs'
                ),
                array(
                    'field' => 'username',
                    'label' => 'Username',
                    'rules' => 'required|is_unique[warga.username]'
                ),         
                array(
                    'field' => 'email',
                    'label' => 'Alamat Email',
                    'rules' => 'required|is_unique[warga.email]'
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
            $this->form_validation->set_message('integer', '{field} harus berupa digit angka NIK (Sesuai KK)');
            $this->form_validation->set_message('is_unique', '{field} sudah diregistrasi, silahkan ganti dengan yang lainnya');
            $this->form_validation->set_message('exact_length', '{field} harus berisi {param} digit angka NIK (Sesuai KK)');
            $this->form_validation->set_message('min_length', '{field} harus berisi lebih dari {param} karakter');
            $this->form_validation->set_message('matches', '{field} harus sama dengan password');
            $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');
            
            
            $this->form_validation->set_rules('gender', 'Jenis Kelamin', 'required|callback_checkGender'); // Validating select option field.

            if($this->form_validation->run() === true) {

                // pesan sukses setelah register (AJAX - json )
                $validator['success'] = true;                
                $validator['messages'] = 'Registrasi berhasil, silahkan cek email untuk aktivasi/verifikasi';  

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
            $user = $this->m_users->get_user('username', $this->input->post('username'));

            //set session                        

            //passing post data dari view            
            $username   = $user['username'];
            $nik        = $user['nik'];
            $nama       = $user['nama'];
            $alamat     = $user['alamat'];
            $pekerjaan  = $user['pekerjaan'];
            $j_kelamin  = $user['jenis_kelamin'];            
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
                "<b>Halo $preg[0]</b>, dibawah ini merupakan data diri anda :
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
                        <tr>
                            <th>Email</th>
                            <td>:</td>
                            <td>$email</td>
                        </tr>
                    </table>
                </div>
                <br>
                Silahkan login dengan data berikut :
                <br><br>
                <div style='text-align:left;'>
                    <table>
                        <tr>
                            <th>Username</th>
                            <td>:</td>
                            <td>$username</td>
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
            $user = $this->m_users->get_user('email', $email);

            //cek email
            if(!$user) {
                redirect(base_url());
            }

            if($user['token'] !== $token) {
                redirect(base_url());
            }
            
            //update role user
            $this->m_users->update_role($user['username'], 1);

            //set session            
            //$_SESSION['verified'] = true;
            
            //redirect ke halaman verify(login) 
            redirect('login');
        }

        public function checkGender($gender) {
            // 'none' is the first option that is default "-------Choose City-------"
            if($gender=="none"){
                $this->form_validation->set_message('checkGender', 'Silahkan pilih {field} anda.');
                return false;
                } else{
                // User picked something.
                return true;
                }
    
        }

        public function checkJobs() {
            // 'none' is the first option that is default "-------Choose City-------"
            $jobs = $this->input->post('jobs');
            if($jobs=="none"){
                $this->form_validation->set_message('checkJobs', 'Silahkan pilih {field} anda.');
                return false;
                } else{
                // User picked something.
                return true;
                }
    
        }
        

    }
?>
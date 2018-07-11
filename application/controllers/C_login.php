<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

    public function __construct() {
        parent::__construct();        
        $this->load->model('m_users');

        if($this->m_users->loginUser()) {
			redirect('user');			
		} elseif($this->m_users->loginAdmin()) {
			redirect('admin');			
		}
    }

	public function index()	{
        $this->load->view('masuk/login');        
    }
    
    public function login() {
            
        $validator = array('success' => false, 'messages' => array());

        $validate_data = array(
            
            array(
                'field' => 'username',
                'label' => 'Username',
                'rules' => 'required|callback_checkUsername|callback_checkRole'
            ),
            array(
                'field' => 'password',
                'label' => 'Password',
                'rules' => 'required|callback_checkPassword'
            )
        );

        $this->form_validation->set_rules($validate_data);
        $this->form_validation->set_message('required', '{field} harus di isi');
        $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

        if($this->form_validation->run() === true) {

            // retrieve data user (table login)
            $user = $this->m_users->get_user('username', $this->input->post('username'));            
            $admin = $this->m_users->get_admin('username_admin', $this->input->post('username'));
            
            //dashboard users
            if($user['role'] == 1) {
                //set session
                $_SESSION['data_user'] = $user['username'];
                $_SESSION['loginUser'] = true;

                $validator['success'] = true;
                $validator['messages'] = 'user'; 
                                    
            } elseif($admin['role'] == 2) {
                $_SESSION['data_admin'] = $admin['username_admin'];                
                $_SESSION['loginAdmin'] = true;

                $validator['success'] = true;
                $validator['messages'] = 'admin';

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

    public function checkRole($username) {
        $username = $this->input->post('username');
        $user = $this->m_users->get_user('username', $username);
        $admin = $this->m_users->get_admin('username_admin', $username);
        

        if($admin['role'] == 2) {             
            return true;
        } elseif($user['role'] == 1) {             
            return true;
        } else {
            $this->form_validation->set_message('checkRole','{field} belum aktif/terverifikasi, silahkan cek email/spam untuk aktivasi');
            return false;
        }
    }

    function checkRoleLupa() {
        $email = $this->input->post('email');
        $user = $this->m_users->get_user('email', $email);
        $admin = $this->m_users->get_admin('email_admin', $email);
        

        if($admin['role'] == 2) {             
            return true;
        } elseif($user['role'] == 1) {             
            return true;
        } else {
            $this->form_validation->set_message('checkRoleLupa','{field} salah / belum diregistrasikan');
            return false;
        }
    }

    public function checkUsername($username) {
        $user = $this->m_users->get_user('username', $username);
        $admin = $this->m_users->get_admin('username_admin', $username);
        
        if($username == null) { 
            $this->form_validation->set_message('checkUsername','{field} harus di isi');
            return false;
        }

        if($admin) {             
            return true;
        } elseif($user) {             
            return true;
        } else {
            $this->form_validation->set_message('checkUsername','{field} salah / belum diregistrasikan');
            return false;
        }
    }

    public function checkPassword($password) {
        $password = $this->input->post('password');
        $user = $this->m_users->get_user('password', $this->input->post('password'));
        $admin = $this->m_users->get_admin('password_admin', $this->input->post('password'));
        
        if($password == null) { 
            $this->form_validation->set_message('checkPassword','{field} harus di isi');
            return false;
        }
        if($admin) {             
            return true;
        } elseif($user) {             
            return true;
        } else {
            $this->form_validation->set_message('checkPassword','{field} salah');
            return false;
        }
    }

    public function checkEmail() {
        $email = $this->input->post('email');
        $user = $this->m_users->get_user('email', $email);
        $admin = $this->m_users->get_admin('email_admin', $email);
        
        if($email == null) { 
            $this->form_validation->set_message('checkEmail','{field} harus di isi');
            return false;
        }
        if($admin) {             
            return true;
        } elseif($user) {             
            return true;
        } else {
            $this->form_validation->set_message('checkEmail','{field} salah / belum diregistrasikan');
            return false;
        }
    }


    public function lupa_password() {
        $this->load->view('masuk/lupa_password');        
    }


    function lupa() {
        $email = $this->input->post('email');
        $user = $this->m_users->get_user('email', $email);
        $admin = $this->m_users->get_admin('email_admin', $email);
        $validator = array('success' => false, 'messages' => array());

        $validate_data = array(
            array(
                'field' => 'email',
                'label' => 'Alamat Email',
                'rules' => 'required|callback_checkEmail|callback_checkRoleLupa'
            )
        );

        $this->form_validation->set_rules($validate_data);
        $this->form_validation->set_message('required', '{field} harus di isi');                        
        $this->form_validation->set_error_delimiters('<small class="text-danger">', '</small>');

        if($this->form_validation->run() === true) {
            // pesan sukses setelah register (AJAX - json )
            $validator['success'] = true;                
            $validator['messages'] = 'Silahkan cek email anda untuk melihat Password';  
            
            if($admin['role'] == 2) {             
                $this->send_email_passwordAdmin();
            } elseif($user['role'] == 1) {             
            //email lupa PW
                $this->send_email_passwordUser();
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

    function send_email_passwordUser() {
        // retrieve data user (table login)
        $user = $this->m_users->get_user('email', $this->input->post('email'));
        
        //passing post data dari view            
        $username   = $user['username'];
        $nik        = $user['nik'];
        $email      = $user['email'];
        $password   = $user['password'];
        $token      = $user['token'];

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
        $this->email->subject('Lupa Password | SIAP');
        $this->email->message(
            "<b>Halo $preg[0]</b>, silahkan login kembali dengan data berikut :
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
            <hr>"
        );
        
        $this->email->send();
         
    }

    function send_email_passwordAdmin() {
        // retrieve data user (table login)
        $admin = $this->m_users->get_admin('email_admin', $this->input->post('email'));
        
        //passing post data dari view            
        $username   = $admin['username_admin'];        
        $email      = $admin['email_admin'];
        $password   = $admin['password_admin'];        

        //ngambil nama user sebelum spasi
        $preg = explode(" ", $admin['nama_admin']);

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
        $this->email->subject('Lupa Password | SIAP');
        $this->email->message(
            "<b>Halo $preg[0]</b>, silahkan login kembali dengan data berikut :
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
            <hr>"
        );
        
        $this->email->send();
         
    }


}

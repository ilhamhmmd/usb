<?php

    class M_users extends CI_Model {

        public function get_user($key, $value) {
            $query = $this->db->get_where('warga', array($key => $value));
            if(!empty($query->row_array())) {
                return $query->row_array();
            }
            return false;
        }

        public function get_admin($key, $value) {
            $query = $this->db->get_where('admin', array($key => $value));
            if(!empty($query->row_array())) {
                return $query->row_array();
            }
            return false;
        }

        public function register()	{
            $nama_depan = $this->input->post('nama_depan');
            $nama_belakang = $this->input->post('nama_belakang');
            $nama_lengkap = $nama_depan." ".$nama_belakang;
            $this->load->helper('string');
                $_SESSION['token'] = random_string('alnum', 16);
                
                $data = [
                    'nama'          => $nama_lengkap,
                    'jenis_kelamin' => $this->input->post('gender'),
                    'alamat'        => $this->input->post('alamat'),
                    'pekerjaan'        => $this->input->post('jobs'),
                    'nik'           => $this->input->post('nik'),
                    'username'      => $this->input->post('username'),
                    'email'         => $this->input->post('email'),
                    'password'      => $this->input->post('password'),
                    'token'         => $_SESSION['token']
                ];
    
                $this->db->insert('warga', $data);                
        }

        public function buat_ktp()	{            
                
                $data = [
                    'username'               => $this->input->post('username'),
                    'nama'              => $this->input->post('nama'),
                    'nik_pemohon'       => $this->input->post('nik_pemohon'),
                    'alamat'            => $this->input->post('alamat'),
                    'keperluan'     => $this->input->post('keperluan')
                ];
    
                $this->db->insert('buat_ktp', $data);                
        }

        public function nik_upload() {                          
                $data = [
                    'nik'           => $this->input->post('nik')
                ];
    
                $this->db->insert('upload', $data);                
        }

        public function update_role($username, $role_nr) {
            $data = array('role' => $role_nr);
            $this->db->where('username', $username);
            return $this->db->update('warga', $data);
        }

        public function loginUser() {
            if(!isset($_SESSION['loginUser'])) {
                return false;
            }
    
            return true;
        }

        public function loginAdmin() {
            if(!isset($_SESSION['loginAdmin'])) {
                return false;
            }
    
            return true;
        }

        public function verified() {
            if(!isset($_SESSION['verified'])) {
                return false;
            }
    
            return true;
        }

        function suket_tidakmampu() {
            $suket = $this->input->post('suket_sktm');
            $keperluan = $this->input->post('keperluanSKTM');
            $sktm = "<b>".$suket."</b> : Dibuat untuk keperluan <b>".$keperluan."</b>";

            $data = [                
                'keperluan'          => $sktm,
                'nama'               => $this->input->post('nama'),
                'nik'                => $this->input->post('nik')
            ];

            $this->db->insert('suket', $data);
        }

        function suket_kematian() {
            $suket = $this->input->post('suket_kematian');
            $nama = $this->input->post('kematian_nama');
            $nik = $this->input->post('kematian_nik');
            $tanggal = $this->input->post('kematian_tanggal');
            $suket_kematian = "<b>".$suket."</b> : Telah meninggal dengan nomor NIK <b>".$nik."</b> bernama <b>".$nama."</b> pada tanggal <b>".$tanggal."</b>";

            $data = [                
                'keperluan'          => $suket_kematian,
                'nama'               => $this->input->post('nama'),
                'nik'                => $this->input->post('nik')
            ];

            $this->db->insert('suket', $data);
        }

        function suket_usaha() {
            $suket = $this->input->post('suket_usaha');
            $usaha = $this->input->post('usaha_nama');
            $jenis = $this->input->post('usaha_jenis');            
            $suket_usaha = "<b>".$suket."</b> : Dibuat untuk usaha yang berjenis <b>".$jenis."</b> dengan nama <b>".$usaha."</b>";

            $data = [                
                'keperluan'          => $suket_usaha,
                'nama'               => $this->input->post('nama'),
                'nik'                => $this->input->post('nik')
            ];

            $this->db->insert('suket', $data);
        }

        function suket_kelahiran() {
            $suket = $this->input->post('suket_kelahiran');
            $nama = $this->input->post('kelahiran_nama');
            $jenkel = $this->input->post('gender');
            $tanggal = $this->input->post('kelahiran_tanggal');
            $tempat = $this->input->post('kelahiran_tempat');
            $suket_kelahiran = "<b>".$suket."</b> : Telah lahir bernama <b>".$nama."</b> pada tanggal <b>".$tanggal."</b> berjenis kelamin <b>".$jenkel."</b> di <b>".$tempat."</b>";

            $data = [                
                'keperluan'          => $suket_kelahiran,
                'nama'               => $this->input->post('nama'),
                'nik'                => $this->input->post('nik')
            ];

            $this->db->insert('suket', $data);
        }

    }

?>
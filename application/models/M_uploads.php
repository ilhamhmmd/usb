<?php 

    class M_uploads extends CI_Model {

        /* Alternatif
        function insert_file($proposal,$title){
            $data = array(
                    'namafile' => $title,
                    'file' => $proposal
                );  
            $result= $this->db->insert('files',$data);
            return $result;
        } */

        function insert_filektp($file, $username, $nik, $nama) {
            $data = array(                
                'ktp' => $file,
                'username' => $username,
                'nama'              => $nama,
                'nik'       => $nik
            );            
                        
            $result = $this->db->insert('upload',$data);
            return $result;
        }

        function insert_filekk($file, $username, $nik, $nama) {
            $data = array(                
                'kk' => $file,
                'username' => $username,
                'nama'              => $nama,
                'nik'       => $nik              
            );            
            
            $result = $this->db->insert('upload',$data);
            return $result;
        }

        function insert_fileopsi($file, $username, $nik, $nama) {
            $data = array(                
                'opsional' => $file,
                'username' => $username,
                'nama'              => $nama,
                'nik'       => $nik
            );            
            
            $result = $this->db->insert('upload',$data);
            return $result;
        }
        
    }

?>
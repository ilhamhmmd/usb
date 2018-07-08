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

        function insert_filektp($file) {
            $data = array(                
                'ktp' => $file                
            );            
            
            $result = $this->db->where('nik', $_SESSION['data_user']);
            $result = $this->db->update('upload',$data);
            return $result;
        }

        function insert_filekk($file) {
            $data = array(                
                'kk' => $file                
            );            
            
            $result = $this->db->where('nik', $_SESSION['data_user']);
            $result = $this->db->update('upload',$data);
            return $result;
        }

        function insert_fileopsi($file) {
            $data = array(                
                'opsional' => $file                
            );            
            $result = $this->db->where('nik', $_SESSION['data_user']);
            $result = $this->db->update('upload',$data);
            return $result;
        }
        
    }

?>
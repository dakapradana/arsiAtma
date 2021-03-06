<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Morganisasi extends CI_Model 
{
    public function MloadOrganisasiBiro(){
         $query=$this->db->select('id_biro,nama_biro,foto1_biro,foto2_biro,tugas_biro,deskripsi_biro')
                    ->from('biro')
                    ->get();
        return $query->result_array();
    }

    public function MloadOrganisasiPh(){
            $query=$this->db->select('id_ph,nama_lengkap,foto1_ph,tugas_ph,deskripsi_ph')
                    ->from('ph')
                    ->get();
        return $query->result_array();
        }



    function MloadOrganisasiBiroById($id_biro){
        $this->db->where('id_biro',$id_biro);
        $query = $this->db->get('biro');            
        return $query->row();
    }

    function MloadOrganisasiPhById($id_ph){
        $this->db->where('id_ph',$id_ph);
        $query = $this->db->get('ph');            
        return $query->row();
    }

    
    
    public function insertBiro($data,$id_biro){
            if ($id_biro != 0){
                $this->db->where('id_biro',$id_biro);
                $this->db->update('biro',$data);

            }else{
                $query = $this->db->insert('biro',$data);
            }
            
        }
    
        public function insertPh($data,$id_ph){
            if ($id_ph !== 0){
                $this->db->where('id_ph',$id_ph);
                return $this->db->update('ph',$data);
                

            }else{
                $query = $this->db->insert('ph',$data);
            }
            
        }
    
        public function deleteFilePh()
        {
            $this->db->where('id_ph',$id);
            return $this->db->delete('foto1_ph');
        }
    
}

?>
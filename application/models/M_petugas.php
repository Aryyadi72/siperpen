<?php
    class M_petugas extends CI_Model
    {
        public function tampil()
        {
            return $this->db->query('SELECT * FROM petugas');
        }

        public function hapus($id_petugas)
        {
            $this->db->where('id_petugas', $id_petugas);
            return $this->db->delete('petugas');
        }

        public function byid($id)
        {
            return $this->db->get_where('petugas', ['id_petugas' => $id])->row_array();
        }

        public function getLoginPetugasById($id_petugas)
        {
            $this->db->where('id_petugas', $id_petugas);
            $query = $this->db->get('login_petugas');
            
            return $query->row_array();
        }
    } 
?>
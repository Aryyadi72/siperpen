<?php
    class M_santri extends CI_Model
    {
        public function tampil()
        {
            return $this->db->query('SELECT * FROM santri');
        }

        public function hapus($id_santri)
        {
            $this->db->where('id_santri', $id_santri);
            return $this->db->delete('santri');
        }

        public function byid($id)
        {
            return $this->db->get_where('santri', ['id_santri' => $id])->row_array();
        }

        // public function akunbyid($id)
        // {
        //     return $this->db->get_where('login_santri', ['id_login_santri' => $id])->row_array();
        // }

        // public function getSantriUsername($id_santri)
        // {
        //     $this->db->select('login_santri.username');
        //     $this->db->select('login_santri.id_santri');
        //     $this->db->from('santri');
        //     $this->db->join('login_santri', 'santri.id_santri = login_santri.id_santri');
        //     $this->db->where('santri.id_santri', $id_santri);
            
        //     $query = $this->db->get();
        //     $row = $query->row();
            
        //     if ($row) {
        //         return $row->username;
        //     } else {
        //         return null;
        //     }
        // }

        public function getLoginSantriById($id_santri)
        {
            $this->db->where('id_santri', $id_santri);
            $query = $this->db->get('login_santri');
            
            return $query->row_array();
        }

    } 
?>
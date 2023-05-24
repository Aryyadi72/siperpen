<?php
    class M_pengembalian extends CI_Model
    {
        public function tampil()
        {
            return $this->db->query('SELECT * FROM pengembalian');
        }

        public function hapus($id_pengembalian)
        {
            $this->db->where('id_pengembalian', $id_pengembalian);
            return $this->db->delete('pengembalian');
        }

        public function byid($id)
        {
            return $this->db->get_where('pengembalian', ['id_pengembalian' => $id])->row_array();
        }
    } 
?>
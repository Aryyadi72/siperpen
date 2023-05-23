<?php
    class M_buku extends CI_Model
    {
        public function tampil()
        {
            return $this->db->query('SELECT * FROM buku');
        }

        public function hapus($id_buku)
        {
            $this->db->where('id_buku', $id_buku);
            return $this->db->delete('buku');
        }

        public function byid($id)
        {
            return $this->db->get_where('buku', ['id_buku' => $id])->row_array();
        }
    } 
?>
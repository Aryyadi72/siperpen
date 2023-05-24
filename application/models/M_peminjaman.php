<?php
    class M_peminjaman extends CI_Model
    {
        public function tampil()
        {
            return $this->db->query('SELECT * FROM peminjaman');
        }

        public function hapus($id_peminjaman)
        {
            $this->db->where('id_peminjaman', $id_peminjaman);
            return $this->db->delete('peminjaman');
        }

        public function byid($id)
        {
            return $this->db->get_where('peminjaman', ['id_peminjaman' => $id])->row_array();
        }
    } 
?>
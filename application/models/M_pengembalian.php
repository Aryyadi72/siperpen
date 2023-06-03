<?php
    class M_pengembalian extends CI_Model
    {
        // public function tampil()
        // {
        //     return $this->db->query('SELECT * FROM pengembalian');
        // }

        public function tampil()
        {
            $this->db->select('*');
            $this->db->from('pengembalian', 'peminjaman');
            $this->db->join('peminjaman','peminjaman.id_peminjaman = pengembalian.id_peminjaman');
            $this->db->join('santri','santri.id_santri = peminjaman.id_santri');
            $this->db->join('buku','buku.id_buku = peminjaman.id_buku');
            $this->db->join('petugas','petugas.id_petugas = peminjaman.id_petugas');
            $query = $this->db->get();
            return $query;
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
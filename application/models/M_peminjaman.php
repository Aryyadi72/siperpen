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

        public function show_data()
        {
            $this->db->select('*');
            $this->db->from('peminjaman');
            $this->db->join('buku','buku.id_buku = peminjaman.id_buku');
            $this->db->join('santri','santri.id_santri = peminjaman.id_santri');
            $this->db->join('petugas','petugas.id_petugas = peminjaman.id_petugas');
            $query = $this->db->get();
            return $query;
        }
    } 
?>
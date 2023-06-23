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

        public function tampil_jenis()
        {
            $this->db->select('*');
            $this->db->from('buku');
            $this->db->join('jenis_buku','jenis_buku.id_jenis_buku = buku.id_jenis_buku');      
            $query = $this->db->get();
            return $query;
        }

        // Jenis Buku

        public function jenis_buku()
        {
            return $this->db->query('SELECT * FROM jenis_buku');
        }

        public function jenis_byid($id)
        {
            return $this->db->get_where('jenis_buku', ['id_jenis_buku' => $id])->row_array();
        }

        public function hapus_jenis($id_jenis_buku)
        {
            $this->db->where('id_jenis_buku', $id_jenis_buku);
            return $this->db->delete('jenis_buku');
        }

        // Asal Buku
        public function tampil_asal()
        {
            return $this->db->query('SELECT * FROM asal_buku');
        }

        public function asal_byid($id)
        {
            return $this->db->get_where('asal_buku', ['id_asal_buku' => $id])->row_array();
        }

        public function hapus_asal($id_asal_buku)
        {
            $this->db->where('id_asal_buku', $id_asal_buku);
            return $this->db->delete('asal_buku');
        }

        public function getTotalBuku()
        {
            $query = $this->db->get('buku');
            return $query->num_rows();
        }

        public function getTotalPetugas()
        {
            $query = $this->db->get('petugas');
            return $query->num_rows();
        }

        public function getTotalSantri()
        {
            $query = $this->db->get('santri');
            return $query->num_rows();
        }

        public function getTotalPengembalian()
        {
            $query = $this->db->get('pengembalian');
            return $query->num_rows();
        }

        public function getTotalPeminjaman()
        {
            $query = $this->db->get('peminjaman');
            return $query->num_rows();
        }
    } 
?>
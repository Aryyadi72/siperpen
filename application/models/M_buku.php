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
    } 
?>
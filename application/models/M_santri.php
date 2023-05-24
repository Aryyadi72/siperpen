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
    } 
?>
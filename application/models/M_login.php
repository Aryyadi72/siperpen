<?php

class M_login extends CI_Model {

    public function cek_login_petugas($username, $password)
    {
        $this->db->select('*');
        $this->db->from('login_petugas');
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return FALSE;
        }
    }

    public function cek_login_santri($username, $password)
    {
        $this->db->select('*');
        $this->db->from('login_santri');
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $query = $this->db->get();

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return FALSE;
        }
    }
}
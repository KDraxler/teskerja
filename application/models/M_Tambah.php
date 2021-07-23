<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Tambah extends CI_Model
{
    public function tampil()
    {
        return $this->db->get('case_once');
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}

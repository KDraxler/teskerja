<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rest_model extends CI_Model
{
    public function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }

    public function get($id = null, $limit = 5, $offset = 0)
    {
        if ($id === null) {
            return $this->db->get('case_one', $limit, $offset)->result();
        } else {
            return $this->db->get_where('case_one', ['id' => $id])->result_array();
        }
    }

    public function count()
    {
        return $this->db->get('case_one')->num_rows();
    }

    public function add($data)
    {
        try {
            $this->db->insert('case_one', $data);
            $error = $this->db->error();
            if (!empty($error['code'])) {
                throw new Exception('Terjadi kesalahan :' . $error['message']);
                return false;
            }
            return ['status' => true, 'data' => $this->db->affected_rows()];
        } catch (Exception $ex) {
            return ['status' => false, 'msg' => $ex->getMessage()];
        }
    }
    public function update($id, $data)
    {
        try {
            $this->db->update('case_one', $data, ['id' => $id]);
            $error = $this->db->error();
            if (!empty($error['code'])) {
                throw new Exception('Terjadi kesalahan :' . $error['message']);
                return false;
            }
            return ['status' => true, 'data' => $this->db->affected_rows()];
        } catch (Exception $ex) {
            return ['status' => false, 'msg' => $ex->getMessage()];
        }
    }
    public function delete($id)
    {
        try {
            $this->db->delete('case_one', ['id' => $id]);
            $error = $this->db->error();
            if (!empty($error['code'])) {
                throw new Exception('Terjadi kesalahan :' . $error['message']);
                return false;
            }
            return ['status' => true, 'data' => $this->db->affected_rows()];
        } catch (Exception $ex) {
            return ['status' => false, 'msg' => $ex->getMessage()];
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_visa extends CI_Model
{
    public function addVisa($table, $data)
    {
        $this->db->insert($table, $data);

        return $this->db->affected_rows();
    }

    public function getVisaW($table, $where)
    {
        $data = $this->db->get_where($table, $where)->row_array();

        return $data;
    }
}

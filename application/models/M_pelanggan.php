<?php
class M_pelanggan extends CI_Model
{
    public function get($id = null)
    {
        if ($id) {
            return $this->db->from('pelanggan')
                ->where('id_pelanggan', $id)
                ->get();
        } else {
            return $this->db->get('pelanggan');
        }
    }
}

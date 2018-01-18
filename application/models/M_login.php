<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_login extends CI_Model{

    public function signin($where, $table){
        $res = $this->db->get_where($table, $where, 1);
        return $res;
	}
}
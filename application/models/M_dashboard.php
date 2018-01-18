<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

	public function getall()
	{
		$sql = $this->db->query("SELECT * FROM articles");
        return $sql;
	}

    public function addpost($data, $table){
        $res = $this->db->insert($table, $data);
        return $res;
    }

	public function edit($where, $table){
        return $this->db->get_where($table,$where);
    }

	public function update($where,$data,$table){
		$this->db->where($where);
		$res = $this->db->update($table,$data);
		return $res;
	}

	public function hapus($id){
		$this->db->where('id',$id);
		$this->db->delete('articles');
	}
}

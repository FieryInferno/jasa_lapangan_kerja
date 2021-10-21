<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPerusahaan extends CI_Model {

  public $table = 'perusahaan';
  
	public function getAll()
	{
    return $this->db->get($this->table)->result_array();
	}

  public function store($data)
  {
    $this->db->insert($this->table, $data);
  }

  public function get($id)
  {
    return $this->db->get_where($this->table, ['id'  => $id])->row_array();
  }
}
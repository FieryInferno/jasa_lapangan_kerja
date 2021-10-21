<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPerusahaan extends CI_Model {

  public $table = 'perusahaan';
  
	public function getAll()
	{
    return $this->db->get($this->table)->result_array();
	}
}
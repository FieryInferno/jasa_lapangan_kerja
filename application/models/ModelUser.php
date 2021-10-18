<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUser extends CI_Model {
  
	public function getByEmail($email)
	{
    return $this->db->get_where('user', ['email' => $email])->row_array();
	}
}
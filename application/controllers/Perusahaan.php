<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {
  
	public function index()
	{
    $data['title']      = 'perusahaan';
    $data['konten']     = 'admin/perusahaan/index';
    $data['perusahaan'] = $this->ModelPerusahaan->getAll();
		$this->load->view('admin/template', $data);
	}
}
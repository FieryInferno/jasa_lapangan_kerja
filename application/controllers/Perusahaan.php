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

  public function create()
  {
    $data['title']      = 'perusahaan';
    $data['konten']     = 'admin/perusahaan/create';
		$this->load->view('admin/template', $data);
  }

  public function store()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    $this->form_validation->set_rules('industri', 'Industri', 'required');
    $this->form_validation->set_rules('website', 'Website', 'required');
    $this->form_validation->set_rules('ukuran', 'Ukuran', 'required');

    if ($this->form_validation->run() !== FALSE) {
      $data['logo']       = $this->upload();
      $data['deskripsi']  = $this->input->post('deskripsi');
      $data['nama']       = $this->input->post('nama');
      $data['alamat']     = $this->input->post('alamat');
      $data['industri']   = $this->input->post('industri');
      $data['website']    = $this->input->post('website');
      $data['ukuran']     = $this->input->post('ukuran');

      $this->ModelPerusahaan->store($data);

      $this->session->set_flashdata('sukses', 'Berhasil tambah data');
      redirect('admin/perusahaan');
    } else {
      $this->session->set_flashdata('error', validation_errors());
      redirect($_SERVER['HTTP_REFERER']);
    }
  }

  private function upload()
  {
    $config['upload_path']    = './asset/';
    $config['allowed_types']  = 'jpeg|jpg|png';

    $this->upload->initialize($config);

    if ( ! $this->upload->do_upload('logo')) {
      $this->session->set_flashdata('error', $this->upload->display_errors());
      redirect($_SERVER['HTTP_REFERER']);
    } else {
      return $this->upload->data('file_name');
    }
  }
}
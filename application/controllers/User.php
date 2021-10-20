<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
  
	public function login()
	{
    $this->form_validation->set_rules('email', 'Email', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() !== FALSE) {
      $email    = $this->input->post('email');
      $password = $this->input->post('password');

      $data = $this->ModelUser->getByEmail($email);
      if ($data) {
        if (password_verify($password, $data['password'])) {
          $this->session->set_userdata([
            'id'    => $data['id'],
            'email' => $data['email']
          ]);

          switch ($data['level']) {
            case 'admin':
              $result['status'] = 'sukses';
              $result['level']  = 'admin';
              break;

            case 'user':
              $result['status'] = 'sukses';
              $result['level']  = 'user';
              break;
            
            default:
              # code...
              break;
          }
        } else {
          $result['status'] = 'error';
          $result['pesan']  = 'Password Salah';
        }
      } else {
        $result['status'] = 'error';
        $result['pesan']  = 'Email Salah';
      }
    } else {
      $result['status'] = 'error';
      $result['pesan']  = validation_errors();
    }
    $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($result));
	}
}
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
            'id'  => $data['id']
          ]);

          switch ($data['level']) {
            case 'admin':
              $result['sukses']  = 'admin';
              break;

            case 'user':
              $result['sukses']  = 'user';
              break;
            
            default:
              # code...
              break;
          }
        } else {
          $result['error']  = 'Password salah';
        }
      } else {
        $result['error']  = 'Email salah';
      }
    } else {
      $result['error']  = validation_errors();
    }
    $this->output
        ->set_content_type('application/json')
        ->set_output(json_encode($result));
	}
}
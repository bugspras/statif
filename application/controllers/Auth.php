<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller 
{
   
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
    }
    
	public function index()
	{
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        if($data = $this->model->auth($username,$password)):
            $newdata = array(
                'id'  => 1,
                'username'  => 'admin',
                'fullname'     => 'admin STATIF',
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            echo 'success';
        else:
            echo 'warning';
        endif;
	}
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }
}

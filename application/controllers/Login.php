<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
    }
    
	public function index()
	{
        if(!$this->session->userdata('logged_in')):
            $this->load->view('login/v_index');
        else:
            redirect('dashboard');
        endif;
	}
}

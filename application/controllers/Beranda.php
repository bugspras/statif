<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Beranda extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
    }
    
	public function index()
	{
        if(!$this->session->userdata('logged_in')):
            $data['slider'] = $this->model->slider_pengukuran();
            $this->load->view('beranda/v_index',$data);
        else:
            redirect('dashboard');
        endif;
	}
    
}

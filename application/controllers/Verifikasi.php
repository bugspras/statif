<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Verifikasi extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
    }
	
	public function index()
	{
        if(!$this->session->userdata('logged_in')):
            $this->load->view('verifikasi/v_index');
        else:
            redirect('login');
        endif;
	}

    public function cek(){
        $this->model->cek_verifikasi($this->input->post(null,true));
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registrasi extends CI_Controller 
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
            $data['status_permohonan'] = $this->model->status_permohonan();
            $this->load->view('registrasi/v_index',$data);
        else:
            redirect('dashboard');
        endif;
	}

    public function add(){
        $this->model->insert_pemohon($this->input->post(null,true));
    }
    
}

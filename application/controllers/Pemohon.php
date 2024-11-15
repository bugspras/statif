<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pemohon extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
    }
	
	public function index()
	{
		$data['title'] = 'STATIF';
		$pemohon = $this->model->list_pemohon();
		$data['data'] = [
			'pemohon' => $pemohon, 
		];
		$data['body'] = 'pemohon/v_index';
        template($data);
	}

    public function delete($id = null){
        $this->model->delete_pemohon($id);
        redirect('data-pemohon');
    }

    public function update(){
        $this->model->update_pemohon($this->input->post(null,true));
        redirect('data-pemohon');
    }
}

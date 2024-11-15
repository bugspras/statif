<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Peta extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
    }
	
	public function index()
	{
		$data['title'] = 'STATIF';
		$peta = $this->model->list_peta();
		$data['data'] = [
			'peta' => $peta, 
		];
		$data['body'] = 'peta/v_index';
        template($data);
	}

    public function form(){
		$pemohon = $this->model->list_peta_not_in();
		$data['title'] = 'STATIF';
		$data['data'] = [
			'pemohon' => $pemohon
		];
		$data['body'] = 'peta/v_add';
        template($data);
    }
    
    public function add(){
		$pdf = $this->do_upload();
		$data = [
			'kd_peta' => $this->input->post('kd_peta',true),
			'kd_pemohon' => $this->input->post('kd_pemohon',true),
			'file' => $pdf,
		];
        return $this->model->insert_peta($data);
    }

    public function delete($id = null){
        return $this->model->delete_peta($id);
    }
	public function do_upload(){
        $config['upload_path']="./upload";
        $config['allowed_types']='pdf';
        $config['encrypt_name'] = TRUE;
		$this->upload->initialize($config);
		$image = '';
        	if($this->upload->do_upload("file")){
				$data = $this->upload->data();
            	$image = $data['file_name']; 
        	}
		return $image;
     }

}

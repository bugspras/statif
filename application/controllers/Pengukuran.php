<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengukuran extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
    }
	
	public function index()
	{
		$data['title'] = 'STATIF';
		$pengukuran = $this->model->list_pengukuran();
		$data['data'] = [
			'pengukuran' => $pengukuran, 
		];
		$data['body'] = 'pengukuran/v_index';
        template($data);
	}

    public function form(){
		$pemohon = $this->model->list_pemohon_not_in();
		$anggota = $this->model->list_anggota();
		$data['title'] = 'STATIF';
		$data['data'] = [
			'pemohon' => $pemohon,
			'anggota' => $anggota
		];
		$data['body'] = 'pengukuran/v_add';
        template($data);
    }
    
    public function add(){
		$pdf = $this->do_upload();
		$data = [
			'kd_pengukuran' => $this->input->post('kd_pengukuran',true),
			'kd_pemohon' => $this->input->post('kd_pemohon',true),
			'kd_anggota_pengukur' => $this->input->post('kd_anggota_pengukur',true),
			'tanggal_pengukuran' => $this->input->post('tanggal_pengukuran',true),
			'waktu_pengukuran' => $this->input->post('waktu_pengukuran',true),
			'file' => $pdf,
		];
        return $this->model->insert_pengukuran($data);
    }

    public function delete($id = null){
        return $this->model->delete_pengukuran($id);
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

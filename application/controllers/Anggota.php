<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Anggota extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
    }
	
	public function index()
	{
		$data['title'] = 'STATIF';
		$anggota = $this->model->list_anggota();
		$data['data'] = [
			'anggota' => $anggota, 
		];
		$data['body'] = 'anggota/v_index';
        template($data);
	}
    public function form($id = null){
		if($id):
			$data['title'] = 'STATIF';
			$anggota = $this->model->list_anggota($id)->row();
			$data['data'] = [
				'kd_anggota_pengukur' => $anggota->kd_anggota_pengukur,
				'nama_anggota_pengukur' => $anggota->nama_anggota_pengukur,
				'nomor_telepon' => $anggota->nomor_telepon,
			];
		else:
			$data['title'] = 'STATIF';
			$data['data'] = [
				'kd_anggota_pengukur' => '',
				'nama_anggota_pengukur' => '',
				'nomor_telepon' => '',
			];
		endif;
		$data['body'] = 'anggota/v_add';
        template($data);
    }
	public function add(){
		if($this->input->post('kode',true)):
			$data = [
				'kd_anggota_pengukur' => $this->input->post('kode',true),
				'nama_anggota_pengukur' => $this->input->post('nama_anggota_pengukur',true),
				'nomor_telepon' => $this->input->post('nomor_telepon',true)
			];
			$this->model->update_anggota($data);
		else:
			$data = [
				'kd_anggota_pengukur' => $this->input->post('kd_anggota_pengukur',true),
				'nama_anggota_pengukur' => $this->input->post('nama_anggota_pengukur',true),
				'nomor_telepon' => $this->input->post('nomor_telepon',true)
			];
			$this->model->insert_anggota($data);
		endif;
	}
	public function delete(){
		$this->model->delete_anggota($this->input->post('kd_anggota_pengukur'));
	}
}
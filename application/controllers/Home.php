<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
    }
	
	public function index()
	{
		$data['title'] = 'STATIF';
		$data['data'] = [
			'permohonan' => $this->model->count_proses('permohonan'),
			'pengukuran' => $this->model->count_proses('pengukuran'),
			'proses' => $this->model->count_proses('proses'),
			'selesai' => $this->model->count_proses('selesai'),
			'total' => $this->model->count_proses(),
			'table' => $this->model->table_dashboard(),
			'jenis_1' => $this->model->count_jenis_layanan(1),
			'jenis_2' => $this->model->count_jenis_layanan(2),
			'jenis_3' => $this->model->count_jenis_layanan(3),
			'jenis_4' => $this->model->count_jenis_layanan(4),
			'jenis_5' => $this->model->count_jenis_layanan(5),
			'jenis_6' => $this->model->count_jenis_layanan(6),
		];
		$data['body'] = 'home/v_index';
        template($data);
	}
}

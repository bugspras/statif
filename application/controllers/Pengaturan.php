<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengaturan extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
    }
	
	public function index()
	{
		$data['title'] = 'STATIF';
		$data['data'] = [];
		$data['body'] = 'pengaturan/v_index';
        template($data);
	}
}

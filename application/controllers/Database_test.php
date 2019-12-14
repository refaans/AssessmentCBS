<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Database_test extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}

	function nilai(){
		$data['nilai'] = $this->m_data->fetching_data()->result();
		$this->load->view('db_test.php', $data);
	}
}
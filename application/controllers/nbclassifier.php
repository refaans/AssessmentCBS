<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/** Naive Bayes Classifier **/

class NBClassifier extends CI_Controller{
	
	function __construct(){
		parent::__construct();
		// $this->load->model('m_nbclassifier');
		$this->load->model('m_datatest');
		$this->load->library('form_validation');
	}

	function index(){
		$data = array(
			'id'	=> set_value('id'),
			'att'	=> set_value('att'),
			'kog'	=> set_value('kog'),
			'psi'	=> set_value('psi'),
			'afe'	=> set_value('afe'),
		);

		$data['data_test'] = $this->m_datatest->get_all();
		$this->load->view('form', $data);
	}

	public function add(){
		$data_test = $this->m_datatest;
		$validation = $this->form_validation;
		$validation->set_rules($data_test->rules());

		if ($validation->run()){
			$data_test->save();
			$this->session->set_flashdata('success', 'Save Succed');
		}
		
		$this->load->view('form');
	}

	//count probability
	public function nbc_process(){
		$data = array(
			'id'	=> $this->input->post('id'),
			'att'	=> $this->input->post('att'),
			'kog'	=> $this->input->post('kog'),
			'psi'	=> $this->input->post('psi'),
			'afe'	=> $this->input->post('afe')
		);

		$this->db->add($data);

		//convert from int to boolean
		if ($data['att'] >= 75){
			$data['att'] = '1';
		} else {
			$data['att'] = '0';
		}

		if ($data['kog'] >= 87){
			$data['kog'] = '1';
		} else {
			$data['kog'] = '0';
		}

		if ($data['psi'] >= 87){
			$data['psi'] = '1';
		} else {
			$data['psi'] = '0';
		}

		if ($data['afe'] >= 87){
			$data['afe'] = '1';
		} else {
			$data['afe'] = '0';
		}

		//probability attendance
		$lulus_att= $this->M_nbclassifier->get_parameter('att', $data['att'], '1')->the_result;
		$gagal_att= $this->M_nbclassifier->get_parameter('att', $data['att'], '0')->the_result;

		//probability kognitif
		$lulus_kog= $this->M_nbclassifier->get_parameter('kog', $data['kog'], '1')->the_result;
		$gagal_kog= $this->M_nbclassifier->get_parameter('kog', $data['kog'], '0')->the_result;

		//probability psikomotor
		$lulus_psi= $this->M_nbclassifier->get_parameter('psi', $data['psi'], '1')->the_result;
		$gagal_psi= $this->M_nbclassifier->get_parameter('psi', $data['psi'], '0')->the_result;

		//probability afektif
		$lulus_afe= $this->M_nbclassifier->get_parameter('afe', $data['afe'], '1')->the_result;
		$gagal_afe= $this->M_nbclassifier->get_parameter('afe', $data['afe'], '0')->the_result;

		//probability
		$lulus = $lulus_att*$lulus_kog*$lulus_psi*$lulus_afe;
		$gagal = $gagal_att*$gagal_kog*$gagal_psi*$gagal_afe;

		$total = $lulus + $gagal;
		$result_lulus = $lulus/$total;
		$result_gagal = $gagal/$total;

		if($result_lulus > $result_gagal){
			$prediction = '1';
		} else{
			$prediction = '0';
		}

		$data["lulus"] = $result_lulus;
		$data["gagal"] = $result_gagal;
		$data["prediction"] = $prediction;

		$data_status = array(
			'status'	=> $this->input->post('prediction')
		);

		$this->db->add($data_status);

	}

	public function print_result($prediction){
		if ($prediction == 1){
			echo "Lulus";
		} else{
			echo "Tidak Lulus";
		}
	}
}
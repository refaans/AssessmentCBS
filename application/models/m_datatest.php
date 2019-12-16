<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Data Test

class M_datatest extends CI_Model{
	public $table = 'data_test';

	public $id;
	public $att;
	public $kog;
	public $psi;
	public $afe;

	function __construct(){
		parent::__construct();
	}

	public function rules(){
		return[
			['field'	=> 'id'
			'label'		=> 'ID'
			'rules'		=> 'required']

			['field'	=> 'att'
			'label'		=> 'Attendance'
			'rules'		=> 'required']

			['field'	=> 'kog'
			'label'		=> 'Cognitive'
			'rules'		=> 'required']

			['field'	=> 'psi'
			'label'		=> 'Psychomotor'
			'rules'		=> 'required']

			['field'	=> 'afe'
			'label'		=> 'Affective'
			'rules'		=> 'required']
		];
	}

	//get all
	function get_all(){
		return $this->db->get($this->table)->result();
	}

	public function add(){
		$data_test = $this->m_datatest;
		$validation = $this->form_validation;
		$validation->set_rules($data_test->rules());

		if ($validation->run()){
			$product->save();
			$this->session->set_flashdata('success', 'Save Succed')
		}
		
		$this->load->view('form');
	}


	// // insert/save data
	// function save(){
	// 	$post = $this->input->post();

	// 	$this->id = $post['id'];
	// 	$this->att = $post['att'];
	// 	$this->kog = $post['kog'];
	// 	$this->psi = $post['psi'];
	// 	$this->afe = $post['afe'];
	// 	$this->db->insert($this->table, $this);
	// }

	function insert($data){
		$this->db->insert($data);
	}

	// //update data
	// function update($id, $data){
	// 	$this->db->where($this->id, $id);
	// 	$this->db->update($this->table, $data);
	// }

	// //delete data
	// function delete($id, $data){
	// 	$this->db->where($this->id, $id);
	// 	$this->db->delete($this->table, $data);
	// }

	//show
	public function show(){
		$this->db->select('*');
		$this->db->from('data_test');
		$this->db->where('id');
		return $this->db->get($this->table)->row();
	}
}
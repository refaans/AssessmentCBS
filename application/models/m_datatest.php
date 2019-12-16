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
			['field'	=> 'id',
			'label'		=> 'ID',
			'rules'		=> 'required'],

			['field'	=> 'att',
			'label'		=> 'Attendance',
			'rules'		=> 'required'],

			['field'	=> 'kog',
			'label'		=> 'Cognitive',
			'rules'		=> 'required'],

			['field'	=> 'psi',
			'label'		=> 'Psychomotor',
			'rules'		=> 'required'],

			['field'	=> 'afe',
			'label'		=> 'Affective',
			'rules'		=> 'required']
		];
	}

	//get all
	function get_all(){
		return $this->db->get($this->table)->result();
	}

	function get_by_id(){
		return $this->db->get_where($this->table, ['id' => $id])->row();
	}

	public function get_parameter($parameter, $val_param, $status){

		//count 
		$check_prob = "
			SELECT count(status) from nilai where $parameter = '$val_param' and status = $status ";

		//apply laplace corection if probability = 0	
		if ($check_prob == 0){
			$sql = "
				SELECT (SELECT (count(status)+1) from nilai where $parameter = '$val_param' and status ='$status')/(count(status)+2) as the_result from nilai where status = '$status' ";
		} else{
			$sql = "
				SELECT (SELECT count(status) from nilai where $parameter = '$val_param' and status ='$status')/count(status) as the_result from nilai where status = '$status' ";
		}

		$query = $this->db->query($sql);
		return $query->row();

	}


	// insert/save data
	function save(){
		$post = $this->input->post();

		$this->id = $post['id'];
		$this->att = $post['att'];
		$this->kog = $post['kog'];
		$this->psi = $post['psi'];
		$this->afe = $post['afe'];
		$this->db->insert($this->table, $this);
	}

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